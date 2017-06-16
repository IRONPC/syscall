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
                                            <th>CODEMP</th>
                                            <th>TIPO</th>                                            
                                            <th>LOGIN</th>   
                                            <th>NOME</th>
                                            <th>SOBRENOME</th>
                                            <th>TELEFONE</th>
                                            <th>E-MAIL</th>   
                                            <th>REGISTRO</th>                                                                                                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                                                
                                        include 'php/listar_usuarios.php';                                                                        
                                                                                                                               
                                        $obj->listar();
                                        while ($obj->row = mysql_fetch_array($obj->listUsuarios)) {
                                                                                                                                    
                                    ?>                                        
                                    <tr class="odd gradeX">
                                            <td><?php echo $obj->row['codEmpresa'];     ?></td>
                                            <td><?php echo $obj->row['descNivel'];   ?></td>                                                                                                     
                                            <td><?php echo $obj->row['login'];      ?></td>
                                            <td><?php echo $obj->row['nome'];  ?></td>
                                            <td><?php echo $obj->row['sobrenome'];   ?></td>
                                            <td><?php echo $obj->row['telefone'];         ?></td>
                                            <td><?php echo $obj->row['email'];    ?></td>                                                            
                                            <td><?php echo $obj->row['dt_Reg']; ?> </td>
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
                                <form role="form" class="form-group" method="POST" action="../content/php/salvarCadUsuarios.php">                                    
                                  <div class="form-group col-xs-6">
                                        <label>TIPO USUARIO</label>
                                        <select class="form-control select2" style="width: 100%;" name="tipoacesso">
                                            <option value="0" selected="valor"> </option>                                                                                     
                                            <?php  
                                                include 'php/listar_nivelAcesso_box.php';
                                                $obj->listarAcesso();
                                                
                                                while($obj->row = mysql_fetch_assoc($obj->list) ) {
                                            ?>                                                                                        
                                                <option value="<?php echo $obj->row['codNivel']; ?>"><?php echo $obj->row['descNivel']; ?></option>                  
                                            <?php 
                                                } 
                                            ?>
                                        </select>
                                  </div>                                
                                  <div class="form-group col-xs-6">
                                        <label>EMPRESA</label>
                                        <select class="form-control select2" style="width: 100%;" name="codempresa">
                                            <option value="0" selected="valor"> </option>                                                                                     
                                            <?php  
                                                include 'php/listar_empresa_box.php';
                                                $obj->listarBox();
                                                
                                                while($obj->row = mysql_fetch_assoc($obj->list) ) {
                                            ?>                                                                                        
                                                <option value="<?php echo $obj->row['seqNum']; ?>"><?php echo $obj->row['nickname']; ?></option>                  
                                            <?php 
                                                } 
                                            ?>
                                        </select>
                                  </div>
                                  
                                  <div class="form-group col-xs-6">
                                        <label>LOGIN</label>
                                        <input class="form-control" type="text" name="login" >                                    
                                  </div> 
                                  <div class="form-group col-xs-6">
                                        <label>SENHA</label>
                                        <input class="form-control" type="text" name="senha" >                                    
                                  </div> 

                                  <div class="form-group col-xs-6">
                                        <label>NOME</label>
                                        <input class="form-control" type="text" name="nome" >                                    
                                  </div>                         
                                  <div class="form-group col-xs-6">
                                        <label>SOBRENOME</label>
                                        <input class="form-control" type="text" name="sobrenome" >                                    
                                  </div> 

                                  <div class="form-group col-xs-4">
                                        <label>TELEFONE</label>
                                        <input class="form-control" type="text" name="telefone" >                                    
                                  </div> 
                                  <div class="form-group col-xs-8">
                                        <label>E-MAIL</label>
                                        <input class="form-control" type="text" name="email" >                                    
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
        
        </div>       
<!--</div>-->
