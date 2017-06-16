<?php
	include '../../../config/config.php';

	class CadastroService {

		public function salvarService(){
			$descricao		= $_POST['descricao'];
			

			if(empty($descricao)) {
				echo "<script>alert('Preencha os campos!'); window.history.back();</script>";				
			}
			else {
				$chekNome = mysql_query("SELECT descService FROM sc_cadambiente WHERE descService = '$descricao' ") or die(mysql_error());
				$rtnNome = mysql_fetch_array($chekNome);
				
				if($descricao == $rtnNome['descService']) {
					echo "<script>alert('SERVICE EXISTENTE, TENTE OUTRO NOME !!!'); window.history.back();</script>";					
				}
				else {
					$ver = mysql_query("SELECT MAX(codService)as ultimo FROM sc_cadambiente ") or die(mysql_error());
					$rtn = mysql_fetch_array($ver);
					$ult = $rtn['ultimo'];
					$ult += 10;	
					
					$sql = mysql_query("INSERT INTO sc_cadambiente (codService, descService)
								    VALUES ('$ult', '$descricao') ") or die(mysql_error());

					$exe = mysql_query($sql);
				
					echo "<script>alert('Salvo com Sucesso !!!'); window.history.back();</script>";					
				}
			}
		}
	}

	$obj = new CadastroService();
	$obj->salvarService();
?>