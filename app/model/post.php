<?php
session_start();
class  postModel {
  var $register;
  var $execute;
  var $resultado;
  function postModel (){
    $this->con = new conexao ();
  }
  function myPost($user){
    $sql = "SELECT posts.*, usuarios.* FROM posts JOIN usuarios
            ON posts.usuarios_userid = usuarios.userid WHERE usuarios.userid = $user ORDER BY posts.postid DESC";
    $this->resultado = $this->con->banco->Execute($sql);
  }
}


?>
