<?php
session_start();
require_once("../app/model/interesse.php");
$action = mysql_real_escape_string($_REQUEST['a']);
$user = $_SESSION['sessionUserID'];
$execucao = new interesseModel;

if ($action=="save"){
	 $c['usuarios_userid'] = $_SESSION['sessionUserID'];
	$c['publicacoes_pubid'] = mysql_real_escape_string($_REQUEST['post']);
	$campos = implode(',', array_keys($c));
	 $valores = '"'.implode('","', array_values($c)).'"';
	 if ($execucao->saveInteresse($campos, $valores)) {
	 	voltar("index.php");
	 }
	 else {
	 	echo "error ao publicar comentário";
	 }
}
if ($action=="meusinteresses") {
	$execucao->listInteresse($user);
	require_once("../app/view/meusinteresses.php");
}


 ?>
