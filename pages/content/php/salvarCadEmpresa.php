<?php
	include '../../../config/config.php';

	class CadastroEmpresa {
		
		public function salvar() {			

			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');
			
			$cnpj		= $_POST['cnpj'];
			$nickname 	= $_POST['nickname'];
			$razaosocial = $_POST['razaosocial'];	
			$email 		= $_POST['email'];
			$telefone1	= $_POST['telefone1'];
			$endereco	= $_POST['endereco'];
			$bairro		= $_POST['bairro'];
			$uf			= $_POST['uf'];


			if((empty($cnpj)) || (empty($telefone1)) || (empty($razaosocial)) ) {
				echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";				
			}
			else {

				$check = mysql_query("SELECT cnpj FROM sc_cadempresa WHERE cnpj = '$cnpj' ") or die(mysql_error());
				$rtncheck = mysql_fetch_array($check);
				$rtncnpj = $rtncheck['cnpj'];
								
				if($cnpj == $rtncnpj) {
					echo "<script>alert('Já existe este CNPJ $cnpj Cadastrado no Sistema '); window.history.back();</script>";						
				}
				else {
					$ver = mysql_query("SELECT MAX(seqNum)as ultimo FROM sc_cadempresa ") or die(mysql_error());
					$rtn = mysql_fetch_array($ver);
					$ult = $rtn['ultimo'];
					$ult += 1;			
			
					$sql = "INSERT INTO sc_cadEmpresa (seqNum, cnpj, nickname, razaoSocial, email, telefone, endereco, bairro, uf, situacao, dataReg)
							VALUES ('$ult', '$cnpj', '$nickname','$razaosocial', '$email','$telefone1','$endereco','$bairro','$uf','ATIVO','$date' )" or die(mysql_error());		

					$exe = mysql_query($sql);
					
					echo "<script>alert('Registrado com Sucesso !!!'); window.history.back();</script>";					
				}
			}
		}

	}

	$obj = new CadastroEmpresa();
	$obj->salvar();

?>