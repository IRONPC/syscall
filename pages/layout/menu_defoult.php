<?php     
    session_start();
    $date = date("d/m/y");    
    $hora = date('H:i:s');
  
    if(isset($_SESSION['login'])) {    
     include '../php/querylogin.php';

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include '../include/title.php'; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../lib/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../lib/dist/css/skins/_all-skins.min.css">

  <!--
    <link href="../lib/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">    
    <link href="../lib/dist/css/timeline.css" rel="stylesheet">
    <link href="../lib/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../lib/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../lib/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<!--<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">-->
<body class="hold-transition skin-blue fixed sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../layout/menu.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>Ti</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sys</b>Call</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">                 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../lib/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $row['nome'].' '.$row['sobrenome']; ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../lib/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  SysCall
                  <small>Desenv.DTI</small>                 
                </p>
              </li>                          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">TELEFONE</a>
                </div>
                <div class="pull-right">
                  <a href="sair.php" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- AQUI BLOCK TIPO QUANDO MENU ABERTO -->  
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php 
          include '../include/menu_verifica.php'; 
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>  
  <!-- FOR CONTENT =============================================== -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SysCall
        <small>Ticket - Sistema Chamados </small>
      </h1>
      <br>
      <div class="callout-info">
      <?php  
          //include 'dashboard.php';    
      ?>
      </div>


    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- RODAPÉ :  ############ -->
   <?php 
      include '../include/rodape.php'; 

    ?>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../lib/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../lib/plugins/fastclick/fastclick.js"></script>
<script src="../lib/dist/js/app.min.js"></script>
<script src="../lib/dist/js/demo.js"></script>
    <!-- jQuery -->
    <!--<script src="../lib/bower_components/jquery/dist/jquery.min.js"></script>    
    <script src="../lib/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>    
    <script src="../lib/bower_components/metisMenu/dist/metisMenu.min.js"></script>    
    <script src="../lib/bower_components/raphael/raphael-min.js"></script>
    <script src="../lib/bower_components/morrisjs/morris.min.js"></script>
    <script src="../lib/js/morris-data.js"></script>    
    <script src="../lib/dist/js/sb-admin-2.js"></script>
    -->  


</body>
</html>
<?php

  }

?>