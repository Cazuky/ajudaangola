<?php
session_start();
class  interesseModel {
  var $register;
  var $execute;
  var $resultado;
  function interesseModel (){
    $this->con = new conexao ();
  }
  function listInteresse($user){
    $sql = "SELECT posts.*, interesseusuario.*, usuarios.* FROM interesseusuario
    JOIN posts ON interesseusuario.publicacoes_pubid = posts.postid
    JOIN usuarios ON usuarios.userid = posts.usuarios_userid WHERE interesseusuario.usuarios_userid = $user ORDER BY posts.postid DESC";
    $this->resultado = $this->con->banco->Execute($sql);
  }
  function saveInteresse($keys, $values){
    $sql= "INSERT INTO interesseusuario ($keys) VALUES ($values)";
    if ($this->execute = $this->con->banco->Execute($sql) or die (mysql_error())) {
      return true;
    }
    else {
      return false;
    }
  }

}


?>
