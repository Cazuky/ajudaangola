<?php
session_start();
require_once("../app/model/interesse.php");
$action = mysql_real_escape_string($_REQUEST['a']);
$user = $_SESSION['sessionUserID'];
$execucao = new interesseModel;

if ($action=="save"){
	print_r($_POST);
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
    //print_r($c);
    $valores = '"'.implode('","', array_values($c)).'"';
    $execucao->register($campos, $valores);
}
if ($action=="mypost") {
	$execucao->myPost($user);
	require_once("../app/view/mypost.php");
}


 ?>
