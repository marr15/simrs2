
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in | SIMRS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url()."assets/" ?>index2.html"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">Silahkan Login</p>
    <?php
      $success_msg= $this->session->flashdata('success_msg');
      $error_msg= $this->session->flashdata('error_msg');

          if($success_msg){
            ?>
            <div class="alert alert-success">
              <?php echo $success_msg; ?>
            </div>
          <?php
          }
          if($error_msg){
            ?>
            <div class="alert alert-danger">
              <?php echo $error_msg; ?>
            </div>
      <?php
      }
      ?>  
    <form class="form-signin" method="post" action="<?php echo base_url('admin/aksi_login')?>" >
        <h2 class="form-signin-heading"><center><span class="glyphicon glyphicon-th-large"></span> Welcome To SIMRS</center></h2>
        <h5 class="baru">Sistem Informasi Rumah Sakit</h5>
        <input name="username"  type="input" class="form-control" placeholder="Username" required autofocus>
        <input name="password" id="pass" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
      </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div align="center">
  <footer class="" style="    font-size: .9em;
    color: #fff;
    margin: 0px;">
   
    <strong>Copyright &copy; 2018</strong> SIMRS Kelompok 4
  </footer>
  </div>

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/" ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/" ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."assets/" ?>plugins/iCheck/icheck.min.js"></script>
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
