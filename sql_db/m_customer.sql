/*
SQLyog Ultimate v9.50 
MySQL - 5.6.26 : Database - dealer_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dealer_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dealer_db`;

/*Table structure for table `m_customer` */

DROP TABLE IF EXISTS `m_customer`;

CREATE TABLE `m_customer` (
  `no_license` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(75) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `alamat_ktp` text,
  `rt_ktp` varchar(10) DEFAULT NULL,
  `rw_ktp` varchar(10) DEFAULT NULL,
  `kelurahan_ktp` varchar(50) DEFAULT NULL,
  `kecamatan_ktp` varchar(50) DEFAULT NULL,
  `alamat_domisili` text,
  `rt_domisili` varchar(10) DEFAULT NULL,
  `rw_domisili` varchar(10) DEFAULT NULL,
  `kelurahan_domisili` varchar(50) DEFAULT NULL,
  `kecamatan_domisili` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_nikah` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(75) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no_license`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `m_customer` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
