<?php
	include '../../../config/config.php';

	class CadastroUsuarios {

		public function salvarUsuario() {
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');

			$tipo		= $_POST['tipoacesso'];
			$codemp		= $_POST['codempresa'];
			$login		= $_POST['login'];
			$senha		= $_POST['senha'];
			$nome		= $_POST['nome'];
			$sobrenome	= $_POST['sobrenome'];
			$telefone	= $_POST['telefone'];
			$email		= $_POST['email'];

			if((empty($tipo)) || (empty($codemp)) || (empty($login)) || (empty($senha)) ) {
				echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";				
			}
			else { 

				$sql = mysql_query("INSERT INTO sc_cadusuario (codNivel, codEmpresa, login, senha, nome, sobrenome, telefone, email, situacao, dt_Reg) 
									VALUES('$tipo','$codemp','$login','$senha','$nome','$sobrenome','$telefone','$email', 'ATIVO','$date' ) ") or die(mysql_error());

				$exe = mysql_query($sql);
				
				echo "<script>alert('Registrado com Sucesso !!!'); window.history.back();</script>";					
			}
		}

	}

	$obj = new CadastroUsuarios();
	$obj->salvarUsuario();

?>