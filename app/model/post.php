<?php
session_start();
class  postModel {
  var $register;
  var $execute;
  var $resultado;
  function postModel (){
    $this->con = new conexao ();
  }
  function register($campos, $valores){
    $sql = "INSERT INTO posts ($campos) VALUES($valores)";
    if($this->resultado = $this->con->banco->Execute($sql)){
        echo 111;
      }
      else {
        echo mysql_error();
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
