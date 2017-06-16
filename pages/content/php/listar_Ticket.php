<?php	
/*
	EXIBE A LISTA DE CHAMADOS NA PARTE DO TICKET
*/
	//$login = $_SESSION['login'];

	class ListarTicket {
		public $listAberto, $listAnalise, $listFechado;
		public $row, $login;
		

		public function listarAberto(){
			$this->login = $_SESSION['login'];			
			$this->listAberto = mysql_query("SELECT ch.seqNumCh, ch.dt_aberto, ch.empresa, ch.telefone, ch.email, ch.nome, ch.descricao,
												usr.login, usr.codNivel
											 FROM sc_cadchamado ch
												INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
											 WHERE ch.situacao = '1' 
											   AND usr.login='$this->login'
											   OR (usr.codNivel != '9910') ") or die(mysql_error());			
		}

		public function listarAnalise(){
			$this->listAnalise = mysql_query("SELECT ch.seqNumCh, ch.dt_aberto, ch.empresa, ch.telefone, ch.email, ch.nome, ch.descricao,
													 ch.login
											 FROM sc_cadchamado ch
												INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
  			  							 	 WHERE ch.situacao in ('2','3','4')
											   AND usr.login='$this->login' ") or die(mysql_error());			

		}

		public function listarFechado(){
			$this->listFechado = mysql_query("SELECT ch.seqNumCh, ch.dt_aberto, ch.empresa, ch.telefone, ch.email, ch.nome, ch.descricao,
													 ch.login
											 FROM sc_cadchamado ch
												INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
  			  							 	 WHERE ch.situacao in ('5','6')
											   AND usr.login='$this->login' ") or die(mysql_error());			

		}		
		
	}
	
	$obj = new ListarTicket();	 
?>