<?php

class Conexao {

	protected $server='104.197.186.8';
	protected $banco='sgticket';
	protected $user='scdti';
	protected $pwd='Q!w2@2017';
	protected $conn;
	protected $teste='<hr>Acessou Método de dentro da classe atraves do this';

	public function conect() {		
		$this->conn = mysql_connect($this->server, $this->user, $this->pwd) or die(mysql_error());
		$this->conn = mysql_select_db($this->banco) or die("Não foi possível realizar a conexão!");				
	}

}
	//Criou Objeto à partir da classe conexao
	$obj = new Conexao();
	$obj->conect();

	/*if($obj->conect() = true) {
		echo "<hr>Conexão Realizada<hr>";
	} else {
		echo "Sem acesso !!! <hr>".mysql_error(error_reporting());
	}*/

?>
