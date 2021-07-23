/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.3.16-MariaDB : Database - tiket
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `tiket`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `level` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`nama`,`email`,`username`,`pass`,`image`,`level`) values (140,'Berbie ','Selly@gmail.com','kasir','202cb962ac59075b964b07152d234b70','siwi.png','2'),(141,'Ibrahim','ibrahim@gmail.com','admin','21232f297a57a5a743894a0e4a801fc3','kutar.png','1'),(145,'Annisa','annisa.sofyan30@gmail.com','manager','4fd6876055fac702551f47c0298a7fae','c2019f818f493471d408d0be0e911571.png','3');

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `kodejadwal` char(7) NOT NULL,
  `jam` char(15) DEFAULT NULL,
  PRIMARY KEY (`kodejadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

insert  into `jadwal`(`kodejadwal`,`jam`) values ('j-001','Pagi-08:00'),('j-002','Siang-13:30'),('j-003','Malam-20:00');

/*Table structure for table `mobil` */

DROP TABLE IF EXISTS `mobil`;

CREATE TABLE `mobil` (
  `kodemobil` char(7) NOT NULL,
  `nomobil` varchar(20) DEFAULT NULL,
  `merkmobil` varchar(20) DEFAULT NULL,
  `warnamobil` varchar(20) DEFAULT NULL,
  `jumlahkursi` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodemobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mobil` */

insert  into `mobil`(`kodemobil`,`nomobil`,`merkmobil`,`warnamobil`,`jumlahkursi`) values ('M-0001','BA-12345- DA','Avanza Luxury','Hitam',7),('M-0002','BA-23121- CA','Exenia Luxury','Putih',7),('M-0003','BA-11211- SA','AVP Luxury','Silver',7);

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `kodepelanggan` char(7) NOT NULL,
  `namapelanggan` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `jeniskelamin` varchar(20) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `tanggalberangkat` date DEFAULT NULL,
  `tanggalpesan` date DEFAULT NULL,
  `kodemobil` char(7) DEFAULT NULL,
  `kodejadwal` char(7) DEFAULT NULL,
  `kodesopir` char(7) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` char(30) DEFAULT NULL,
  PRIMARY KEY (`kodepelanggan`),
  KEY `fk1` (`kodemobil`),
  KEY `fk2` (`kodejadwal`),
  KEY `fk3` (`kodesopir`),
  CONSTRAINT `fk1` FOREIGN KEY (`kodemobil`) REFERENCES `mobil` (`kodemobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk2` FOREIGN KEY (`kodejadwal`) REFERENCES `jadwal` (`kodejadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk3` FOREIGN KEY (`kodesopir`) REFERENCES `sopir` (`kodesopir`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`kodepelanggan`,`namapelanggan`,`alamat`,`jeniskelamin`,`nohp`,`tanggalberangkat`,`tanggalpesan`,`kodemobil`,`kodejadwal`,`kodesopir`,`harga`,`keterangan`) values ('PL-0001','Susi susanti','jln. kesehatan 02 no','Laki-laki','0234234234','2019-12-21','2019-12-13','M-0001','j-002','S-001',50000,'1'),('PL-0002','ILHAM','jln. kesehatan 07','Laki-laki','0234234234','2019-12-21','2019-12-13','M-0001','j-002','S-001',50000,'1'),('PL-0003','BOY','jln. raden saleh no ','Laki-laki','081273434343','2019-12-21','2019-12-13','M-0003','j-003','S-002',60000,'1'),('PL-0004','hanum','jln.nara 09','Laki-laki','081623423424','2019-12-20','2019-12-13','M-0002','j-003','S-001',50000,'1'),('PL-0005','BOyka','jln. kesehatan 02 no','Laki-laki','0234234234','2019-12-20','2019-12-14','M-0001','j-001','S-001',50000,'1'),('PL-0006','desy','jln.simpang gaduik','Perempuan','08233754','2019-12-14','2019-12-14','M-0003','j-002','S-002',50000,'1'),('PL-0007','weziza','ww','Laki-laki','22','2019-12-17','2019-12-20','M-0002','j-002','S-001',20000,'1'),('PL-0009','anda','jln. kuranji 276 A','Laki-laki','0812666777','2019-12-21','2019-12-21','M-0001','j-001','S-002',200000,'1'),('PL-0010','indah','batang kapeh','Perempuan','0877654321','2019-01-16','2019-12-23','M-0002','j-001','S-002',45000,'1');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `kodebayar` char(20) NOT NULL,
  `kodepelanggan` char(7) DEFAULT NULL,
  `namapelanggan` varchar(50) DEFAULT NULL,
  `namasopir` char(100) DEFAULT NULL,
  `nomormobil` char(100) DEFAULT NULL,
  `jadwalpemesanan` date DEFAULT NULL,
  `jadwalkeberangkatan` date DEFAULT NULL,
  `jam` char(15) DEFAULT NULL,
  `jumlahbayar` int(11) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `keterangan` int(1) DEFAULT NULL,
  PRIMARY KEY (`kodebayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`kodebayar`,`kodepelanggan`,`namapelanggan`,`namasopir`,`nomormobil`,`jadwalpemesanan`,`jadwalkeberangkatan`,`jam`,`jumlahbayar`,`totalbayar`,`kembalian`,`keterangan`) values ('201912170001','PL-0001','Susi susanti','dani','BA-12345- DA','2019-12-13','2019-12-21','Siang-13:30',50000,50000,0,2),('201912170002','PL-0002','ILHAM','dani','BA-12345- DA','2019-12-13','2019-12-21','Siang-13:30',50000,50000,0,2),('201912170003','PL-0003','BOY','boy','BA-11211- SA','2019-12-13','2019-12-21','Malam-20:00',100000,60000,40000,1),('201912170004','-Pilih-','BOY','boy','BA-11211- SA','2019-12-13','2019-12-21','Malam-20:00',100000,60000,40000,1),('201912170005','PL-0005','BOyka','dani','BA-12345- DA','2019-12-14','2019-09-20','Pagi-08:00',100000,50000,50000,1),('201912180006','PL-0004','hanum','dani','BA-23121- CA','2019-12-13','2019-12-20','Malam-20:00',50000,50000,0,1),('201912200007','PL-0006','desy','boy','BA-11211- SA','2019-12-14','2019-10-14','Siang-13:30',50000,50000,0,1),('201912210008','PL-0007','weziza','dani','BA-23121- CA','2019-12-20','2018-12-17','Siang-13:30',20000,20000,0,1),('201912230009','PL-0009','anda','boy','BA-12345- DA','2019-12-21','2019-11-21','Pagi-08:00',200000,200000,0,1);

