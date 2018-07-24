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
        <div class="col-xs-6">
            <h2 class="page-header">
                <i class="fa fa-users"></i> Form Registrasi FLS 2015
            </h2>
        </div>
        <div class="col-xs-6">
            <h2 class="page-header pull-right">
                Nomor Registrasi : <?=$data['id']; ?>
            </h2>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-md-12">
            <dl>
                <dt>Pilihan 1: </dt>
                <dd><?=$ci->flsm->getIsu($data['isu_1']); ?></dd>
                <dt>Pilihan 2: </dt>
                <dd><?=$ci->flsm->getIsu($data['isu_2']); ?></dd>
            </dl>
        </div>
        <div class="col-sm-4 invoice-col">
            <dl>
                <dt>Biodata</dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Nama</th>
                      <td>:</td>
                      <td><?=$data['nama_lengkap']; ?></td>
                    </tr>
                     <tr>
                      <th>Tempat Lahir</th>
                      <td>:</td>
                      <td><?=$data['tempat_lahir']; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td>:</td>
                      <td><?=$data['tanggal_lahir']; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <td>:</td>
                      <td><?=$data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat Domisili</th>
                      <td>:</td>
                      <td><?=$data['alamat_domisili']; ?></td>
                    </tr>
                    <tr>
                      <th>No Telp/Handphone</th>
                      <td>:</td>
                      <td><?=$data['no_handphone']; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat Email</th>
                      <td>:</td>
                      <td><?=$data['alamat_email']; ?></td>
                    </tr>
                    <tr>
                      <th>Facebook</th>
                      <td>:</td>
                      <td><a href="http://facebook.com/<?=$data['facebook']; ?>"><?=$data['facebook']; ?></td>
                    </tr>
                    <tr>
                      <th>Twitter</th>
                      <td>:</td>
                      <td><a href="http://twitter.com/<?=$data['twitter']; ?>">@<?=$data['twitter']; ?></a></td>
                    </tr>
                    <tr>
                      <th>Riwayat Alergi</th>
                      <td>:</td>
                      <td><?=$data['riwayat_alergi']; ?></td>
                    </tr>
                    <tr>
                      <th>Foto</th>
                      <td>:</td>
                      <td><img style="max-height: 200px; max-width: 200px;" class="img-responsive" src="http://localhost/fls2016/daftar/uploads/<?=$data['alamat_email']; ?>.jpg" /></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </dl>
        </div>
        <div class="col-sm-4 invoice-col">
            <dl>
                <dt>Pendidikan</dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Tahun</th>
                      <th>Institusi</th>
                      <th>Jurusan</th>
                    </tr>
                    <tr>
                      <td><?=$data['pendidikan_tahun_1']; ?></td>
                      <td><?=$data['pendidikan_institusi_1']; ?></td>
                      <td><?=$data['pendidikan_jurusan_1']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['pendidikan_tahun_2']; ?></td>
                      <td><?=$data['pendidikan_institusi_2']; ?></td>
                      <td><?=$data['pendidikan_jurusan_2']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['pendidikan_tahun_3']; ?></td>
                      <td><?=$data['pendidikan_institusi_3']; ?></td>
                      <td><?=$data['pendidikan_jurusan_3']; ?></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </dl>
        </div>

        <div class="col-sm-4 invoice-col">
            <dl>
                <dt>Prestasi</dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Tahun</th>
                      <th>Prestasi</th>
                      <th>Tingkat</th>
                    </tr>
                    <tr>
                      <td><?=$data['prestasi_tahun_1']; ?></td>
                      <td><?=$data['nama_prestasi_1']; ?></td>
                      <td><?=$data['tingkat_prestasi_1']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['prestasi_tahun_2']; ?></td>
                      <td><?=$data['nama_prestasi_2']; ?></td>
                      <td><?=$data['tingkat_prestasi_2']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['prestasi_tahun_3']; ?></td>
                      <td><?=$data['nama_prestasi_3']; ?></td>
                      <td><?=$data['tingkat_prestasi_3']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['prestasi_tahun_4']; ?></td>
                      <td><?=$data['nama_prestasi_4']; ?></td>
                      <td><?=$data['tingkat_prestasi_4']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['prestasi_tahun_5']; ?></td>
                      <td><?=$data['nama_prestasi_5']; ?></td>
                      <td><?=$data['tingkat_prestasi_5']; ?></td>
                    </tr>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </dl>
        </div>
    </div>
    <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
            <dl>
                <dt>Pengalaman Organisasi & Ekstrakulikuler</dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Tahun</th>
                      <th>Organisasi</th>
                      <th>Posisi/Jabatan</th>
                      <th>Tingkat</th>
                    </tr>
                    <tr>
                      <td><?=$data['organisasi_tahun_1']; ?></td>
                      <td><?=$data['nama_organisasi_1']; ?></td>
                      <td><?=$data['organisasi_jabatan_1']; ?></td>
                      <td><?=$data['organisasi_tingkat_1']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['organisasi_tahun_2']; ?></td>
                      <td><?=$data['nama_organisasi_2']; ?></td>
                      <td><?=$data['organisasi_jabatan_2']; ?></td>
                      <td><?=$data['organisasi_tingkat_2']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['organisasi_tahun_3']; ?></td>
                      <td><?=$data['nama_organisasi_3']; ?></td>
                      <td><?=$data['organisasi_jabatan_3']; ?></td>
                      <td><?=$data['organisasi_tingkat_3']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['organisasi_tahun_4']; ?></td>
                      <td><?=$data['nama_organisasi_4']; ?></td>
                      <td><?=$data['organisasi_jabatan_4']; ?></td>
                      <td><?=$data['organisasi_tingkat_4']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['organisasi_tahun_5']; ?></td>
                      <td><?=$data['nama_organisasi_5']; ?></td>
                      <td><?=$data['organisasi_jabatan_5']; ?></td>
                      <td><?=$data['organisasi_tingkat_5']; ?></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </dl>
        </div>

        <div class="col-sm-6 invoice-col">
            <dl>
                <dt>Aktifitas Sosial</dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Tahun</th>
                      <th>Aktifitas</th>
                      <th>Istitusi/Organisasi</th>
                      <th>Output</th>
                    </tr>
                    <tr>
                      <td><?=$data['sosial_tahun_1']; ?></td>
                      <td><?=$data['sosial_aktivitas_1']; ?></td>
                      <td><?=$data['sosial_nama_1']; ?></td>
                      <td><?=$data['sosial_output_1']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['sosial_tahun_2']; ?></td>
                      <td><?=$data['sosial_aktivitas_2']; ?></td>
                      <td><?=$data['sosial_nama_2']; ?></td>
                      <td><?=$data['sosial_output_2']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['sosial_tahun_3']; ?></td>
                      <td><?=$data['sosial_aktivitas_3']; ?></td>
                      <td><?=$data['sosial_nama_3']; ?></td>
                      <td><?=$data['sosial_output_3']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['sosial_tahun_4']; ?></td>
                      <td><?=$data['sosial_aktivitas_4']; ?></td>
                      <td><?=$data['sosial_nama_4']; ?></td>
                      <td><?=$data['sosial_output_4']; ?></td>
                    </tr>
                    <tr>
                      <td><?=$data['sosial_tahun_5']; ?></td>
                      <td><?=$data['sosial_aktivitas_5']; ?></td>
                      <td><?=$data['sosial_nama_5']; ?></td>
                      <td><?=$data['sosial_output_5']; ?></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </dl>
        </div>
    </div>
    <div class="row invoice-info">

        <div class="col-md-12 invoice-col">
            <dl class="">
                <dt><strong>ESSAY</strong></dt>
                <dd></dd>
                <div class="box">
                <div class="box-body no-padding">
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
                <dt>Berikan Solusimu untuk studi kasus yang telah kamu baca! {Studi Kasus: <?=$ci->flsm->getIsu($data['isu_1']); ?>}</dt>
                <dd><?=$data['essay_6']; ?></dd>
                </div></div>
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