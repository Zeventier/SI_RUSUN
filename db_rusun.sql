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

insert  into `air`(`id_air`,`harga_awal`,`harga_akhir`) values 
(123102302,909,1222);

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
('admin','$2y$10$PL74lm.PWxIO9MWGc4NziOLg0.xknBaI9l0dALC4Y.6cmWVtw6CB2','admin'),
('agus','$2y$10$qyD087YifIsuFKcbK6/oReKRyz2bzZyV6HAo1srOdXeeMccYdjIIC','user'),
('bruh','$2y$10$ERHUKr0412itT9GF/z9GFOSxNuj7jeNihTHDTXSp7r4iVYX5Thk5G','user'),
('irvan','$2y$10$3EIfP8e.M.dUYgUu9IzD/ezUlkfFXsDDueTdfFAXcCLuUq0h6WrBS','user'),
('irvan177','$2y$10$x/X/857Xl2mu/TJ8r4lfauZIh08QK3BReqn90cAf//aSY69lS0G4q','user');

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
(25327788,'assets/file/uploads/14000719771234567899999999225750474ame.png','assets/file/uploads/10056845541234567899999999771732690ame.png','assets/file/uploads/2286659151234567899999999703101503ame.png','assets/file/uploads/17548877451234567899999999361568508ame.png','assets/file/uploads/3533701391234567899999999989114987ame.png','assets/file/uploads/12001036371234567899999999694542409ame.png'),
(109930073,NULL,NULL,NULL,NULL,NULL,NULL),
(163666572,'assets/file/uploads/206301518012345678999999991404635296ame.png','assets/file/uploads/8915655171234567899999999228256029ame.png','assets/file/uploads/162653171112345678999999991049656482ame.png','assets/file/uploads/25675015212345678999999991880708541ame.png','assets/file/uploads/153437535212345678999999991996398767ame.png','assets/file/uploads/84690731412345678999999991276607933ame.png'),
(461040036,NULL,NULL,NULL,NULL,NULL,NULL),
(483291454,NULL,NULL,NULL,NULL,NULL,NULL),
(624398514,NULL,NULL,NULL,NULL,NULL,NULL),
(957847137,'assets/file/uploads/16940908281234567899999999249278750ame.png','assets/file/uploads/19921607541234567899999999109934672ame.png','assets/file/uploads/98846392312345678999999991813427185ame.png','assets/file/uploads/598612695123456789999999957709030ame.png','assets/file/uploads/130400139212345678999999992068771326ame.png','assets/file/uploads/2765000251234567899999999703072145ame.png'),
(1035603883,NULL,NULL,NULL,NULL,NULL,NULL),
(1072775778,NULL,NULL,NULL,NULL,NULL,NULL),
(1205165654,NULL,NULL,NULL,NULL,NULL,NULL),
(1275104629,NULL,NULL,NULL,NULL,NULL,NULL),
(1385844620,NULL,NULL,NULL,NULL,NULL,NULL),
(1419300878,'assets/file/uploads/4372932371234567899999999680927126ezgif.com-gif-maker (1).png','assets/file/uploads/11544104391234567899999999721352824ezgif.com-gif-maker (1).png','assets/file/uploads/3465861821234567899999999838860775ezgif.com-gif-maker (1).png','assets/file/uploads/211132355112345678999999991054982286ezgif.com-gif-maker (1).png','assets/file/uploads/48299074912345678999999991115781115ezgif.com-gif-maker (1).png','assets/file/uploads/7544839401234567899999999327907668ezgif.com-gif-maker (1).png'),
(1515196921,NULL,NULL,NULL,NULL,NULL,NULL),
(1539671460,'assets/file/uploads/86372772512345678999999991933039671risu (2).PNG','assets/file/uploads/90707814112345678999999991082918420risu (2).PNG','assets/file/uploads/10362513571234567899999999421226532risu (2).PNG','assets/file/uploads/14789092601234567899999999687071536risu (2).PNG','assets/file/uploads/137397450412345678999999991121881164risu (2).PNG','assets/file/uploads/95856416312345678999999991837799360risu (2).PNG'),
(1596077811,NULL,NULL,NULL,NULL,NULL,NULL),
(1615817406,'assets/file/uploads/115518335012345678999999991585998118risu.PNG','assets/file/uploads/6335574171234567899999999187274324risu.PNG','assets/file/uploads/1228639561234567899999999673034319risu.PNG','assets/file/uploads/11501734021234567899999999675293269risu.PNG','assets/file/uploads/7150093921234567899999999227415861risu.PNG','assets/file/uploads/18926582921234567899999999240321964risu.PNG'),
(1692523565,NULL,NULL,NULL,NULL,NULL,NULL),
(1767305197,NULL,NULL,NULL,NULL,NULL,NULL),
(1781144406,NULL,NULL,NULL,NULL,NULL,NULL);

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
(105757249,'2022-06-09 06:18:00','AA','irvan'),
(172548448,'2022-06-09 02:50:00','Halo','irvan'),
(890497078,'2022-06-09 02:44:52','TES','irvan'),
(1371609189,'2022-06-09 05:43:15','tes','irvan');

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

