/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - db_rusun
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rusun` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

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

insert  into `air`(`id_air`,`harga_awal`,`harga_akhir`) values 
(123102302,22222,1000);

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
('Abdi','$2y$10$G5kAkkhiVbqpBS9ehnrRsuIcVTucbB2Na6v11.vox8PvOXgs0TXb.','user'),
('abdi1','$2y$10$CWddT3QRlIGcDM.yEK1euOPq5taKy7AZC4Z7EL4eDePnbfXQh7.6W','user'),
('admin','$2y$10$PL74lm.PWxIO9MWGc4NziOLg0.xknBaI9l0dALC4Y.6cmWVtw6CB2','admin'),
('agus','$2y$10$qyD087YifIsuFKcbK6/oReKRyz2bzZyV6HAo1srOdXeeMccYdjIIC','user'),
('arras','$2y$10$OQp6tOf7Mq06BLjM8zgT0e9gGlBSP6lXius0qhoARnkvS2xnM.QXa','user'),
('irvan','$2y$10$3EIfP8e.M.dUYgUu9IzD/ezUlkfFXsDDueTdfFAXcCLuUq0h6WrBS','user'),
('irvan177','$2y$10$x/X/857Xl2mu/TJ8r4lfauZIh08QK3BReqn90cAf//aSY69lS0G4q','user'),
('rahmat','$2y$10$2zZYTBer8sEFkcydBRb5qOSu8zfcgD.eOTSPR0bkX5l/xsSuMkcce','user');

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

insert  into `keluhan`(`id_keluhan`,`waktu`,`keluhan`,`username`) values 
(773081488,'2022-06-24 11:02:23','Sanitasi Pembuangan Air Kurang Diperhatikan, Perlu Adanya Perawatan Bulanan Untuk Memperlancar Aliran Air','irvan');

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
  `kode_rusun` int(11) DEFAULT NULL,
  `id_berkas` int(11) NOT NULL,
  PRIMARY KEY (`id_pemohon`),
  KEY `kode_rusun` (`kode_rusun`),
  KEY `id_berkas` (`id_berkas`),
  CONSTRAINT `pemohon_ibfk_1` FOREIGN KEY (`kode_rusun`) REFERENCES `rusun` (`kode_rusun`) ON DELETE SET NULL ON UPDATE CASCADE
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
  `kode_rusun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penghuni`),
  KEY `username` (`username`),
  KEY `kode_rusun` (`kode_rusun`),
  CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penghuni_ibfk_2` FOREIGN KEY (`kode_rusun`) REFERENCES `rusun` (`kode_rusun`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penghuni` */

insert  into `penghuni`(`id_penghuni`,`nama_wakil`,`nik_wakil`,`nomor_kk`,`kerja_wakil`,`gaji_wakil`,`jlh_penghuni`,`nama_psgn`,`kerja_psgn`,`gaji_psgn`,`tgl_huni`,`username`,`kode_rusun`) values 
(42210020,'Agus Saputra','1234567812345678','8765432187654321','Peternak Ikan','Rp 4.000.000, - Rp 6.000.000,',3,'Sulistina','Peternak cicakwewqe','Rp 0 - Rp 1.999.999,','2022-06-22','irvan177',2),
(102930129,'Muhammad Irvan','8765432187654321','8765432187654321','Buruh Bangunan','Rp 4.000.000, - Rp 6.000.000,',2,'Intan Pratiwi','Ibu Rumah Tangga','Rp 0 - Rp 1.999.999,','2022-06-09','irvan',1),
(1916972476,'Abdi','1234512345123451','1234512345123451','Ojek Naga','Rp 0 - Rp 1.999.999,',4,'Naga','Tunggangan Ojek','Rp 4.000.000, - Rp 6.000.000,','2022-06-24','abdi1',465824550);

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pemohon` varchar(30) NOT NULL,
  `nik_pemohon` varchar(255) NOT NULL,
  `t_wawancara` datetime DEFAULT NULL,
  `t_hasil` datetime DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_penghuni` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`),
  KEY `id_pemohon` (`id_pemohon`),
  KEY `id_penghuni` (`id_penghuni`),
  CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pengumuman_ibfk_2` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`) ON DELETE CASCADE ON UPDATE CASCADE
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
(1,1,1,'Terisi'),
(2,2,1,'Terisi'),
(3,3,1,'Terisi'),
(465824550,101,1,'Terisi'),
(479773696,102,1,'Kosong'),
(656559183,103,1,'Kosong'),
(1167848640,4,1,'Terisi');

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
('62b32e009cc01','admin'),
('62b467e7e7f57','admin'),
('62b52eb7d14bf','admin');

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

insert  into `sewa`(`id_sewa`,`sewa_rusun`,`debit_air`,`keterangan`,`deadline`,`username`) values 
(12312,450000,1000,'Lunas','2022-06-30 08:13:16','irvan'),
(1795455327,450000,100,'Belum Lunas','2022-07-30 11:59:00','arras');

/*Table structure for table `tanggapan` */

DROP TABLE IF EXISTS `tanggapan`;

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggapan` blob NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggapan`),
  KEY `id_keluhan` (`id_keluhan`),
  CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tanggapan` */

insert  into `tanggapan`(`id_tanggapan`,`waktu`,`tanggapan`,`id_keluhan`) values 
(286382177,'2022-06-24 11:03:22','Pihak Rusun Menerima Tanggapan Anda, Dan Akan Ada Perawatan Bulanan Untuk Sanitasi Air\r\nTerima Kasih Atas Keluhannya',773081488);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
