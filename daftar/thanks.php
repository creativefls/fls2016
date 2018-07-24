<?php
/*
try{
	$db = new PDO("mysql:host=localhost; dbname=fls", "root", "");
}catch (PDOException $e){
	echo $e->getMessage();
} */

/*
try{
	$db = new PDO("mysql:host=192.168.23.10; dbname=futureleadersummit_main", "faleddo", "Z~atz335");
}catch (PDOException $e){
	echo $e->getMessage();
}
*/	
try{
    $db = new PDO("mysql:host=127.0.0.1; dbname=fls_main", "root", "");
}catch (PDOException $e){
    echo $e->getMessage();
}

if(isset($_POST['daftar'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir.$_POST['alamat_email'].".jpg";

    //$id = md5(date(time());
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    
    $isu_1 = $_POST['isu_1'];
    $isu_2 = $_POST['isu_2'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_domisili = $_POST['alamat_domisili'];
    $no_handphone = $_POST['no_handphone'];
    $alamat_email = $_POST['alamat_email'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $riwayat_alergi = $_POST['riwayat_alergi'];
    
    $prestasi_tahun_1 = $_POST['prestasi_tahun_1'];
    $prestasi_tahun_2 = $_POST['prestasi_tahun_2'];
    $prestasi_tahun_3 = $_POST['prestasi_tahun_3'];
    $prestasi_tahun_4 = $_POST['prestasi_tahun_4'];
    $prestasi_tahun_5 = $_POST['prestasi_tahun_5'];
    $nama_prestasi_1 = $_POST['nama_prestasi_1'];
    $nama_prestasi_2 = $_POST['nama_prestasi_2'];
    $nama_prestasi_3 = $_POST['nama_prestasi_3'];
    $nama_prestasi_4 = $_POST['nama_prestasi_4'];
    $nama_prestasi_5 = $_POST['nama_prestasi_5'];
    $tingkat_prestasi_1 = $_POST['tingkat_prestasi_1'];
    $tingkat_prestasi_2 = $_POST['tingkat_prestasi_2'];
    $tingkat_prestasi_3 = $_POST['tingkat_prestasi_3'];
    $tingkat_prestasi_4 = $_POST['tingkat_prestasi_4'];
    $tingkat_prestasi_5 = $_POST['tingkat_prestasi_5'];
    $organisasi_tahun_1 = $_POST['organisasi_tahun_1'];
    $organisasi_tahun_2 = $_POST['organisasi_tahun_2'];
    $organisasi_tahun_3 = $_POST['organisasi_tahun_3'];
    $organisasi_tahun_4 = $_POST['organisasi_tahun_4'];
    $organisasi_tahun_5 = $_POST['organisasi_tahun_5'];
    $nama_organisasi_1 = $_POST['nama_organisasi_1'];
    $nama_organisasi_2 = $_POST['nama_organisasi_2'];
    $nama_organisasi_3 = $_POST['nama_organisasi_3'];
    $nama_organisasi_4 = $_POST['nama_organisasi_4'];
    $nama_organisasi_5 = $_POST['nama_organisasi_5'];
    $organisasi_jabatan_1 = $_POST['organisasi_jabatan_1'];
    $organisasi_jabatan_2 = $_POST['organisasi_jabatan_2'];
    $organisasi_jabatan_3 = $_POST['organisasi_jabatan_3'];
    $organisasi_jabatan_4 = $_POST['organisasi_jabatan_4'];
    $organisasi_jabatan_5 = $_POST['organisasi_jabatan_5'];
    $organisasi_tingkat_1 = $_POST['organisasi_tingkat_1'];
    $organisasi_tingkat_2 = $_POST['organisasi_tingkat_2'];
    $organisasi_tingkat_3 = $_POST['organisasi_tingkat_3'];
    $organisasi_tingkat_4 = $_POST['organisasi_tingkat_4'];
    $organisasi_tingkat_5 = $_POST['organisasi_tingkat_5'];
    $sosial_tahun_1 = $_POST['sosial_tahun_1'];
    $sosial_tahun_2 = $_POST['sosial_tahun_2'];
    $sosial_tahun_3 = $_POST['sosial_tahun_3'];
    $sosial_tahun_4 = $_POST['sosial_tahun_4'];
    $sosial_tahun_5 = $_POST['sosial_tahun_5'];
    $sosial_aktivitas_1 = $_POST['sosial_aktivitas_1'];
    $sosial_aktivitas_2 = $_POST['sosial_aktivitas_2'];
    $sosial_aktivitas_3 = $_POST['sosial_aktivitas_3'];
    $sosial_aktivitas_4 = $_POST['sosial_aktivitas_4'];
    $sosial_aktivitas_5 = $_POST['sosial_aktivitas_5'];
    $sosial_nama_1 = $_POST['sosial_nama_1'];
    $sosial_nama_2 = $_POST['sosial_nama_2'];
    $sosial_nama_3 = $_POST['sosial_nama_3'];
    $sosial_nama_4 = $_POST['sosial_nama_4'];
    $sosial_nama_5 = $_POST['sosial_nama_5'];
    $sosial_output_1 = $_POST['sosial_output_1'];
    $sosial_output_2 = $_POST['sosial_output_2'];
    $sosial_output_3 = $_POST['sosial_output_3'];
    $sosial_output_4 = $_POST['sosial_output_4'];
    $sosial_output_5 = $_POST['sosial_output_5'];
    $essay_1 = $_POST['essay_1'];
    $essay_2 = $_POST['essay_2'];
    $essay_3 = $_POST['essay_3'];
    $essay_4 = $_POST['essay_4'];
    $essay_5 = $_POST['essay_5'];
    $essay_6 = $_POST['essay_6'];
    if(isset($_POST['blog'])){
        $blog = "Yes";
    }else{
        $blog = "No";
    }
    if(isset($_POST['socmed'])){
        $socmed = "Yes";
    }else{
        $socmed = "No";
    }
    if(isset($_POST['surat_kabar'])){
        $surat_kabar = "Yes";
    }else{
        $surat_kabar = "No";
    }
    if(isset($_POST['poster'])){
        $poster = "Yes";
    }else{
        $poster = "No";
    }
    $lainnya = $_POST['lainnya'];
    $pendidikan_tahun_1 = $_POST['pendidikan_tahun_1'];
    $pendidikan_tahun_2 = $_POST['pendidikan_tahun_2'];
    $pendidikan_tahun_3 = $_POST['pendidikan_tahun_3'];
    $pendidikan_institusi_1 = $_POST['pendidikan_institusi_1'];
    $pendidikan_institusi_2 = $_POST['pendidikan_institusi_2'];
    $pendidikan_institusi_3 = $_POST['pendidikan_institusi_3'];
    $pendidikan_jurusan_1 = $_POST['pendidikan_jurusan_1'];
    $pendidikan_jurusan_2 = $_POST['pendidikan_jurusan_2'];
    $pendidikan_jurusan_3 = $_POST['pendidikan_jurusan_3'];
        
    
    $query = $db->prepare("INSERT INTO `daftar` SET
                                `isu_1` = '$isu_1',
                                `isu_2` = '$isu_2',
                                `nama_lengkap` = '$nama_lengkap',
                                `tanggal_lahir` = '$tanggal_lahir',
                                `tempat_lahir` = '$tempat_lahir',
                                `jenis_kelamin` = '$jenis_kelamin',
                                `alamat_domisili` = '$alamat_domisili',
                                `no_handphone` = '$no_handphone',
                                `alamat_email` = '$alamat_email',
                                `facebook` = '$facebook',
                                `twitter` = '$twitter',
                                `riwayat_alergi` = '$riwayat_alergi',
                                `foto` = 'http://futureleadersummit.org/daftar/uploads/$alamat_email.jpg',
                                `prestasi_tahun_1` = '$prestasi_tahun_1',
                                `prestasi_tahun_2` = '$prestasi_tahun_2',
                                `prestasi_tahun_3` = '$prestasi_tahun_3',
                                `prestasi_tahun_4` = '$prestasi_tahun_4',
                                `prestasi_tahun_5` = '$prestasi_tahun_5',
                                `nama_prestasi_1` = '$nama_prestasi_1',
                                `nama_prestasi_2` = '$nama_prestasi_2',
                                `nama_prestasi_3` = '$nama_prestasi_3',
                                `nama_prestasi_4` = '$nama_prestasi_4',
                                `nama_prestasi_5` = '$nama_prestasi_5',
                                `tingkat_prestasi_1` = '$tingkat_prestasi_1',
                                `tingkat_prestasi_2` = '$tingkat_prestasi_2',
                                `tingkat_prestasi_3` = '$tingkat_prestasi_3',
                                `tingkat_prestasi_4` = '$tingkat_prestasi_4',
                                `tingkat_prestasi_5` = '$tingkat_prestasi_5',
                                `organisasi_tahun_1` = '$organisasi_tahun_1',
                                `organisasi_tahun_2` = '$organisasi_tahun_2',
                                `organisasi_tahun_3` = '$organisasi_tahun_3',
                                `organisasi_tahun_4` = '$organisasi_tahun_4',
                                `organisasi_tahun_5` = '$organisasi_tahun_5',
                                `nama_organisasi_1` = '$nama_organisasi_1',
                                `nama_organisasi_2` = '$nama_organisasi_2',
                                `nama_organisasi_3` = '$nama_organisasi_3',
                                `nama_organisasi_4` = '$nama_organisasi_4',
                                `nama_organisasi_5` = '$nama_organisasi_5',
                                `organisasi_jabatan_1` = '$organisasi_jabatan_1',
                                `organisasi_jabatan_2` = '$organisasi_jabatan_2',
                                `organisasi_jabatan_3` = '$organisasi_jabatan_3',
                                `organisasi_jabatan_4` = '$organisasi_jabatan_4',
                                `organisasi_jabatan_5` = '$organisasi_jabatan_5',
                                `organisasi_tingkat_1` = '$organisasi_tingkat_1',
                                `organisasi_tingkat_2` = '$organisasi_tingkat_2',
                                `organisasi_tingkat_3` = '$organisasi_tingkat_3',
                                `organisasi_tingkat_4` = '$organisasi_tingkat_4',
                                `organisasi_tingkat_5` = '$organisasi_tingkat_5',
                                `sosial_tahun_1` = '$sosial_tahun_1',
                                `sosial_tahun_2` = '$sosial_tahun_2',
                                `sosial_tahun_3` = '$sosial_tahun_3',
                                `sosial_tahun_4` = '$sosial_tahun_4',
                                `sosial_tahun_5` = '$sosial_tahun_5',
                                `sosial_aktivitas_1` = '$sosial_aktivitas_1',
                                `sosial_aktivitas_2` = '$sosial_aktivitas_2',
                                `sosial_aktivitas_3` = '$sosial_aktivitas_3',
                                `sosial_aktivitas_4` = '$sosial_aktivitas_4',
                                `sosial_aktivitas_5` = '$sosial_aktivitas_5',
                                `sosial_nama_1` = '$sosial_nama_1',
                                `sosial_nama_2` = '$sosial_nama_2',
                                `sosial_nama_3` = '$sosial_nama_3',
                                `sosial_nama_4` = '$sosial_nama_4',
                                `sosial_nama_5` = '$sosial_nama_5',
                                `sosial_output_1` = '$sosial_output_1',
                                `sosial_output_2` = '$sosial_output_2',
                                `sosial_output_3` = '$sosial_output_3',
                                `sosial_output_4` = '$sosial_output_4',
                                `sosial_output_5` = '$sosial_output_5',
                                `essay_1` = '$essay_1',
                                `essay_2` = '$essay_2',
                                `essay_3` = '$essay_3',
                                `essay_4` = '$essay_4',
                                `essay_5` = '$essay_5',
                                `essay_6` = '$essay_6',
                                `blog` = '$blog',
                                `socmed` = '$socmed',
                                `surat_kabar` = '$surat_kabar',
                                `poster` = '$poster',
                                `lainnya` = '$lainnya',
                                `pendidikan_tahun_1` = '$pendidikan_tahun_1',
                                `pendidikan_tahun_2` = '$pendidikan_tahun_2',
                                `pendidikan_tahun_3` = '$pendidikan_tahun_3',
                                `pendidikan_institusi_1` = '$pendidikan_institusi_1',
                                `pendidikan_institusi_2` = '$pendidikan_institusi_2',
                                `pendidikan_institusi_3` = '$pendidikan_institusi_3',
                                `pendidikan_jurusan_1` = '$pendidikan_jurusan_1',
                                `pendidikan_jurusan_2` = '$pendidikan_jurusan_2',
                                `pendidikan_jurusan_3` = '$pendidikan_jurusan_3'");
    $query->execute();
} ?>
<!doctype html>
<html class="no-js" lang="">
<head>
 
	<meta charset="utf-8">
	<meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	 
	<title>Future Leader Summit 2016 | Registrasi</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">

	 
	<link rel="stylesheet" href="vendor/offline/theme.css">
	<link rel="stylesheet" href="vendor/pace/theme.css">
	 
	 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	 
	<link rel="stylesheet" href="css/panel.css">
	 
	<link rel="stylesheet" href="css/skins/palette.1.css" id="skin">
	<link rel="stylesheet" href="css/fonts/style.1.css" id="font">
	<link rel="stylesheet" href="css/main.css">
	 
	<script src="vendor/modernizr.js"></script>
</head>
<body>
	<div class="app small-sidebar">
		<section class="layout">
			<section class="main-content">
				<div class="content-wrap">
                <br>
    				<div class="row">
    					<div class="col-lg-6 col-lg-offset-3">
    						<section class="panel position-relative">
                                <div class="ribbon ribbon-danger">
                                    <div class="banner">
                                        <div class="text">Congratulations!</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="mg-r-md">
                                    </a>
                                    <div>
                                        <center><h3>Selamat!<br>Anda telah berhasil mendaftar Calon Delegates di Future Leader Summit 2016
                                        
                                        </h3> </center> 
                                        
                                    </div><br /><br />
                                    <center>
                                    <small>
                                        <i class="fa fa-share text-primary mg-r-xs"></i>
                                        Bagikan ke teman-temanmu. Ajak mereka membawa perubahan bagi Indonesia.
                                    </small>
                                        <p class="mg-t-xs center-content">
                                        <a onclick="fb()" class="btn btn-primary"><i class="fa fa-facebook"></i> Bagikan ke Facebook</a>
                                        <a onclick="tw()" class="btn btn-info"><i class="fa fa-twitter"></i> Bagikan ke Twitter</a>
                                        <a href="http://localhost/fls2016/daftar" class="btn btn-warning"><i class="fa fa-file-word-o"></i> Daftar Lagi</a>
                                    </p>
                                    
                                    <p class="mg-xs"></p>
                                    </center>
                                </div>
                            </section>
    					</div>
    				</div>
				</div>
			</section>
		</section>
	</div>
	 
	<script src="vendor/jquery-1.11.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<script src="vendor/offline/offline.min.js"></script>
	<script src="vendor/pace/pace.min.js"></script>
	 
	 
	<script src="js/main.js"></script>
	 
	<script src="js/panel.js"></script>

    <script>
        function fb() {
        window.open("http://www.facebook.com/share.php?u=http://futureleadersummit.org", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
    }
        function tw() {
        window.open("http://twitter.com/share?text=Saya tlh daftar FLS2016! ayo kamu juga &url=http://futureleadersummit.org&hashtags=fls2016,delegatesFLS2016", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
    }

        
    </script>
</body>
</html>
