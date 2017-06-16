<!--<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Todos os Clientes Cadastrado
        </div>-->
<!-- ######################################## -->
            <div class="row">
                <!-- /.col-lg-12 -->
            </div>       
                    <div class="panel panel-default">
                      <div class="panel-heading">
                            <!--DataTables Advanced Tables
                                <button type="button" class="btn btn-outline btn-success">NOVA EMPRESA</button>-->
                <button type="button" class="btn btn-outline btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModalAtividade" >
                                NOVO
                            </button>
                        </div>
                        <div class="panel-body">                           
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="examplePesquisa">
                                    <thead>
                                        <tr>
                                            <th>SEQNUM</th>
                                            <th>DATA REG</th>
                                            <th>SOLICITANTE</th>   
                                            <th>TELEFONE</th>
                                            <th>E-MAIL</th>
                                            <th>EMPRESA</th>
                                            <th>@$#</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                                                
                                        include 'php/listar_Ticket.php';                                                                        
                                                                                       
                                        $obj->listar();
                                        while ($obj->row = mysql_fetch_assoc($obj->listAberto)) {
                                                                                                                                    
                                    ?>                                        
                                    <tr class="odd gradeX">
                                            <td><?php echo $this->row['seqNumCh']; ?></td>
                                            <td><?php echo $this->row['dt_aberto']; ?></td>                                                         
                                            <td><?php echo $this->row['empresa']; ?><td>
                                            <td><?php echo $this->row['telefone']; ?><td>
                                            <td><?php echo $this->row['email']; ?><td>
                                            <td><?php echo $this->row['nome']; ?><td>
                                            <td>btn<td>                                                
                                    </tr>              
                                    <?php
                                        }
                                    ?>                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
<!-- ######################################## -->
    <div class="panel-body">        
<!--  ######  Modal -->
    <div class="modal fade" id="myModalAtividade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Atividades</h4>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                                <form role="form" class="form-group" method="POST" action="./pages/content/php/salvarAtividade.php">                                    
                                  <div class="form-group col-xs-4">
                                        <label>COD</label>
                                        <input class="form-control" type="text" name="codAtividade" >                                    
                                  </div>                                 
                                  <div class="form-group col-xs-4">
                                        <label>ATIVIDADE</label>
                                        <input class="form-control" type="text" name="descAtividade" >                                    
                                  </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>                    
                        <button type="reset"  class="btn btn-default" value="Reset">Limpar</button>
                        <button type="Submit" class="btn btn-Sucesso" >Salvar</button>                      
                    </div>
                    </form>
            </div>            
        </div>
    </div>
                            
        </div>
        
        </div>       
<!--</div>-->
