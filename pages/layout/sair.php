<?php 
	session_start(); 
	unset($_SESSION['nick']);
	session_destroy();
	header("location:../../index.php");
?>	