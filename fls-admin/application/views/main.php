<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->config->item("app_name"); ?> | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="<?php echo $this->config->item("app_cdn"); ?>assets/img/favicon.png">

        <?php $this->load->view("layout/head"); ?>
    </head>
    <body class="skin-blue fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href="<?php echo base_url(); ?>" class="logo">
                    <i class="fa fa-key"></i>
                    <b><?php echo $this->config->item("app_name"); ?></b>
                    <?php echo $this->config->item("app_subname"); ?>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle visible-xs" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <?php $this->load->view("layout/notification"); ?>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url()?>assets/img/favicon.png" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs">Selamat Datang ! <?php echo $_SESSION['user_fullname'] ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url()?>assets/img/favicon.png" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $_SESSION['user_fullname'] ?>
                                            <small>Future Leader Summit 2016</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                       
                                        <div class="pull-right">
                                            <a href="<?php echo base_url()?>main/logout" class="btn btn-default btn-flat">Sign out</a>
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
                    <?php $this->load->view('layout/search'); ?>
                    <?php $this->load->view('layout/menu'); ?>
                </section>
            </aside>
            <div class="content-wrapper">
                <?php
                if($gcrud == 1){
                    
                }else{
                    $this->load->view($module);
                } ?>
            </div>
            <?php $this->load->view("layout/credits"); ?>
            <?php $this->load->view("layout/modal"); ?>
        </div>
    </body>
</html>