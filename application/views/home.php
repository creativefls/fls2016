<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $var_judul;?> | FLS2016</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="copyright" content="Future Leader Summit">
    <meta name="rating" content="general">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $deskripsi;?>">
    <meta name="dncc" content="mobile web application">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url(); ?>assets/img/favicon.png">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:300,400' rel='stylesheet' type='text/css'>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/footers/footer-v2.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/animate.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/theme-colors/default.css" id="style_color">

    <!-- CSS Customization -->
    <?php $this->load->view("custom_css/$var_custom_css"); ?>
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/custom.css">
</head>	

<body class="header-fixed">
<div class="wrapper">
    
    <?php 
    	$this->load->view('layout/header'); //->contain for header
        if ($slider == "ada") {
            $this->load->view('layout/slider'); //->slider contain
        }
    ?>
    <!--===  Breadcrumbs ===-->
    <?php
     
        if(isset($var_breadcumb)){
            $this->load->view('layout/breadcumb',array("var_breadcumb" => $var_breadcumb, "var_judul" => $var_judul));
        }

    ?>
</div><!--/wrapper-->
         <!--=== dinamis kontent ===-->
        <?php $this->load->view($modul);?>
    <?php
        $this->load->view('layout/footer');//->this function for load footer
    ?>

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?=base_url(); ?>assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?=base_url(); ?>assets/js/app.js"></script>
<!-- penting -->
<script type="text/javascript" src="<?=base_url(); ?>assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/plugins/wow-animations/js/wow.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/plugins/owl-recent-works.js"></script>


<?php $this->load->view("custom_js/$var_custom_js"); ?>

<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        OwlCarousel.initOwlCarousel();   
        OwlRecentWorks.initOwlRecentWorksV1();
        new WOW().init(); 
    });
</script>

<script type="text/javascript">
    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
</script>

</body>
</html>	