insert  into `pemohon`(`id_pemohon`,`nama_pemohon`,`notelp_pemohon`,`nik_pemohon`,`nomor_kk`,`kerja_pemohon`,`gaji_pemohon`,`jlh_penghuni`,`nama_psgn`,`kerja_psgn`,`gaji_psgn`,`kode_rusun`,`id_berkas`) values 
(645740519,'BRUH','087271737475','1234567899999999','1235465489784651','Peternak naga','Rp 0 - Rp 1.999.999,',1,'Inyadeam','Peternak cicak','Rp 0 - Rp 1.999.999,',1167848640,483291454),
(1887872666,'Agus Saputra','087271737475','1234567899999999','1235465489784651','Peternak naga','Rp 0 - Rp 1.999.999,',1,'Inyadeam','Peternak cicak','Rp 0 - Rp 1.999.999,',2,1275104629);

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

insert  into `penghuni`(`id_penghuni`,`nama_wakil`,`nik_wakil`,`nomor_kk`,`kerja_wakil`,`gaji_wakil`,`jlh_penghuni`,`nama_psgn`,`kerja_psgn`,`gaji_psgn`,`tgl_huni`,`username`,`kode_rusun`) values 
(42210020,'Agus Saputra','1234567899999999','1235465489784651','Peternak naga','Rp 0 - Rp 1.999.999,',1,'Inyadeam','Peternak cicak','Rp 0 - Rp 1.999.999,','2022-06-22','irvan177',2),
(102930129,'Irvan','129012901','1090212093','bbbb','10000000',2,'asdasd','asdasd','10219219','2022-06-09','irvan',1),
(1495314794,'BRUH','1234567899999999','1235465489784651','Peternak naga','Rp 0 - Rp 1.999.999,',1,'Inyadeam','Peternak cicak','Rp 0 - Rp 1.999.999,','2022-06-22','bruh',1167848640);

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pemohon` varchar(30) NOT NULL,
  `nik_pemohon` varchar(255) NOT NULL,
  `t_wawancara` date DEFAULT NULL,
  `t_hasil` date DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_penghuni` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`),
  KEY `id_pemohon` (`id_pemohon`),
  KEY `id_penghuni` (`id_penghuni`),
  CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`),
  CONSTRAINT `pengumuman_ibfk_2` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id_pengumuman`,`nama_pemohon`,`nik_pemohon`,`t_wawancara`,`t_hasil`,`keterangan`,`id_pemohon`,`id_penghuni`,`password`) values 
(1842855626,'Agus Saputra','1234567899999999',NULL,NULL,'Lolos',1887872666,42210020,'123'),
(1980459893,'BRUH','1234567899999999',NULL,NULL,'Lolos',645740519,1495314794,'12345678');

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
(313071871,3,1,'Terisi'),
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
('62b32e009cc01','admin');

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
(12312,450000,1000,'Lunas','2022-06-30 08:13:16','irvan');

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

insert  into `tanggapan`(`id_tanggapan`,`waktu`,`tanggapan`,`id_keluhan`) values 
(63009205,'2022-06-09 08:59:39','TOS',890497078),
(63399851,'2022-06-09 09:00:02','TOS',890497078),
(2039106246,'2022-06-09 08:58:20','HALO JUGA',172548448);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
