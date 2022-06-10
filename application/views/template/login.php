<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page">

    <div class="login-box">
    <div class="login-logo">
        <div class="item">
        
        <a href=""><b>Admin</b>Jumbo</a>
        </div>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        
        <img src="<?php echo base_url(); ?>tools/image/72.jpg" alt="logo" class="online img-center">
        <p class="login-box-msg">Connecter ici pour poursuivre!</p>

        <form class="form_sign" action="<?php echo base_url().'index.php/pages/login'; ?>" method="post" id="frm" name="frm">

            <?php
                $msg = $this->session->flashdata('msg');
                if($msg != ""){
            ?>
        
            <?php } ?>
            <label for="email" class="sr-only">Adress Email</label>
                <input type="text" name="email"  id="email" class="form-control <?php echo (form_error(field: 'email') != "")? 'is-validid' : ''; ?>"  placeholder="Email" value="<?php echo set_value('email');?>">
                <p class="invalid-feedback"> <?php echo strip_tags(form_error(field: 'email'));?></p>
            
            <label for="password" class="sr-only">Password</label>
                <input type="password"  name="password" id="password" class="form-control <?php echo (form_error(field: 'password') != "")? 'is-validid' : ''; ?>" placeholder="Password"> 
                <p class="invalid-feedback"><?php echo strip_tags(form_error(field: 'password'));?></p>
            
            <div class="row">
                <div class="col-xs-8">
                
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                <div class="social-auth-links text-center">
                    <button type="submit" class="btn btn-success btn-block btn-flat">Connecter</button>
                </div>
                </div>
                <!-- /.col -->
            </div>
        </form>
        
    </div>
    <!-- /.login-box-body -->
    </div>

    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>tools/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>tools/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>tools/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>tools/js/auth.js"></script>
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