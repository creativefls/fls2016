<?php 
        
        $isu = $this->db->query('SELECT * FROM daftar WHERE isu_1=1');
        $isu2 = $this->db->query('SELECT * FROM daftar WHERE isu_1=2');
        $isu3 = $this->db->query('SELECT * FROM daftar WHERE isu_1=3');
        $isu4 = $this->db->query('SELECT * FROM daftar WHERE isu_1=4');
        $isu5 = $this->db->query('SELECT * FROM daftar WHERE isu_1=5');
        $isu6 = $this->db->query('SELECT * FROM daftar WHERE isu_1=6');
        $total = $this->db->query('SELECT * FROM daftar');
?>


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
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $isu->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Digital Media</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $isu2->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Environment</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $isu3->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Education Development</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $isu4->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Human Resources</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $isu5->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Potential Culture</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $isu6->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>Sociopreneur</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $total->num_rows();  ?> <small style="color:#fff;">Pendaftar</small></h3>
                  <p>TOTAL PENDAFTAR</p>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
          </div><!-- /.row -->
</section>
<?php $this->load->view("layout/foot"); ?>