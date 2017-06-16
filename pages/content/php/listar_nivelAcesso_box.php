<?php
	include '../../../config/config.php';

	class ListNivelAcesso {
		public $list;
		public $row;

		public function listarAcesso() {
			$this->list = mysql_query("SELECT codNivel, descNivel 
										FROM sc_cadnivel ") or die(mysql_error());
		}
	}

	$obj = new ListNivelAcesso();
?>