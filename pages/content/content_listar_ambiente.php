        <div class="panel-heading">
            Quais são os tipo de serviços prestados
        </div>
<!-- ######################################## -->
            <div class="row">
                <!-- /.col-lg-12 -->
            </div>       
                    <div class="panel panel-default">
                      <div class="panel-heading">
                            <!--DataTables Advanced Tables
                                <button type="button" class="btn btn-outline btn-success">NOVA EMPRESA</button>-->
               <!-- <button type="button" class="btn btn-outline btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModalAtividade" >-->
                    <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#myModalAtividade" >
                                CADASTRAR NOVO
                            </button>
                        </div>
                        <div class="panel-body">                           
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="examplePesquisa">
                                    <thead>
                                        <tr>
                                            <th>COD</th>
                                            <th>DESCRIÇÃO</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                                                
                                        include 'php/listar_service.php';                                                                        
                                                                                                                               
                                        $obj->listar();
                                        while ($obj->row = mysql_fetch_array($obj->listService)) {
                                                                                                                                    
                                    ?>                                        
                                    <tr class="odd gradeX">
                                            <td><?php echo $obj->row['codService'];     ?></td>
                                            <td><?php echo $obj->row['descService'];   ?></td>                                               
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
                                <form role="form" class="form-group" method="POST" action="../content/php/salvarCadService.php">                                                                                                        
                                  <div class="form-group col-xs-12">
                                        <label>DESCRIÇÃO</label>
                                        <input class="form-control" type="text" name="descricao" >                                    
                                  </div> 

                        </div>
                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>  
                        <button type="reset"  class="btn btn-default" value="Reset">Limpar</button>
                        <button type="Submit" class="btn btn-Sucesso" >Salvar</button></center>                      
                    </div>
                    </form>
            </div>            
        </div>
    </div>
 </div>
        