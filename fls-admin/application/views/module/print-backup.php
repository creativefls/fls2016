<?php
    $query = $this->db->query("SELECT * FROM daftar WHERE alamat_email = '".$_GET['email']."'");
    $data = $query->row_array();
    $ci->load->model("fls_model","flsm");
    
?>
<section class="content-header no-print">
  <?php echo $this->altui->pageHeader($this->config->item('app_name'),"Form Registrasi"); ?>
  <?php echo $this->altui->pageBreadcrumb($this->input->get("route")); ?>
</section>
<section class="invoice">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-users"></i> Form Registrasi FLS 2015
            </h2>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-lg-12">
            <dl>
                <dt>Pilihan 1: </dt>
                <dd><?=$ci->flsm->getIsu($data['isu_1']); ?></dd>
                <dt>Pilihan 2: </dt>
                <dd><?=$ci->flsm->getIsu($data['isu_2']); ?></dd>
            </dl>
        </div>
        <div class="col-sm-4 invoice-col">
            <address>
                <dl class="dl-horizontal">
                    <dt><strong>BIODATA</strong></dt>
                    <dd></dd>
                    <hr />
                    <dt>Nama Lengkap</dt><dt></dt>
                    <dd><?=$data['nama_lengkap']; ?></dd>
                    <dt>Tempat Lahir:</dt>
                    <dd><?=$data['tempat_lahir']; ?></dd>
                    <dt>Tanggal Lahir:</dt>
                    <dd><?=$data['tanggal_lahir']; ?></dd>
                    <dt>Jenis Kelamin:</dt>
                    <dd><?=$data['jenis_kelamin']; ?></dd>
                    <dt>Alamat Domisili:</dt>
                    <dd><?=$data['alamat_domisili']; ?></dd>
                    <dt>No Telp/Handphone:</dt>
                    <dd><?=$data['no_handphone']; ?></dd>
                    <dt>Alamat Email</dt>
                    <dd><?=$data['alamat_email']; ?></dd>
                    <dt>Facebook</dt>
                    <dd><a href="http://facebook.com/<?=$data['facebook']; ?>"><?=$data['facebook']; ?></a></dd>
                    <dt>Twitter</dt>
                    <dd><a href="http://twitter.com/<?=$data['twitter']; ?>">@<?=$data['twitter']; ?></a></dd>
                    <dt>Riwayat Alergi</dt>
                    <dd><?=$data['riwayat_alergi']; ?></dd>
                    <dt>Foto</dt>
                    <dd><img style="max-height: 200px; max-width: 200px;" class="img-responsive" src="http://futureleadersummit.org/daftar/uploads/<?=$data['alamat_email']; ?>.jpg" /></dd>
                </dl>
            </address>
        </div>
        <div class="col-sm-4 invoice-col">
            <dl>
                <dt>Pendidikan</dt>
                <dd></dd>
                <hr />
                <dt><?=$data['pendidikan_institusi_1']; ?></dt>
                <dd><?=$data['pendidikan_tahun_1']; ?> - <?=$data['pendidikan_jurusan_1']; ?></dd>
                <dt><?=$data['pendidikan_institusi_2']; ?></dt>
                <dd><?=$data['pendidikan_tahun_2']; ?> - <?=$data['pendidikan_jurusan_2']; ?></dd>
                <dt><?=$data['pendidikan_institusi_3']; ?></dt>
                <dd><?=$data['pendidikan_tahun_3']; ?> - <?=$data['pendidikan_jurusan_3']; ?></dd>
                <dt></dt>
                <dd></dd>
            </dl>
        </div>
        <div class="col-sm-4 invoice-col">
            <dl>
                <dt>Prestasi</dt>
                <dd></dd>
                <hr />
                <dt><?=$data['nama_prestasi_1']; ?></dt>
                <dd><?=$data['prestasi_tahun_1']; ?> - <?=$data['tingkat_prestasi_1']; ?></dd>
                <dt><?=$data['nama_prestasi_2']; ?></dt>
                <dd><?=$data['prestasi_tahun_2']; ?> - <?=$data['tingkat_prestasi_2']; ?></dd>
                <dt><?=$data['nama_prestasi_3']; ?></dt>
                <dd><?=$data['prestasi_tahun_3']; ?> - <?=$data['tingkat_prestasi_3']; ?></dd>
                <dt><?=$data['nama_prestasi_4']; ?></dt>
                <dd><?=$data['prestasi_tahun_4']; ?> - <?=$data['tingkat_prestasi_4']; ?></dd>
                <dt><?=$data['nama_prestasi_5']; ?></dt>
                <dd><?=$data['prestasi_tahun_5']; ?> - <?=$data['tingkat_prestasi_5']; ?></dd>
                <dt></dt>
                <dd></dd>
            </dl>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-lg-6 invoice-col">
            <dl class="">
                <dt><strong>PENGALAMAN ORGANISASI & EKSTRAKURIKULER</strong></dt>
                <dd></dd>
                <hr />
                <dt><?=$data['nama_organisasi_1']; ?> - <?=$data['organisasi_jabatan_1']; ?></dt>
                <dd><?=$data['organisasi_tahun_1']; ?> - <?=$data['organisasi_tingkat_1']; ?></dd>
                <dt><?=$data['nama_organisasi_2']; ?> - <?=$data['organisasi_jabatan_2']; ?></dt>
                <dd><?=$data['organisasi_tahun_2']; ?> - <?=$data['organisasi_tingkat_2']; ?></dd>
                <dt><?=$data['nama_organisasi_3']; ?> - <?=$data['organisasi_jabatan_3']; ?></dt>
                <dd><?=$data['organisasi_tahun_3']; ?> - <?=$data['organisasi_tingkat_3']; ?></dd>
                <dt><?=$data['nama_organisasi_4']; ?> - <?=$data['organisasi_jabatan_4']; ?></dt>
                <dd><?=$data['organisasi_tahun_4']; ?> - <?=$data['organisasi_tingkat_4']; ?></dd>
                <dt><?=$data['nama_organisasi_5']; ?> - <?=$data['organisasi_jabatan_5']; ?></dt>
                <dd><?=$data['organisasi_tahun_5']; ?> - <?=$data['organisasi_tingkat_5']; ?></dd>
            </dl>
        </div>
        <div class="col-lg-6 invoice-col">
            <dl class="">
                <dt><strong>AKTIFITAS SOSIAL</strong></dt>
                <dd></dd>
                <hr />
                <dt><?=$data['sosial_aktivitas_1']; ?></dt>
                <dd><?=$data['sosial_tahun_1']; ?> - <?=$data['sosial_nama_1']; ?><br /><?=$data['sosial_output_1']; ?></dd>
                <dt><?=$data['sosial_aktivitas_2']; ?></dt>
                <dd><?=$data['sosial_tahun_2']; ?> - <?=$data['sosial_nama_2']; ?><br /><?=$data['sosial_output_2']; ?></dd>
                <dt><?=$data['sosial_aktivitas_3']; ?></dt>
                <dd><?=$data['sosial_tahun_3']; ?> - <?=$data['sosial_nama_3']; ?><br /><?=$data['sosial_output_3']; ?></dd>
                <dt><?=$data['sosial_aktivitas_4']; ?></dt>
                <dd><?=$data['sosial_tahun_4']; ?> - <?=$data['sosial_nama_4']; ?><br /><?=$data['sosial_output_4']; ?></dd>
                <dt><?=$data['sosial_aktivitas_5']; ?></dt>
                <dd><?=$data['sosial_tahun_5']; ?> - <?=$data['sosial_nama_5']; ?><br /><?=$data['sosial_output_5']; ?></dd>
            </dl>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-lg-12 invoice-col">
            <dl class="">
                <dt><strong>ESSAY</strong></dt>
                <dd></dd>
                <hr />
                <dt>Apa yang membuat kamu layak mengikuti program Future Leader Summit 2015?</dt>
                <dd><?=$data['essay_1']; ?></dd>
                <dt>Apa alasan kamu memilih room tersebut?</dt>
                <dd><?=$data['essay_2']; ?></dd>
                <dt>Deskripsikan permasalahan yang ada di kota yang kamu tinggali saat ini! (sesuai prioritas room yang kamu pilih)</dt>
                <dd><?=$data['essay_3']; ?></dd>
                <dt>Harapan kamu atas permasalahan yang terjadi di kota yang kamu tinggali saat ini?</dt>
                <dd><?=$data['essay_4']; ?></dd>
                <dt>Deskripsikan langkah nyata apa yang ingin kamu lakukan bersama delegasi FLS?</dt>
                <dd><?=$data['essay_5']; ?></dd>
                <dt>Berikan Solusimu untuk studi kasus yang telah kamu baca! </dt>
                <dd><?=$data['essay_6']; ?></dd>
            </dl>
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
            <form method="post" action="">
                <button class="btn btn-primary" onclick="window.print();"><i class="fa fa-print"></i> Cetak/Download (Save as PDF)</button>  
            </form>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php $this->load->view("layout/foot"); ?>