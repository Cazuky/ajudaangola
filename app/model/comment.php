<?php
session_start();
class  commentModel {
  var $register;
  var $execute;
  var $resultado;
  function commentModel (){
    $this->con = new conexao ();
  }
  function listComments($user){
    $sql = "SELECT posts.*, usuarios.* FROM posts JOIN usuarios
            ON posts.usuarios_userid = usuarios.userid WHERE usuarios.userid = $user ORDER BY posts.postid DESC";
    $this->resultado = $this->con->banco->Execute($sql);
  }
  function saveComment($keys, $values){
    $sql= "INSERT INTO comentarios ($keys) VALUES ($values)";
    if ($this->execute = $this->con->banco->Execute($sql)) {
      return true;
    }
    else {
      return false;
    }
  }

}


?>
