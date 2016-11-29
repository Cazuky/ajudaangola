<?php
sleep(2);
session_start();
require_once("../../config/conection.php");
require_once("../model/auth.php");
$action = mysql_real_escape_string($_REQUEST['action']);

$execucao = new authModel;

if ($action=="login"){
	$login = mysql_real_escape_string($_POST['login']);
	$senha = mysql_real_escape_string($_POST['password']);
 if ($execucao->login($login, md5($senha))):
	 echo '1';
 else:
	 echo mysql_errno();
 endif;
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
