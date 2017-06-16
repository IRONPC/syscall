<?php
	
	//include '../layout/menu_botoes.php';
	switch ($row['codNivel']) {
		case '9910':
			 include '../layout/menu_btn_admin.php';
			break;
		case '9920':
			 include '../layout/menu_btn_usuario.php';
			break;		
		default:
			include '../layout/menu_btn_usuario.php';
			break;
	}
	
?>