<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Future Leader Summit Admin Page | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo $this->config->item("app_cdn"); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->config->item("app_cdn"); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->config->item("app_cdn"); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url(); ?>"><b>Future Leader Summit</b></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Selamat Datang !<br>Silahkan isikan Username dan Password Anda</p>
        <form action="<?php echo base_url(); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username"/>
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="fa fa-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">                          
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="login">Sign In</button>
            </div>
          </div>
        </form>
      </div>
      </div>
  </body>
</html>