/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_rusun
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rusun` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_rusun`;

/*Table structure for table `air` */

DROP TABLE IF EXISTS `air`;

CREATE TABLE `air` (
  `id_air` int(11) NOT NULL,
  `harga_awal` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  PRIMARY KEY (`id_air`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `air` */

/*Table structure for table `akun` */

DROP TABLE IF EXISTS `akun`;

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `akun` */

insert  into `akun`(`username`,`password`,`status`) values 
('admin','$2y$10$PL74lm.PWxIO9MWGc4NziOLg0.xknBaI9l0dALC4Y.6cmWVtw6CB2','admin');

/*Table structure for table `berkas` */

DROP TABLE IF EXISTS `berkas`;

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `ktp_pmhn` varchar(255) DEFAULT NULL,
  `ktp_psgn` varchar(255) DEFAULT NULL,
  `kartu_kk` varchar(255) DEFAULT NULL,
  `srt_kerja` varchar(255) DEFAULT NULL,
  `struk_gaji` varchar(255) DEFAULT NULL,
  `srt_nikah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berkas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `berkas` */

insert  into `berkas`(`id_berkas`,`ktp_pmhn`,`ktp_psgn`,`kartu_kk`,`srt_kerja`,`struk_gaji`,`srt_nikah`) values 
(123,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `keluhan` */

DROP TABLE IF EXISTS `keluhan`;

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keluhan` blob NOT NULL,
  `username` varchar(15) NOT NULL,
  PRIMARY KEY (`id_keluhan`),
  KEY `username` (`username`),
  CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `keluhan` */

/*Table structure for table `pemohon` */

DROP TABLE IF EXISTS `pemohon`;

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nama_pemohon` varchar(30) NOT NULL,
  `notelp_pemohon` varchar(14) NOT NULL,
  `nik_pemohon` varchar(255) NOT NULL,
  `nomor_kk` varchar(255) NOT NULL,
  `kerja_pemohon` varchar(25) NOT NULL,
  `gaji_pemohon` varchar(255) NOT NULL,
  `jlh_penghuni` int(11) NOT NULL,
  `nama_psgn` varchar(30) NOT NULL,
  `kerja_psgn` varchar(25) NOT NULL,
  `gaji_psgn` varchar(255) NOT NULL,
  `kode_rusun` int(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  PRIMARY KEY (`id_pemohon`),
  KEY `kode_rusun` (`kode_rusun`),
  KEY `id_berkas` (`id_berkas`),
  CONSTRAINT `pemohon_ibfk_1` FOREIGN KEY (`kode_rusun`) REFERENCES `rusun` (`kode_rusun`),
  CONSTRAINT `pemohon_ibfk_2` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemohon` */

/*Table structure for table `penghuni` */

DROP TABLE IF EXISTS `penghuni`;

CREATE TABLE `penghuni` (
  `id_penghuni` int(11) NOT NULL,
  `nama_wakil` varchar(30) NOT NULL,
  `nik_wakil` varchar(255) NOT NULL,
  `nomor_kk` varchar(255) NOT NULL,
  `kerja_wakil` varchar(25) NOT NULL,
  `gaji_wakil` varchar(255) NOT NULL,
  `jlh_penghuni` int(11) NOT NULL,
  `nama_psgn` varchar(30) NOT NULL,
  `kerja_psgn` varchar(25) NOT NULL,
  `gaji_psgn` varchar(255) NOT NULL,
  `tgl_huni` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `kode_rusun` int(11) NOT NULL,
  PRIMARY KEY (`id_penghuni`),
  KEY `username` (`username`),
  KEY `kode_rusun` (`kode_rusun`),
  CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  CONSTRAINT `penghuni_ibfk_2` FOREIGN KEY (`kode_rusun`) REFERENCES `rusun` (`kode_rusun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penghuni` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pemohon` varchar(30) NOT NULL,
  `nik_pemohon` int(16) NOT NULL,
  `t_wawancara` date DEFAULT NULL,
  `t_hasil` date DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_penghuni` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`),
  KEY `id_pemohon` (`id_pemohon`),
  KEY `id_penghuni` (`id_penghuni`),
  CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`),
  CONSTRAINT `pengumuman_ibfk_2` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengumuman` */

/*Table structure for table `rusun` */

DROP TABLE IF EXISTS `rusun`;

CREATE TABLE `rusun` (
  `kode_rusun` int(11) NOT NULL,
  `no_ruang` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_rusun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rusun` */

insert  into `rusun`(`kode_rusun`,`no_ruang`,`lantai`,`keterangan`) values 
(123,1,1,'asd');

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sessions_akun` (`username`),
  CONSTRAINT `fk_sessions_akun` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`username`) values 
('628f165d63c71','admin');

/*Table structure for table `sewa` */

DROP TABLE IF EXISTS `sewa`;

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `sewa_rusun` int(11) NOT NULL,
  `debit_air` float NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(15) NOT NULL,
  PRIMARY KEY (`id_sewa`),
  KEY `username` (`username`),
  CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sewa` */

/*Table structure for table `tanggapan` */

DROP TABLE IF EXISTS `tanggapan`;

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggapan` blob NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggapan`),
  KEY `id_keluhan` (`id_keluhan`),
  CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tanggapan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
