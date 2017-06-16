<?php
	/*
	* Verifica a quantidade de chamado, serve apenas pra fazer um COUNT na base de dados
	*/
	Class Chamado {
		public $chAberto;
		public $chAnalise;
		public $row;

		public function checAberto(){
			$this->login = $_SESSION['login'];	
			$this->chAberto = mysql_query("SELECT COUNT(*)as QTDAB 
											 FROM sc_cadchamado ch
											 INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
											 	WHERE usr.login='$this->login'
											 		AND ch.situacao IN ('1')
											 		OR (usr.codNivel != '9910') ") or die(mysql_error());			
			$this->row = mysql_fetch_array($this->chAberto);

			echo $this->row['QTDAB'];
		}

		public function checAnalise() {
			$this->chAberto = mysql_query("SELECT COUNT(*)as QTDAN 
										   FROM sc_cadchamado ch
											INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
										   WHERE ch.situacao IN ('2','3','4')
   									 		 AND usr.login='$this->login' ") or die(mysql_error());											  			

			$this->row = mysql_fetch_array($this->chAberto);

			echo $this->row['QTDAN'];
			
		}

		public function checFechado() {
			$this->chAberto = mysql_query("SELECT COUNT(*)as QTDFX 
										   FROM sc_cadchamado ch
											INNER JOIN sc_cadusuario usr ON (ch.login = usr.login)
										   WHERE ch.situacao IN ('5','6')
   									 		 AND usr.login='$this->login' ") or die(mysql_error());				

			$this->row = mysql_fetch_array($this->chAberto);

			echo $this->row['QTDFX'];
			
		}

	}

	$obj = new Chamado();

?>