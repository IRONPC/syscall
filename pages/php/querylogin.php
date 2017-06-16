<?php
	include '../../config/config.php';

	$login 	=	$_SESSION['login'];	
	$senha  =	$_SESSION['senha'];
	
	$sql = mysql_query("SELECT login, senha, codNivel, nome, sobrenome FROM sc_cadusuario WHERE login = '".$login."' AND senha = '".$senha."' ") or die(mysql_error());
	
	$row = mysql_fetch_assoc($sql);
?>