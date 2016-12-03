<?php
session_start();
require_once("../app/model/comment.php");
$action = mysql_real_escape_string($_REQUEST['a']);
$user = $_SESSION['sessionUserID'];
$comment = mysql_real_escape_string($_REQUEST['post']);
$execucao = new commentModel;

if ($action=="save"){
	 $c['usuarios_userid'] = mysql_real_escape_string($_POST['usercomment']);
	$c['publicacoes_pubid'] = mysql_real_escape_string($_POST['postid']);
	 $c['publicacoes_usuarios_userid']  = mysql_real_escape_string($_POST['userpost']);
	  $c['comcontent'] = mysql_real_escape_string($_POST['content']);
	$campos = implode(',', array_keys($c));
	 $valores = '"'.implode('","', array_values($c)).'"';
	 if ($execucao->saveComment($campos, $valores)) {
	 	voltar("index.php");
	 }
	 else {
	 	echo "error ao publicar comentário";
	 }
}
if ($action =="register") {
    $c['username'] = mysql_real_escape_string($_POST['name']);
    $c['useremail'] = mysql_real_escape_string($_POST['email']);
    $c['userpassword'] = md5(mysql_real_escape_string($_POST['password']));
    $c['userphone'] = mysql_real_escape_string($_POST['phone']);
    $campos = implode(',', array_keys($c));
    $valores = '"'.implode('","', array_values($c)).'"';
    $execucao->register($campos, $valores);
}
if ($action=="mypost") {
	$execucao->myPost($user);
	require_once("../app/view/mypost.php");
}
if ($action=="show") {
	$execucao->showComment($comment);
	require_once("../app/view/comentarios.php");
}

 ?>
