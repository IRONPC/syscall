<?php
	include 'dashboard.php';
    if(isset($_SESSION['login'])) {      
        
?>
<!--<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Todos os Clientes Cadastrado
        </div>-->
<!-- ######################################## -->
<!-- <script src="../../lib/js/jquery_get_editar_chamado.js"></script>-->

            <div class="row">
                <!-- /.col-lg-12 -->
            </div>       
                    <div class="panel panel-default">
                      <div class="panel-heading">
                            <!--DataTables Advanced Tables
                                <button type="button" class="btn btn-outline btn-success">NOVA EMPRESA</button>-->
                <!--<button type="button" class="btn btn-outline btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModalAtividade" >-->
		<button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#myModalAtividade" >                                
                                NOVO TICKET
                            </button>
                        </div>
                        <div class="panel-body " >                           
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="examplePesquisa">
                                    <thead>
                                        <tr>
                                            <th>SEQNUM</th>
                                            <th>DATA REG</th>
                                            <th>LOGIN</th>
                                            <th>SOLICITANTE</th>   
                                            <th>TELEFONE</th>
                                            <!--<th>E-MAIL</th>-->
                                            <th>EMPRESA</th> 
                                            <th>DESCRIÇÃO</th> 
                                            <th><center>RESPONDER</center></th>                                                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                                                
                                        include 'php/listar_Ticket.php';                                                                        
                                                                                       
                                        $obj->listarAberto();
                                        while ($obj->row = mysql_fetch_assoc($obj->listAberto)) {
                                                                                                                                    
                                    ?>                                        
                                    <tr class="odd gradeX">
                                            <td><?php echo $obj->row['seqNumCh']; ?></td>
                                            <td><?php echo $obj->row['dt_aberto']; ?></td> 
                                            <td><?php echo $obj->row['login']; ?></td>                                                      
                                            <td><?php echo $obj->row['nome']; ?></td>
                                            <td><?php echo $obj->row['telefone']; ?></td>
                                            <!--<td><?php echo $obj->row['email']; ?></td>-->
                                            <td><?php echo $obj->row['empresa']; ?></td>
                                            <td><?php echo $obj->row['descricao']; ?></td>
                                            <td><center>                                                                                                             
    <p><a data-toggle="modal" href="#Responder" class="btn btn-block btn-info fa fa-play" nome="btn_editar_chamado" id="<?php echo $obj->row['seqNumCh']; ?>" > <?php echo $obj->row['seqNumCh']; ?></a>
     </p>
                                        </center>
                                            </td>                                                       
                                    </tr>              
                                    <?php
                                        }                                        
                                    ?>                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                   
<!-- MODAL FORMULÁRIO ######################################## -->
    <div class="panel-body">        
    <div class="modal fade" id="myModalAtividade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">NOVO TICKET</h4>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                                <form role="form" class="form-group" method="POST" action="../content/php/salvarChamado.php">                                    
                                  <div class="form-group col-xs-6">
                                        <label>EMPRESA</label>                                        
                                        <input class="form-control" type="text" name="empresa" >                                    
                                  </div>                                 
                                  <div class="form-group col-xs-6">
                                        <label>SERVIÇO</label>
                                        <input class="form-control" type="text" name="service" >                                    
                                  </div> 
                                  <div class="form-group col-xs-4">                                
                                        <label>TELEFONE</label>
                                        <div class="input-group"><div class="input-group-addon"><i class="fa fa-phone"></i></div>                                        
                                        <input type="text" class="form-control" name="telefone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" >
                                    </div>                
                                  </div> 
                                  <div class="form-group col-xs-2">
                                        <label>NIVEL</label>
                                        <input class="form-control" type="text" name="prioridade" >                                    
                                  </div>                                    
                                    
                                  <div class="form-group col-xs-6">
                                        <label>NOME</label>
                                        <input class="form-control" type="text" name="nome" >                                    
                                  </div>                                     

                                  <div class="form-group col-xs-12">
                                        <label>DESCREVA A SITUAÇÃO</label>
                                        <textarea class="form-control" rows="8" name="descricao"></textarea>
                                  </div> 
                                  <div class="form-group col-xs-12">
                                        <label>VOCÊ ESTA LOGADO COM USUÁRIO: [<?php echo $login = $_SESSION['login']; ?>]</label>
                                        <input class="form-control" type="text" name="login" readonly value="<?php echo $login = $_SESSION['login']; ?>" >
                                  </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>                    
                        <button type="reset"  class="btn btn-info" value="Reset">Limpar</button>
                        <button type="Submit" class="btn btn-success" >Salvar</button></center>                      
                    </div>
                    </form>
            </div>            
        </div>
    </div>              
   </div>
  </div>
  <?php 
    include '../content/teste.php';
    //include '../content/content_responder_ticket.php';
?> 
<?php     
    }
 ?> 