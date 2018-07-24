<section class="content-header no-print">
  <?php echo $this->altui->pageHeader($this->config->item('app_name'),"Laporan Warnet"); ?>
  <?php echo $this->altui->pageBreadcrumb($this->input->get("route")); ?>
</section>
<section class="invoice">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> Laporan Pemilik Warnet
            </h2>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <address>
                DINHUBKOMINFO Jawa Tengah<br />
                Jalan Siliwangi No 357 Semarang 51046.<br/>
                Telp. (024) 7604640, (024) 7605660, Fax. (024) 7607697.<br />
            </address>
        </div>
        <div class="col-sm-4 invoice-col">
            <address>  
            </address>
        </div>
        <div class="col-sm-4 invoice-col">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">
                <?php
                    $header = array("No.",
                                    "Nama Pemilik",
                                    "Alamat",
									"No Telepon",
									"Jumlah Warnet");
                    echo $this->altui->tableHeader($header);
                ?>
                <tbody>
                    <?php
                        $no = 1;
						$query = $this->db->query("SELECT *,COUNT(warnet_id) as c FROM owner NATURAL JOIN warnet GROUP BY owner_id");
                        foreach($query->result_array() as $svc){
                            $rows = array($no++,
                                            $svc["owner_name"],
                                            $svc["owner_address"],
											$svc["owner_phone"],
                                            $svc["c"]);
                            echo $this->altui->tableRow($rows);
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
            <form method="post" action="">
                <button class="btn btn-primary" onclick="window.print();"><i class="fa fa-print"></i> Cetak Laporan</button>  
            </form>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php $this->load->view("layout/foot"); ?>