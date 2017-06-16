<?php
	
	class ListarService {

		public $listService, $row;

		public function listar() {
			$this->listService = mysql_query("SELECT codService, descService FROM sc_cadambiente") or die(mysql_error());			
		}
	}

	$obj = new ListarService();	

?>