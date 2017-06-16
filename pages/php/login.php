  <?php    
    $date = date("d/m/y");    
    $hora = date('H:i:s');

?>
<html>
	<head>
		<title>Autenticando</title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<script type="text/javascript">
			function loginsuccessfully() {
				setTimeout("window.location = '../layout/menu.php'",2000);
			}		
			function loginsuccessfully2() {
				//setTimeout("window.location = '../clientes/pages/index.php'",2000);
				setTimeout("window.location = '../layout/menu.php'",2000);
			}		
			function loginfailed() {
				setTimeout("window.location = '../../index.php'",2000);
			}
		</script>
	</head>
<body>
<?php
	include '../../config/config.php';
	
	Class Login {
		protected $login, $senha, $sql, $row;

		public function formulario() {
			$this->login = $_POST['login'];
			$this->senha = $_POST['senha'];
		}
		public function verLoginBd() {
				$this->sql = mysql_query("SELECT login, senha, codNivel
										  FROM sc_cadusuario
										  	WHERE login = '".$this->login."' AND senha = '".$this->senha."' ");

				$this->row = mysql_fetch_array($this->sql);				

				if($this->row['senha'] == $this->senha && $this->row['login']== $this->login) {
					session_start();
					$_SESSION['login']		= $_POST['login'];
					$_SESSION['senha']		= $_POST['senha'];

					echo "<center>Validando o Login: ".$_SESSION['login']."...</center>";      
    				echo '<hr>';
    				$this->row['codNivel'];

					switch ($this->row['codNivel']) {
						case '9910':
							echo "<script>loginsuccessfully()</script>";
						break;			
						case '9920': 
							echo "<script>loginsuccessfully2()</script>";
						break;
						case '9930': 
							echo "<script>loginsuccessfully2()</script>";
						break;						
							
			       		default:
    	    		  		echo "<center>Nome de usuário ou senha inválidos ou usuário desativado! Aguarde um instante estamos redirecionando !!!</center>";                    
        	  				echo "<script>loginfailed()</script>";         
          				break;
     				}
				}
     			else {     			
    	      			echo "<center>Nome de usuário ou senha inválidos ou usuário desativado! Aguarde um instante estamos redirecionando !!!</center>";                    
        	  			echo "<script>loginfailed()</script>";         

   				}					
		}
	
	}	

	$objform = new Login();
	$objform->formulario();
	$objform->verLoginBd();	
	
?>
  <center>    
    <div class="wrapper">      
      <div class="content-wrapper"><br /><br /><br /><br /><br /><br />       
          <div class="row">
            <div class="col-md-3">
            </div><!-- /.col -->            
            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Autenticando Acesso...</h3>
                </div>
                <div class="box-body">
                  Aguarde enquanto validamos!
                </div><!-- /.box-body -->                
                <div class="overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>               
              </div>
            </div>
          </div>  
      </div>
    </div>
  </center>  
</body>
</html>