/*Table structure for table `sopir` */

DROP TABLE IF EXISTS `sopir`;

CREATE TABLE `sopir` (
  `kodesopir` char(7) NOT NULL,
  `namasopir` varchar(20) DEFAULT NULL,
  `alamatsopir` varchar(30) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kodesopir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sopir` */

insert  into `sopir`(`kodesopir`,`namasopir`,`alamatsopir`,`nohp`) values ('S-001','dani','jln.sebarang padang 09','0234234234'),('S-002','boy','jln kuranji 03','09345345'),('S-003','arnaldi','jln.rrimbo bujang no 94','081224374343'),('S-004','aea','WDS','EFS'),('S-005','xd','sf','fdf'),('S-008','asd','sdf','ewf');

/* Trigger structure for table `pelanggan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `nopelanggan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `nopelanggan` BEFORE INSERT ON `pelanggan` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kodepelanggan`,4)),0) FROM `pelanggan`);
	SET @urut= @urut + 1;
	SET new.`kodepelanggan`=CONCAT('PL-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `pembayaran` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_faktur` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_faktur` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
	SET @urut=(SELECT  IFNULL(MAX(RIGHT(kodebayar,4)),0) FROM pembayaran);
	SET @urut= @urut + 1;
	SET new.`kodebayar`=CONCAT(CURDATE() + 0,LPAD(@urut,4,0));
	
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
