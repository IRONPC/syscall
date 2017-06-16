<?php     
    if(isset($_SESSION['login'])) {
        include 'classPHP/verificaChamado.php' 
 ?> 
<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Informações/Dúvidas</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">+ Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-6">
                    <div class="panel bg-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">                                 
                                    <div class="huge">
                                        <?php $obj->checAberto();  ?>
                                    </div>
                                    <div>ABERTO</div>
                                </div>
                            </div>
                        </div>
                        <a href="menu.php?id=TicketAberto">
                            <div class="panel-footer">
                                <span class="pull-left">+ Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel bg-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php $obj->checAnalise();  ?>
                                    </div>
                                    <div>ANALISE</div>
                                </div>
                            </div>
                        </div>
                        <a href="menu.php?id=TicketAnalise">
                            <div class="panel-footer">
                                <span class="pull-left">+ Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel bg-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php $obj->checFechado();  ?>
                                    </div>
                                    <div>FECHADO</div>
                                </div>
                            </div>
                        </div>
                        <a href="menu.php?id=TicketFechado">
                            <div class="panel-footer">
                                <span class="pull-left">+ Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>    
</div>            
<?php 
     }
?>