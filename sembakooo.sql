/*
SQLyog Ultimate v12.08 (32 bit)
MySQL - 5.5.16 : Database - sembakoo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sembakoo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sembakoo`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `uname` char(10) DEFAULT NULL,
  `pass` char(10) DEFAULT NULL,
  `role` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`uname`,`pass`,`role`) values ('aku','aku','admin'),('kua','kua','pegawai');

/*Table structure for table `jenis_barang` */

DROP TABLE IF EXISTS `jenis_barang`;

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_barang` */

insert  into `jenis_barang`(`id`,`jenis_barang`) values (10,'aqua'),(11,'katjang'),(24,'sabun kucing'),(25,'kandang'),(27,NULL);

/*Table structure for table `master_barang` */

DROP TABLE IF EXISTS `master_barang`;

CREATE TABLE `master_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemasok` int(11) DEFAULT NULL,
  `id_jbarang` int(11) DEFAULT NULL,
  `nama_barang` varchar(111) DEFAULT NULL,
  `harga` int(111) DEFAULT NULL,
  `stok` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pemasok` (`id_pemasok`),
  KEY `id_jbarang` (`id_jbarang`),
  CONSTRAINT `master_barang_ibfk_1` FOREIGN KEY (`id_pemasok`) REFERENCES `pemasok` (`id`),
  CONSTRAINT `master_barang_ibfk_2` FOREIGN KEY (`id_jbarang`) REFERENCES `jenis_barang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `master_barang` */

insert  into `master_barang`(`id`,`id_pemasok`,`id_jbarang`,`nama_barang`,`harga`,`stok`) values (3,13,25,'wesi',1000000,'19'),(4,12,24,'lux',25000,'15');

/*Table structure for table `pemasok` */

DROP TABLE IF EXISTS `pemasok`;

CREATE TABLE `pemasok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `telepon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pemasok` */

insert  into `pemasok`(`id`,`nama`,`alamat`,`telepon`) values (12,'asas','sasass',12),(13,'sd','sdsa',23);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(111) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `master_barang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`id_barang`,`jumlah`,`harga`,`total`) values (1,3,1,1000000,1000000),(2,4,5,25000,125000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
