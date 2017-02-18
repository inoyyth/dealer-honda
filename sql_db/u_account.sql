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

/*Table structure for table `u_account` */

DROP TABLE IF EXISTS `u_account`;

CREATE TABLE `u_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `path_foto` varchar(255) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `u_date_expired` date DEFAULT NULL,
  `access_account` text,
  `access_data` text,
  `u_create` int(11) DEFAULT NULL,
  `u_modif` int(11) DEFAULT NULL,
  `u_delete` int(11) DEFAULT NULL,
  `u_date_create` datetime NOT NULL,
  `u_date_modif` datetime NOT NULL,
  `u_date_delete` datetime NOT NULL,
  `u_lastlogin` datetime NOT NULL,
  `u_status_login` int(2) NOT NULL,
  `u_status` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `u_account_ibfk_1` (`id_group`),
  CONSTRAINT `u_account_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `u_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=latin1;

/*Data for the table `u_account` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
