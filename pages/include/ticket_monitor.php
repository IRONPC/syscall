<?php echo '<br>' ?>
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
                                    <a href="#home" data-toggle="tab">Home</a>
                                </li>
                                <li><a href="#aberto" data-toggle="tab">Ticket's Aberto</a>
                                </li>
                                <li><a href="#andamento" data-toggle="tab">Ticket's em Atendimento</a>
                                </li>
                                <li><a href="#fechado" data-toggle="tab">Ticket's Fechado</a>
                                </li>
                                <li><a href="#feedback" data-toggle="tab">SAC</a>
                                </li>                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                             <div class="tab-pane fade in active" id="home"><br>
                                <?php 
                                    echo "<h4>VISÃO GERAL</h4><br>
                                    <p>Classificações realizada na abertura do Ticket.</p>";

                                     include 'botoesTicketMonitor.php';
                                ?>   
                                </div>
                                <div class="tab-pane fade" id="aberto"><br>                                    
                                    <?php                                         
                                        include 'pagetickets/aberto/TicketAbertura.php';                                        
                                     ?>
                                </div>

                                <div class="tab-pane fade" id="andamento"><br>                                    
                                    
                                    <?php                                         
                                        include 'pagetickets/andamento/TicketAbertura.php';                                        
                                     ?>
                                </div>
                                
                                <div class="tab-pane fade" id="fechado"><br>                                    
                                    <?php 
                                        echo '3';
                                        //echo "<h4>TICKET's FECHADOS</h4>";
                                        //require_once 'pagetickets/TicketAbertura.php';                                        
                                     ?>
                                </div>                                                                
                                
                                <div class="tab-pane fade" id="feedback"><br>
                                    <h4>COMO FOI NOSSO ATENDIMENTO!</h4>
                                    <p>Você pode nos ajudar a melhorar, nos envie um comentário e deixe nós sabermos
                                    onde ainda devemos crescer para melhor atende-los.                                    
                                    <center>
                                         Agradecemos o seu feedback.<br>
                                        <b>sac@pdsti.com.br</b></center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>