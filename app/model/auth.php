<?php
session_start();
class  authModel {
  var $register;
  var $execute;
  var $resultado;
  function authModel (){
    $this->con = new conexao ();
  }
  function register($campos, $valores){
    $sql = "INSERT INTO usuarios ($campos) VALUES($valores)";
    if($this->resultado = $this->con->banco->Execute($sql)){
      $sqlLast = "SELECT MAX(userid) AS userid FROM usuarios";
      $this->execute = $this->con->banco->Execute($sqlLast);
      if ($this->register = $this->execute->FetchNextObject()) {
        $_SESSION['sessionUserID'] = $this->register->USERID;
        echo 111;
      }
      else {
        echo mysql_error();
      }
    }else {
      echo mysql_errno();
    }
  }
  function listarDoador(){
    $sql = "SELECT * FROM doador";
    $this->resultado = $this->con->banco->Execute($sql);
  }
  function login($login, $senha){
    $estado = 1;
    $sql = "SELECT * FROM usuarios
    WHERE (useremail = '".$login."' AND userpassword = '".$senha."' AND userstatus = '".$estado."'
    OR (userphone = '".$login."'  AND userpassword = '".$senha."' AND userstatus = '".$estado."' ))" or die(mysql_error());
    $this->execute = $this->con->banco->Execute($sql);
    if($this->register = $this->execute->FetchNextObject()){
      $_SESSION['sessionUserID'] = $this->register->USERID;
      $_SESSION['sessionUserName'] = $this->register->USERNAME;
      $_SESSION['sessionUserEmail'] = $this->register->USEREMAIL;
      $_SESSION['sessionUserStatus'] = $this->register->USERSTATUS;
      return true;
    }else {
      return false;
    }
  }
}


?>
