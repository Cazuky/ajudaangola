<?php
session_start();
class  userModel {
  var $register;
  var $execute;
  var $resultado;
  var $postRegister;
  function userModel (){
    $this->con = new conexao ();
  }
  function MyProfile ($userID){
    $sqlGeral = "SELECT * FROM usuarios WHERE usuarios.userid = ".$userID;
    $this->execute = $this->con->banco->Execute($sqlGeral);
    $this->register = $this->execute->FetchNextObject();
  }
  function listPosts(){
    $sql = "SELECT posts.*, usuarios.* FROM posts JOIN usuarios
            ON posts.usuarios_userid = usuarios.userid";
    $this->resultado = $this->con->banco->Execute($sql);
  }
}


?>
