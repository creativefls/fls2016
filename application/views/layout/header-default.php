<div class="header header-sticky">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?=base_url(); ?>" title="<?php echo $var_judul;?>">
                <img src="<?=base_url(); ?>assets/img/dncc.png" alt="dncc-logo">
            </a>
            <!-- End Logo -->
            
            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                	<li><a href="#"><i class="fa fa-comment-o"></i> FAQ</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="<?=base_url(); ?>contact"><i class="fa fa-phone"></i> Contact Us</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="<?=base_url(); ?>dncc-admin"><i class="fa fa-user"></i> Login</a></li>   
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle biru" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li>
                        <a href="<?=base_url(); ?>">
                            Home
                        </a>
                    </li>
                    <!-- End Home -->

                    <!-- Kegiatan -->                        
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Event
                        </a>
                        <ul class="dropdown-menu">
                        	 <li><a href="<?=base_url(); ?>event/btng"><i class="fa fa-angle-double-right"></i>Basic Traning For Next Generation</a></li>
                        	 <li><a href="<?=base_url(); ?>event/training"><i class="fa fa-angle-double-right"></i>Daily Training</a></li>
                        	 <li><a href="<?=base_url(); ?>event/dinacom"><i class="fa fa-angle-double-right"></i>Dinus Application Competition</a></li>
                        	 <li><a href="<?=base_url(); ?>event/afg"><i class="fa fa-angle-double-right"></i>Advance For Next Generation</a></li>
                        	 <li><a href="<?=base_url(); ?>event/ultah"><i class="fa fa-angle-double-right"></i>DNCC Birthday</a></li>
                        	 <li><a href="<?=base_url(); ?>event/reor"><i class="fa fa-angle-double-right"></i>Re-Organization</a></li>
                        </ul>
                    </li>
                    <!-- End Kegiatan -->

                    <!-- Devisi -->                        
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Division
                        </a>
                        <ul class="dropdown-menu">
                        	 <li><a href="<?=base_url(); ?>division/multimedia"><i class="fa fa-angle-double-right"></i>Multimedia</a></li>
                        	 <li><a href="<?=base_url(); ?>division/network"><i class="fa fa-angle-double-right"></i>Computer Networking</a></li>
                        	 <li><a href="<?=base_url(); ?>division/web"><i class="fa fa-angle-double-right"></i>Web Programing</a></li>
                             <li><a href="<?=base_url(); ?>division/dekstop"><i class="fa fa-angle-double-right"></i>Dekstop Programing</a></li>
                        	 <li><a href="<?=base_url(); ?>radio"><i class="fa fa-angle-double-right"></i>Radio</a></li>
                        </ul>
                    </li>
                    <!-- End Devisi -->

                    <li>
                        <a href="<?=base_url(); ?>blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url(); ?>#footer-v2">
                            About Us
                        </a>
                    </li>
                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>    
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>