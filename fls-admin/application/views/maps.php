
    
<html>
  <head>
    <meta charset="UTF-8">
    <title>Warnet | Kominfo</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    <?php $this->load->view("layout/head"); ?>
    <?php echo $map['js']; ?>
  </head>
  <body class="skin-red fixed">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo base_url(); ?>" class="logo"><b>Warnet Kominfo</b> v1.0b</a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Faleddo</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Faleddo - Web Developer
                      <small>Member since Nov. 2012</small>
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
              <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Faleddo</p>

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
                    <?php //$this->load->view($module); ?>
                </div>
                <div class="col-lg-12">
                    <?php echo $map['html']; ?>
                    <?php
                    if(isset($module)){
                        echo $module;   
                    } ?>
                </div>
            </div>
        </section>
      </div>

      <?php $this->load->view("layout/credits"); ?>
      <?php $this->load->view("layout/modal"); ?>
    </div>
    <?php $this->load->view("layout/foot"); ?>
  </body>
</html>