<?php
require ("adodb/adodb.inc.php");
require("functions.php");
class conexao {
	var $banco;
	function conexao (){
		$this->banco = NewADOConnection ("mysql");
		$this->banco->dialect=3;
		$this->banco->debug=false;
		//$this->banco->connect ("localhost", "complexo_ajudaangola", "1Q2W3E4R5T6Y", "complexo_ajudaangola")  or die($this->banco->ErrorMsg());
		$this->banco->connect ("localhost", "root", "", "ajudaangola")  or die($this->banco->ErrorMsg());
		$this->banco->Execute("SET NAMES 'utf8'");
		$this->banco->Execute('SET character_set_connection=utf8');
		$this->banco->Execute('SET character_set_client=utf8');
		$this->banco->Execute('SET character_set_results=utf8');
	}
}
// condiguration Directory;
define("URLIMAGE", "../libs/images/");

$con = new conexao();


?>
