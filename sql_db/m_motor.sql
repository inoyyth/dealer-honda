
USE `dealer_db`;

/*Table structure for table `m_motor` */

DROP TABLE IF EXISTS `m_motor`;

CREATE TABLE `m_motor` (
  `id` int(11) DEFAULT NULL,
  `no_polisi` varchar(20) DEFAULT NULL,
  `no_sj` varchar(20) DEFAULT NULL,
  `no_so` varchar(20) DEFAULT NULL,
  `no_msn` varchar(20) DEFAULT NULL,
  `no_rgk` varchar(20) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `m_motor` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
