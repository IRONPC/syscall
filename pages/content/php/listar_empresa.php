<?php
	
	class ListarEmpresa {
		public $listEmpresa;
		public $row;

		public function listar() {
			$this->listEmpresa = mysql_query("SELECT emp.seqNum, emp.cnpj, emp.nickname, emp.email, emp.telefone, emp.endereco, 
													 	emp.uf, emp.dataReg
												FROM sc_cadempresa emp" ) or die(mysql_error());
		}

	}

	$obj = new ListarEmpresa();
?>