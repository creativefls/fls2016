<section class="content-header">
  <?php echo $this->altui->pageHeader($this->config->item('app_name'),"404 Not Found"); ?>
  <?php echo $this->altui->pageBreadcrumb("404"); ?>
</section>
<section class="content">
    <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="<?php echo base_url(); ?>">return to dashboard</a>.
            </p>
        </div>
    </div>
</section>
<?php $this->load->view("layout/foot"); ?>