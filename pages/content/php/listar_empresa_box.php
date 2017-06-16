<?php	
/*
	Preenche o box do formulário
*/
	include '../../../config/config.php';	

	class ListarEmpBox {
		public $list;
		public $row;

		public function listarBox (){
			$this->list = mysql_query("SELECT seqNum, nickname FROM sc_cadempresa ") or die(mysql_error());							 		 
		}
	}	

	$obj =  new ListarEmpBox(); 
?>