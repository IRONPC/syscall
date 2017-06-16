<?php	
		
	if(!isset($_GET['id']) == ' ') {			
		include '../content/dashboard.php';
	} 
	else if ($_GET['id'] == 'menu') {
		include '../content/dashboard.php';
	} 
	else if ($_GET['id'] == 'TicketAberto' ) {
		include '../content/content_listar_TicketAberto.php';
	}
	else if ($_GET['id'] == 'TicketAnalise' ) {
		include '../content/content_listar_TicketAnalise.php';
	}
	else if ($_GET['id'] == 'TicketFechado' ) {
		include '../content/content_listar_TicketFechado.php';
	}
	
	else if ($_GET['id'] == 'CadEmpresa') {
		include '../content/content_listar_empresa.php';
	}		
	else if ($_GET['id'] == 'CadUsuarios') {
		include '../content/content_listar_usuarios.php';
	}
	else if ($_GET['id'] == 'CadAmbiente') {
		include '../content/content_listar_ambiente.php';
	}

	else if ($_GET['id'] == 'Config') {
		include 'config_configuracoes.php';
	}
	else { 
		//include '../content/dashboard.php';
	}
		
?>