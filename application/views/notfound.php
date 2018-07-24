<!--=== Content Part ===-->
<div class="container content">		
    <!--Error Block-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="error-v1">
                <span class="error-v1-title wow tada" data-wow-duration="2s" data-wow-delay="0.5s">404</span>
                <span class="wow tada" data-wow-duration="2s" data-wow-delay="1.5s">Oops! Ada Kesalahan </span>
                <p class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1.5s">Halaman yang Anda cari tidak tersedia diwebsite Kami, Mohon periksa kembali :) <br> - Mimin FLS2016 - </p>
                <a class="btn-u btn-bordered wow tada" data-wow-duration="2s" data-wow-delay="2.5s" href="<?=base_url(); ?>">Halaman Beranda</a>
            </div>
        </div>
    </div>
    <!--End Error Block-->
</div>	
<!--=== End Content Part ===-->

<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="<?=base_url();?>"; 
    }
    setTimeout('Redirect()', 10000);   
</script>