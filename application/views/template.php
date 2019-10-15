<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPOB PLN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="<?=base_url()?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?=base_url('assets')?>/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?=base_url('assets')?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('assets')?>/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PPOB</b> PLN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?=base_url('assets')?>/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li>
            <a href="<?=base_url('index.php/logout')?>">
              <span class="fa fa-sign-out">Logout</span>
            </a>
            
          </li>
          
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=base_url('index.php/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <?php 
                    if($this->session->userdata('id_level')=="1"){
                    ?>
                    <li <?=@$level?>>
                        <a href="<?=base_url('index.php/level')?>">
                            <i class="fa fa-users"></i>
                            <span>Level</span>
                        </a>
                    </li>
                    <li <?=@$admin?>>
                        <a href="<?=base_url('index.php/admin')?>">
                            <i class="fa fa-users"></i>
                            <span>Data Admin</span>
                        </a>
                    </li>
                    <li <?=@$tarif?>>
                        <a href="<?=base_url('index.php/tarif')?>">
                            <i class="fa fa-users"></i>
                            <span>Data Tarif</span>
                        </a>
                    </li>
                    <li <?=@$pelanggan?>>
                        <a href="<?=base_url('index.php/pelanggan')?>">
                            <i class="fa fa-users"></i>
                            <span>Data Pelanggan</span>
                        </a>
                    </li>
                    <li <?=@$verification?>>
                        <a href="<?=base_url('index.php/verification')?>">
                            <i class="fa fa-users"></i>
                            <span>Payment Verification</span>
                        </a>
                    </li>
                    <li <?=@$penggunaan?>>
                        <a href="<?=base_url('index.php/penggunaan')?>">
                            <i class="fa fa-users"></i>
                            <span>Penggunaan Pelanggan</span>
                        </a>
                    </li>
                    <li <?=@$histori?>>
                        <a href="<?=base_url('index.php/histori')?>">
                            <i class="fa fa-users"></i>
                            <span>Histori</span>
                        </a>
                    </li>
                    <?php }?>

                    <?php 
                    if($this->session->userdata('id_level')=="2"){
                    ?>
                     <li <?=@$penggunaan?>>
                        <a href="<?=base_url('index.php/penggunaan')?>">
                            <i class="fa fa-users"></i>
                            <span>Penggunaan Pelanggan</span>
                        </a>
                    </li>
                    <li <?=@$histori?>>
                        <a href="<?=base_url('index.php/histori')?>">
                            <i class="fa fa-users"></i>
                            <span>Histori</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!--main content-->
    <?php 
        $this->load->view($konten);
    ?>
    </div>
  </div>

  <!-- ./wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?=base_url('assets')?>/https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</body>
<!-- jQuery 3 -->
<script src="<?=base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets')?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url('assets')?>/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url('assets')?>/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets')?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url('assets')?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets')?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets')?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url('assets')?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url('assets')?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url('assets')?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets')?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets')?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets')?>/dist/js/demo.js"></script>

<script src="<?=base_url()?>/assets/bower_components/datatables.net-bs/jsdataTables.bootstrap.js"></script>

</body>
</html>
