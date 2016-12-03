<?php
session_start();
class  userModel {
  var $register;
  var $execute;
  var $resultado;
  var $numRows;
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
            ON posts.usuarios_userid = usuarios.userid WHERE posts.poststatus = 1 ORDER BY posts.postid DESC";
    $this->resultado = $this->con->banco->Execute($sql);
  }
  function listComments($post){
    $sqlnumComment = "SELECT  comentarios.*, usuarios.* FROM comentarios
    JOIN usuarios ON comentarios.usuarios_userid = usuarios.userid WHERE comentarios.publicacoes_pubid = ".$post;
    $this->execute = $this->con->banco->Execute($sqlnumComment);
    return $this->execute->numRows();
  }
  function CountFollowers($post){
    $sqlnumComment = "SELECT  interesseusuario.*, posts.* FROM interesseusuario
    JOIN posts ON interesseusuario.publicacoes_pubid = posts.postid WHERE posts.postid = ".$post;
    $this->execute = $this->con->banco->Execute($sqlnumComment);
    return $this->execute->numRows();
  }
}


?>
