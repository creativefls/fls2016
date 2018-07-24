/*
SQLyog Ultimate v10.42 
MySQL - 5.6.26 : Database - dncc_reborn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dncc_reborn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dncc_reborn`;

/*Table structure for table `afg` */

DROP TABLE IF EXISTS `afg`;

CREATE TABLE `afg` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` decimal(13,0) NOT NULL,
  `email` varchar(150) NOT NULL,
  `p_k` varchar(150) DEFAULT NULL COMMENT 'penyakit khusus',
  `alasan` varchar(250) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bayar` enum('belum lunas','lunas') NOT NULL DEFAULT 'belum lunas' COMMENT 'status pembayaran',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `afg` */

insert  into `afg`(`nim`,`nama`,`no_telp`,`email`,`p_k`,`alasan`,`tahun`,`bayar`) values ('A11.2014.08311','sOBIRIN',89522248642,'indrakusuma.udinus@gmail.com','Panu','saya ingin menjadi anak yang pandai dalam bidang ITterutama web development seperti kakak - kakak dncc',2016,'belum lunas'),('A11.2014.08316','Indra Kusuma',89522248642,'indrakusuma.udinus@gmail.com','-','<p>\r\n	saya pengen banget jadi anggota DNCC ! mohon terima saya kakak ! ya kakak ! ya kakak ! ya kakak ! kakak ! !! !! ! ! !</p>\r\n',2016,'lunas');

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `judul_ar` varchar(300) NOT NULL COMMENT 'judul artikel',
  `isi_ar` text NOT NULL COMMENT 'isi kontent',
  `kat_id` smallint(3) DEFAULT NULL COMMENT 'kategori arikel',
  `id_user` smallint(3) DEFAULT NULL COMMENT 'user posting',
  `tgl_ar` date NOT NULL COMMENT 'tanggal posting',
  PRIMARY KEY (`id_artikel`),
  KEY `id_user` (`id_user`),
  KEY `kategori` (`kat_id`),
  CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `kategori` FOREIGN KEY (`kat_id`) REFERENCES `kategori` (`kat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `artikel` */

insert  into `artikel`(`id_artikel`,`judul_ar`,`isi_ar`,`kat_id`,`id_user`,`tgl_ar`) values (2,'Kenapa harus DNCC ?','<p>\r\n	kemaren aku pergi sama temen aku..</p>\r\n',6,1,'2016-02-18');

/*Table structure for table `btng` */

DROP TABLE IF EXISTS `btng`;

CREATE TABLE `btng` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_telp` decimal(15,0) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_divisi` smallint(6) DEFAULT NULL,
  `alasan` varchar(250) DEFAULT NULL COMMENT 'alasan ikut',
  `tahun` decimal(10,0) DEFAULT NULL COMMENT 'tahun btng',
  `p_k` varchar(100) DEFAULT NULL COMMENT 'penyakit khusus',
  `bayar` enum('belum lunas','lunas') DEFAULT 'belum lunas' COMMENT 'status pembayaran peserta',
  PRIMARY KEY (`nim`),
  KEY `FK_divisi` (`id_divisi`),
  CONSTRAINT `FK_divisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `btng` */

insert  into `btng`(`nim`,`nama`,`no_telp`,`email`,`id_divisi`,`alasan`,`tahun`,`p_k`,`bayar`) values ('A11.2014.08311','Kusni Mubarok',89522248642,'kusni@gmail.com',4,'saya ingin membuat komputer terkeren sepanjang masa dengan  temen-temn dncc yang katanya jago - jago IT',2016,'malu','belum lunas'),('A11.2014.08316','Indra Kusuma',89522248642,'indrakusuma.udinus@gmail.com',1,'saya ingin menjadi seorang pemenang bersama teman-teman dncc yang keren dan kece kece',2016,'-','belum lunas');

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id_cu` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_cu` varchar(100) DEFAULT NULL,
  `email_cu` varchar(150) DEFAULT NULL,
  `pesan_cu` text,
  `status_cu` enum('belum dijawab','sudah terjawab') DEFAULT 'belum dijawab',
  PRIMARY KEY (`id_cu`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id_cu`,`nama_cu`,`email_cu`,`pesan_cu`,`status_cu`) values (10,'Indra Kusuma','indrakusuma@gmail.com','saya ingin belajar programming bersama orang-orang dncc\n','belum dijawab');

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `id_divisi` smallint(6) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `divisi` */

insert  into `divisi`(`id_divisi`,`nama_divisi`) values (1,'Multimedia'),(2,'Web Development'),(3,'Dekstop Development'),(4,'Network Computing'),(5,'Radio');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kat_id` smallint(3) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`kat_id`,`kategori`) values (1,'Multimedia'),(2,'Web'),(3,'Network'),(4,'Mobile'),(5,'Radio'),(6,'Umum'),(7,'Event'),(8,'Berita');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` smallint(3) NOT NULL AUTO_INCREMENT COMMENT 'id dari mesin',
  `nama` varchar(50) NOT NULL COMMENT 'nama lengkap',
  `email` varchar(80) NOT NULL COMMENT 'email aktif',
  `nim` varchar(15) NOT NULL COMMENT 'nomer induk mahasiswa',
  `username` varchar(50) NOT NULL COMMENT 'username',
  `password` varchar(300) NOT NULL COMMENT 'password',
  `level` enum('admin','member','pendaftaran') NOT NULL COMMENT 'level user',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`email`,`nim`,`username`,`password`,`level`) values (1,'Indra Kusuma','indrakusuma.udinus@gmail.com','A11.2014.08316','indra','e24f6e3ce19ee0728ff1c443e4ff488d','admin'),(5,'Sie Pendaftaran','dncc@ukm.dinus.ac.id','A11.2014.08888','pendaftaran','beb9fb4aa4fbb632a8e029ca1c63e6af','pendaftaran'),(6,'Humas DNCC','dncc@ukm.dinus.ac.id','A11.2014.08999','siehumas','ecf4847e81d627e91eb1b1030e2d0443','member');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
