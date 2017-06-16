<?php
   // if(isset($_SESSION['login'])) {        

	include '../../../config/config.php';   
   
	class Chamado {

		public function salvarChamado() {
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d-m-Y H:i');

			$empresa		= $_POST['empresa'];
			$service		= $_POST['service'];
			$telefone		= $_POST['telefone'];
			$prioridade		= $_POST['prioridade'];
			$nome			= $_POST['nome'];
			$descricao		= $_POST['descricao'];		
			$login 			= $_POST['login'];            			

			if((empty($empresa)) || (empty($service)) || (empty($telefone)) 
				|| (empty($prioridade)) || (empty($nome)) || (empty($descricao)) ) {
				echo "<script>alert('PREENCHA TODOS OS CAMPOS'); window.history.back();</script>";				
			}
			else {

				$ver = mysql_query("SELECT MAX(seqNumCh)as ultimo FROM sc_cadchamado ") or die(mysql_error());
				$rtn = mysql_fetch_array($ver);
				$ult = $rtn['ultimo'];				
				$ult += 1;				

				$sql = "INSERT INTO sc_cadchamado (seqNumCh, dt_aberto, dt_finalizado, dt_ocorrencia, empresa, ambiente, prioridade, telefone,
							nome, descricao, situacao, login)
						VALUES ('$ult','$date','00-00-0000 00:00:00','$date', '$empresa', '$service','$prioridade', '$telefone', '$nome', '$descricao','1', '$login' ) ";
				
				$exe = mysql_query($sql);

				echo "<script>alert('Registrado com Sucesso !!!'); window.history.back();</script>";				
			}
		}
	}

	$obj = new Chamado();
	$obj->salvarChamado();

  //}
  //else {
  //	echo "<br><hr>VOCÊ PRECISA ESTAR LOGADO NO SISTEMA....<hr>";
  //}
?>