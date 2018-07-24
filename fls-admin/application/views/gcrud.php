<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PID | FLS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    <link rel="shortcut icon" href="<?php echo $this->config->item("app_cdn"); ?>assets/img/favicon.png">

    <?php $this->load->view("layout/head"); ?>
    <?php
    foreach($css_files as $file): ?>
    	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    	<script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <style>
        .flexigrid div.form-div input[type="text"], .flexigrid div.form-div input[type="password"] {
        width: 500px;
        height: 30px;
        border: 1px solid #AAA;
        background: none repeat scroll 0% 0% #FAFAFA;
    }
    </style>
  </head>
  <body class="skin-blue fixed">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo base_url(); ?>" class="logo"><i class="fa fa-key"></i><b><?php echo $this->config->item("app_name"); ?></b> <?php echo $this->config->item("app_subname"); ?></a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/img/favicon.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Admin FLS</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/img/favicon.png" class="img-circle" alt="User Image" />
                    <p>
                      Future Lader Summit
                      <small>Member since 2011</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url("Dashboard/logout") ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/img/favicon.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Future Leader Summit</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <?php //$this->load->view("layout/menu",array("module" => $module)); ?>
          <?php $this->load->view("layout/menu"); ?>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <?php $this->load->view($module); ?>
                </div>
                <div class="col-lg-12">
                    <?php echo $output; ?>
                </div>
            </div>
        </section>
      </div>

      <?php $this->load->view("layout/credits"); ?>
      <?php $this->load->view("layout/modal"); ?>
    </div>
    <script src='<?php echo $this->config->item("app_cdn"); ?>assets/js/fastclick.min.js'></script>
    
    <script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/app.js" type="text/javascript"></script>
    <script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/datepicker.js" type="text/javascript"></script>
  </body>
</html>