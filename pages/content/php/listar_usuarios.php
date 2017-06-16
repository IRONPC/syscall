<?php
	
	class ListarUsuarios {
		public $listUsuarios;
		public $row;

		public function listar() {
			$this->listUsuarios = mysql_query("SELECT usr.codEmpresa, nv.descNivel, usr.login, usr.nome, usr.sobrenome, 
													  usr.telefone, usr.email, usr.dt_Reg
												FROM sc_cadusuario usr
													INNER JOIN sc_cadnivel nv ON (nv.codNivel = usr.codNivel) ") or die(mysql_error());

		}
	}

	$obj = new ListarUsuarios();

?>