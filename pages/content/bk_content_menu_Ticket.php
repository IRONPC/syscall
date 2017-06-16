            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MONITOR
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#listar" data-toggle="tab">Lista Ticket</a>
                                </li>
                                <li>
                                    <a href="#aberto" data-toggle="tab">Ticket's Aberto</a>
                                </li>
                                <li>
                                    <a href="#andamento" data-toggle="tab">Ticket's em Atendimento</a>
                                </li>
                                <li>
                                    <a href="#fechado" data-toggle="tab">Ticket's Fechado</a>
                                </li>
                                <li>
                                    <a href="#feedback" data-toggle="tab">SAC</a>
                                </li>                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                             <div class="tab-pane fade" id="listar">
                                <?php                                                                                                     
                                    //echo $sd='teste';
                                     //include 'content_listar_ticket.php';                                
                                ?>
                                </div>
                                <div class="tab-pane fade" id="aberto"><br>
                                    <?php
                                       // echo $_GET['name'];
                                        //if($_GET['id'] == 'aberto'){
                                        //include 'content_listar_ticket.php';
                                        //}
                                    ?>
                                </div>

                                <div class="tab-pane fade" id="andamento"><br>                                                                        
                                    <?php                                         
                                        //include 'pagetickets/andamento/TicketAbertura.php';                                        
                                     ?>
                                </div>
                                
                                <div class="tab-pane fade" id="fechado"><br>                                    
                                    <?php 
                                       // echo '3';
                                        //echo "<h4>TICKET's FECHADOS</h4>";
                                        //require_once 'pagetickets/TicketAbertura.php';                                        
                                     ?>
                                </div>                                                                
                                
                                <div class="tab-pane fade" id="feedback">
                                <?php 
                                    echo "<h4>COMO FOI NOSSO ATENDIMENTO!</h4>
                                        <p>Você pode nos ajudar a melhorar, nos envie um comentário e deixe nós sabermos
                                        onde ainda devemos crescer para melhor atende-los.                                    
                                        <center>
                                            Agradecemos o seu feedback.<br>
                                            <b>sac@pdsti.com.br</b></center>
                                        </p>";
                                ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>