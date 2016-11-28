<?php
session_start();
require_once("../../config/conection.php");
require_once("../model/user.php");
$action = mysql_real_escape_string($_REQUEST['action']);

$execucao = new userModel;



 ?>
