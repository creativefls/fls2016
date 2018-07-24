<?php //$ci->load->model('service_model'); ?>
<section class="content-header">
  <?php echo $this->altui->pageHeader($this->config->item('app_name'),"Dashboard"); ?>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-4">
            <?php //echo $this->altui->infoBox("Layanan Barang",$ci->service_model->BarangCount(),"fa-circle-o",0); ?>
        </div>
        <div class="col-lg-4">
            <?php //echo $this->altui->infoBox("Layanan Jasa",$ci->service_model->JasaCount(),"fa-circle-o",1); ?>
        </div>
    </div>
</section>
<?php $this->load->view("layout/foot"); ?>