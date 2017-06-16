<?php
	// Sistema de HelpDesk
	// Base = MySQL

	$host = "mysql11.redehost.com.br";
	$user = "sgadmin";
	$pass = "Q!w2@2016";
	$banco = "SGPDSTI";
	$port = "41890";
	$server = "mysql11.redehost.com.br:41890";

	$sql = mysql_connect($server, $user, $pass);
	mysql_select_db($banco) or die("NÃ£o foi possÃ­vel realizar a conexÃ£o!");

	/*if(!$sql) {
		echo "NÃ£o foi possÃ­vel conectar ao banco!"; exit;
	}
	else {
		echo "ParabÃ©ns! Estamos conectado ao banco!";
		$query = mysql_query("SELECT * FROM sc_cadLogin ");
		$rst = mysql_num_rows($query);
		echo $rst;
	}*/

	mysql_close();

?>