<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/adminlte/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/adminlte/css/googlefont.css">
  <!-- Costum style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/costum/styles.css">
  <!-- bootstrapValidator -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrapValidator/css/bootstrapValidator.min.css"/>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url('home') ?>"><b>Admin</b>LTE</a>
  </div>

  <?php
    if(isset($_GET['alert'])){
      if($_GET['alert']=="failed"){
        echo "<div id='snoAlertBox' class='alert alert-danger alert-dismissible' data-alert='alert'><h5 class='text-left'><i class='icon fa fa-ban'></i> Sorry! Invalid Username or Password.</h5></div>";
      }else if($_GET['alert']=="not_loged_in"){
        echo "<div id='snoAlertBox' class='alert alert-warning alert-dismissible' data-alert='alert'><h5 class='text-left'><i class='icon fa fa-warning'></i> You must login first..!</h5></div>";
      }else if($_GET['alert']=="logout"){
        echo "<div id='snoAlertBox' class='alert alert-info alert-dismissible' data-alert='alert'><h5 class='text-left'><i class='icon fa fa-info'></i> You have logged out..!</h5></div>";
      }
    }
  ?>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?php echo site_url('login-process') ?>" method="post" role="form" id="validation">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <p><a href="<?php echo site_url('reset-password') ?>">I forgot my password</a></p>
    <p><a href="<?php echo site_url('home') ?>">Back to home</a></p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/backend/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/adminlte/js/adminlte.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/fastclick/lib/fastclick.js"></script>
<!-- bootstrapValidator -->
<script src="<?php echo base_url(); ?>assets/backend/bootstrapValidator/js/bootstrapValidator.min.js"> </script>


<script>
    $(document).ready(function() {
    $('#validation').bootstrapValidator({
        fields: {
            container: '#messages',
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter user name'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            container: '#messages',
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter password'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The username must be more than 6 caracter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                },
            },
        },
    });
});
</script>


<script>
  $("#snoAlertBox").fadeIn();
   closeSnoAlertBox();

  function closeSnoAlertBox(){
  window.setTimeout(function () {
    $("#snoAlertBox").fadeOut(800)
  }, 8000);
  } 
</script>

</body>
</html>

