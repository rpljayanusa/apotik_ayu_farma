/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.1.35-community : Database - db_apotik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_apotik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_apotik`;

/*Table structure for table `tb_barangmasuk` */

DROP TABLE IF EXISTS `tb_barangmasuk`;

CREATE TABLE `tb_barangmasuk` (
  `kode_obat` char(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `suplier` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` char(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_barangmasuk` */

insert  into `tb_barangmasuk`(`kode_obat`,`tanggal`,`nama_obat`,`suplier`,`jumlah`,`satuan`,`harga`,`total`) values ('KDO-0001','2021-07-13','Panadol','PT PEPSODEN INDONESIA',100,'Lembar',4000,400000),('KDO-0003','2021-07-13','Panadol','PT KIMIA FARMA',5,'tablet',5000,25000),('KDO-0004','2021-07-23','salep','PT MBS',8,'kjhhjvhj',10000,80000);

/*Table structure for table `tb_jenis_obat` */

DROP TABLE IF EXISTS `tb_jenis_obat`;

CREATE TABLE `tb_jenis_obat` (
  `kode_jenis` char(20) NOT NULL,
  `nama_jenis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_jenis_obat` */

insert  into `tb_jenis_obat`(`kode_jenis`,`nama_jenis`) values ('J-0002','Tablet'),('J-0003','Sirup'),('J-0004','Box'),('J-0005','Salap'),('J-0006','Pil');

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `kode` char(20) NOT NULL,
  `kategori` char(100) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`kode`,`kategori`,`keterangan`) values ('K-0001','Obat Dalam','Obat diminum '),('K-0002','Obat Luar','Obat oles '),('K-0004','OBAT SAKIT KEPALA','PIL');

/*Table structure for table `tb_obat` */

DROP TABLE IF EXISTS `tb_obat`;

CREATE TABLE `tb_obat` (
  `kode_obat` char(20) NOT NULL,
  `jenis_obat` char(100) DEFAULT NULL,
  `nama_obat` varchar(200) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `pemasok` char(100) DEFAULT NULL,
  `kategori` char(100) DEFAULT NULL,
  `tanggal_expired` date DEFAULT NULL,
  PRIMARY KEY (`kode_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_obat` */

insert  into `tb_obat`(`kode_obat`,`jenis_obat`,`nama_obat`,`harga`,`stok`,`pemasok`,`kategori`,`tanggal_expired`) values ('KB-0001','Tablet','Panadol',5000,10,'PT KIMIA FARMA','Obat Dalam','2021-07-15'),('KB-0003','Tablet','Panadol',4000,6,'PT PEPSODEN INDONESIA','Obat Dalam','2021-07-13'),('KB-0004','Pil','Panadol',5000,13,'PT KIMIA FARMA','OBAT SAKIT KEPALA','2021-07-17'),('KB-0005','Salap','salep',10000,7,'PT MBS','Obat Luar','2021-07-30'),('KB-0006','Salap','salep',10000,5,'PT MBS','Obat Luar','2021-07-30');

/*Table structure for table `tb_suplier` */

DROP TABLE IF EXISTS `tb_suplier`;

CREATE TABLE `tb_suplier` (
  `kode_suplier` varchar(20) NOT NULL,
  `nama_suplier` char(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_suplier` */

insert  into `tb_suplier`(`kode_suplier`,`nama_suplier`,`alamat`,`notelp`,`email`) values ('S-0001','PT KIMIA FARMA','jln kayu kalek no 9','082342422345','ptkimiafarma@gmail.com'),('S-0003','PT TRI SAPTA JAYA','jln pasar durian kilangan ','082343432532','pttrisaptajaya@gmail.com'),('S-0004','PT MBS','jln pasar durian kilangan ','081267890967','ptmbs@gmail.com'),('S-0005','PT MERAPI UTAMA PHARMA','jln pasar durian kilangan ','081346897690','ptmerapiutamapharma@gmail.com'),('S-0006','CITRA MEDIKA','jln pasar durian kilangan ','089790764534','citramedika@gmail.com');

/*Table structure for table `tb_transaksi_penjualan` */

DROP TABLE IF EXISTS `tb_transaksi_penjualan`;

CREATE TABLE `tb_transaksi_penjualan` (
  `kode_transaksi` char(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_obat` char(20) DEFAULT NULL,
  `nama_obat` char(100) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_transaksi`,`kembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_transaksi_penjualan` */

insert  into `tb_transaksi_penjualan`(`kode_transaksi`,`tanggal`,`kode_obat`,`nama_obat`,`harga_jual`,`stok`,`bayar`,`kembalian`,`total`) values ('202107120008','2021-07-12','KB-0001','generik',5000,1,20000,15000,5000),('202107120009','2021-07-12','KB-0001','generik',5000,2,20000,10000,10000),('202107120010','2021-07-12','KB-0001','generik',5000,3,20000,5000,15000),('202107120011','2021-07-12','KB-0001','generik',5000,4,50000,30000,20000),('202107130013','2021-07-13','KB-0004','Panadol',5000,10,100000,50000,50000),('202107160014','2021-07-16','KB-0004','Panadol',5000,2,50000,40000,10000),('202107160015','2021-07-16','KB-0004','Panadol',5000,6,50000,20000,30000),('202107230016','2021-07-23','KB-0001','Panadol',5000,5,50000,25000,25000),('202107230017','2021-07-23','KB-0003','Panadol',4000,4,20000,4000,16000),('202107230018','2021-07-23','KB-0005','salep',10000,1,10000,0,10000);

/*Table structure for table `tb_user1` */

DROP TABLE IF EXISTS `tb_user1`;

CREATE TABLE `tb_user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `level` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user1` */

insert  into `tb_user1`(`id`,`nama`,`email`,`username`,`pass`,`image`,`level`) values (145,'Rampi Darnis','rampi@gmail.com','admin','e10adc3949ba59abbe56e057f20f883e','Foto_palsu1.jpg','1'),(146,'Ilham','ilham@gmail.com','kepala','202cb962ac59075b964b07152d234b70','kunjungan.PNG','3'),(147,'Sri Wahyuni S.Farm,Apt','sriwahyuni@gmail.com','pimpinan','202cb962ac59075b964b07152d234b70','94773a98f649a8dc884b91e49be64819.jpeg','2'),(148,'Amirah','amirah@gmail.com','kasir','202cb962ac59075b964b07152d234b70','a969b855c848675219ba4b65b699aa55.jpg','3');

/* Trigger structure for table `tb_barangmasuk` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode_obat` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode_obat` BEFORE INSERT ON `tb_barangmasuk` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode_obat`,4)),0) FROM `tb_barangmasuk`);
	SET @urut= @urut + 1;
	SET new.`kode_obat`=CONCAT('KDO-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_barangmasuk` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `menambah_stok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `menambah_stok` AFTER INSERT ON `tb_barangmasuk` FOR EACH ROW BEGIN
    UPDATE tb_obat SET stok = stok + NEW.jumlah WHERE
 kode_obat = NEW.kode_obat;
  END */$$


DELIMITER ;

/* Trigger structure for table `tb_jenis_obat` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode_jenis` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode_jenis` BEFORE INSERT ON `tb_jenis_obat` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode_jenis`,4)),0) FROM `tb_jenis_obat`);
	SET @urut= @urut + 1;
	SET new.`kode_jenis`=CONCAT('J-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_kategori` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode` BEFORE INSERT ON `tb_kategori` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode`,4)),0) FROM `tb_kategori`);
	SET @urut= @urut + 1;
	SET new.`kode`=CONCAT('K-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_obat` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode_data_obat` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode_data_obat` BEFORE INSERT ON `tb_obat` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode_obat`,4)),0) FROM `tb_obat`);
	SET @urut= @urut + 1;
	SET new.`kode_obat`=CONCAT('KB-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_suplier` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode_suplier` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode_suplier` BEFORE INSERT ON `tb_suplier` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode_suplier`,4)),0) FROM `tb_suplier`);
	SET @urut= @urut + 1;
	SET new.`kode_suplier`=CONCAT('S-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_transaksi_penjualan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `faktur` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `faktur` BEFORE INSERT ON `tb_transaksi_penjualan` FOR EACH ROW BEGIN
	SET @urut=(SELECT  IFNULL(MAX(RIGHT(`kode_transaksi`,4)),0) FROM `tb_transaksi_penjualan`);
	SET @urut= @urut + 1;
	SET new.kode_transaksi=CONCAT(CURDATE() + 0,LPAD(@urut,4,0));
	
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_transaksi_penjualan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `menurangi_stok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `menurangi_stok` AFTER INSERT ON `tb_transaksi_penjualan` FOR EACH ROW BEGIN
    UPDATE tb_obat SET stok = stok - NEW.stok WHERE
 kode_obat = NEW.kode_obat;
  END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
