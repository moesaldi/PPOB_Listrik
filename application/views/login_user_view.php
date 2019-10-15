<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?=base_url('assets')?>///oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?=base_url('assets')?>///oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?=base_url('assets')?>///fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url('assets')?>/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
<?=$this->session->flashdata('pesan');?>
    <form action="<?= base_url('index.php/login_user/proses_login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">        
        <!-- /.col -->
        <div class="col-xs-4">
          <a class="btn btn-block bg-green" data-toggle="modal" data-target="#daftar">Daftar</a>
        </div>
        <div class="col-xs-4 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>    

    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<div class="modal fade in" id="daftar">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Pendaftaran Pelanggan</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url('index.php/login_user/simpan')?>" method="post" enctype="multipart/form-data">
                  <table style="width:100%">
                <tr>
                    <td>Nama</td><td><input required type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td><td><textarea required name="alamat" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Nomor KWH</td><td><input required type="text" name="nomor_kwh" class="form-control"></td>
                </tr>
                <tr>
                    <td>Daya</td>
                    <td>
                        <select name="id_tarif" class="form-control">
                            <option></option>    
                            <?php foreach ($tarif as $tarif): ?>
                                <option value="<?=$tarif->id_tarif?>"><?=$tarif->daya?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td>Username</td><td><input required type="text" name="username" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input required type="password" name="password" class="form-control"></td>
                </tr>
            </table>
            <br>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
              </div>              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<!-- jQuery 3 -->
<script src="<?=base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url('assets')?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
