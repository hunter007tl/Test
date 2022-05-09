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
  <!-- bootstrapValidator -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrapValidator/css/bootstrapValidator.min.css"/>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Enter Your Email Registered</p>

    <form action="#" method="post" role="form" id="validation">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <p><a href="<?php echo site_url('cpanel-admin') ?>">Login</a></p>
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
            name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your name'
                    }
                },
            },
        },
    });
});
</script>

</body>
</html>

