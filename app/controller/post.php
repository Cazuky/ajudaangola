<?php
session_start();
require_once("../../config/conection.php");
require_once("../model/post.php");
$action = mysql_real_escape_string($_REQUEST['action']);

$execucao = new postModel;

if ($action=="save"){
	$c['postcontent'] = mysql_real_escape_string($_POST['content']);
	$c['usuarios_userid'] = $_SESSION['sessionUserID'];
	$campos = implode(',', array_keys($c));
	$valores = '"'.implode('","', array_values($c)).'"';
	$execucao->register($campos, $valores);
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


 ?>
