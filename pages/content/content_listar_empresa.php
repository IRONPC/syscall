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
                <!--<button type="button" class="btn btn-outline btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModalAtividade" >-->
                <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#myModalAtividade" >
                                CADASTRAR NOVO
                            </button>
                        </div>
                        <div class="panel-body">                           
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="examplePesquisa">
                                    <thead>
                                        <tr>
                                            <th>SEQNUM</th>
                                            <th>CNPJ</th>
                                            <th>NICK</th>                                            
                                            <th>E-MAIL</th>   
                                            <th>TELEFONE</th>
                                            <th>ENDEREÇO</th>
                                            <th>ESTADO</th>
                                            <th>DATAREG</th>                                                                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                                                
                                        include 'php/listar_empresa.php';                                                                        
                                                                                                                               
                                        $obj->listar();
                                        while ($obj->row = mysql_fetch_array($obj->listEmpresa)) {
                                                                                                                                    
                                    ?>                                        
                                    <tr class="odd gradeX">
                                            <td><?php echo $obj->row['seqNum'];     ?></td>
                                            <td><?php echo $obj->row['cnpj'];       ?></td>
                                            <td><?php echo $obj->row['nickname'];   ?></td>                                                                                                     
                                            <td><?php echo $obj->row['email'];      ?></td>
                                            <td><?php echo $obj->row['telefone'];  ?></td>
                                            <td><?php echo $obj->row['endereco'];   ?></td>
                                            <td><?php echo $obj->row['uf'];         ?></td>
                                            <td><?php echo $obj->row['dataReg'];    ?></td>                                                            
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
                        <h4 class="modal-title" id="myModalLabel">Novo Cadastro</h4>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                                <form role="form" class="form-group" method="POST" action="../content/php/salvarCadEmpresa.php">                                    
                                  <div class="form-group col-xs-4">
                                        <label>CNPJ</label>
                                        <input class="form-control" type="text" name="cnpj" >                                    
                                  </div>                                 
                                  <div class="form-group col-xs-8">
                                        <label>NICKNAME</label>
                                        <input class="form-control" type="text" name="nickname" >                                    
                                  </div> 
                                  <div class="form-group col-xs-12">
                                        <label>RAZÃO SOCIAL</label>
                                        <input class="form-control" type="text" name="razaosocial" >                                    
                                  </div> 
                                  <div class="form-group col-xs-8">
                                        <label>E-MAIL</label>
                                        <input class="form-control" type="text" name="email" >                                    
                                  </div>                         
                                  <div class="form-group col-xs-4">
                                        <label>TELEFONE 1</label>
                                        <input class="form-control" type="text" name="telefone1" >                                    
                                  </div>     
                                  <!--<div class="form-group col-xs-4">
                                        <label>TELEFONE 2</label>
                                        <input class="form-control" type="text" name="telefone2" >                                    
                                  </div> -->                                                                          
                                  <div class="form-group col-xs-8">
                                        <label>ENDEREÇO</label>
                                        <input class="form-control" type="text" name="endereco" >                                    
                                  </div> 
                                  <div class="form-group col-xs-8">
                                        <label>BAIRRO</label>
                                        <input class="form-control" type="text" name="bairro" >                                    
                                  </div>             
                                  <div class="form-group col-xs-2">
                                        <label>ESTADO</label>
                                        <input class="form-control" type="text" name="uf" >                                    
                                  </div>                         
                                  <div class="form-group col-xs-2">
                                        <label>SITUACAO</label>
                                        <input class="form-control" type="text" name="situacao" >                                    
                                  </div>                                                                   
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>                    
                        <button type="reset"  class="btn btn-default" value="Reset">Limpar</button>
                        <button type="Submit" class="btn btn-Sucesso" >Salvar</button> </center>                     
                    </div>
                    </form>
            </div>            
        </div>
    </div>
                            
        </div>
        
        </div>       
<!--</div>-->
