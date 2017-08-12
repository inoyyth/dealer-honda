-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: dealer_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `m_backup_db`
--

DROP TABLE IF EXISTS `m_backup_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_backup_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_file` text,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_backup_db`
--

LOCK TABLES `m_backup_db` WRITE;
/*!40000 ALTER TABLE `m_backup_db` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_backup_db` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `module` varchar(100) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `status` enum('1','2') DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`) USING BTREE,
  CONSTRAINT `fkmenuparentid` FOREIGN KEY (`parent`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,NULL,'-','Master','fa fa-home','javascript:void(0);',1,'1'),(2,NULL,'-','Transaksi','fa fa-edit','javascript:void(0);',2,'1'),(3,NULL,'-','Inventory','fa fa-tasks','javascript:void(0);',3,'1'),(4,NULL,'-','Leasing','fa fa-users','javascript:void(0);',4,'1'),(5,NULL,'-','Laporan','fa fa-envelope','javascript:void(0);',5,'1'),(6,NULL,'-','Setting','fa fa-cogs','javascript:void(0);',6,'1'),(23,1,'md_jabatan','Master Jabatan','fa fa-circle','master-jabatan',1,'1'),(24,1,'md_karyawan','Master Karyawan','fa fa-circle','master-karyawan',2,'1'),(26,1,'md_customer','Master Customer','fa fa-circle','master-customer',3,'1'),(27,1,'md_motor','Master Motor','fa fa-circle','master-motor',4,'1'),(28,1,'md_aksesoris','Master Aksesoris','fa fa-circle','master-aksesoris',5,'1'),(29,1,'md_gudang','Master Gudang','fa fa-circle','master-gudang',6,'1'),(30,1,'md_leasing','Master Leasing','fa fa-circle','master-leasing',7,'1'),(32,2,'t_penjualan','Penjualan','fa fa-circle','penjualan',1,'1'),(36,1,'account','Users Management','fa fa-circle','user-management',9,'1'),(38,2,'t_kwitansi','Kwitansi DP','fa fa-circle','kwitansi-dp',2,'1'),(41,2,'t_pdi','PDI','fa fa-circle','pdi',3,'1'),(42,2,'t_stnk_bpkb','STNK & BPKB','fa fa-circle','stnk',5,'1'),(43,2,'t_void','Void','fa fa-circle','void',7,'1'),(44,2,'t_surat_jalan','Surat Jalan','fa fa-circle','surat-jalan',4,'1'),(45,3,'stok','Stok','fa fa-circle','stock',1,'1'),(46,3,'motor_terima','Penerimaan Motor','fa fa-circle','import-penerimaan-motor',2,'1'),(47,3,'input_penerimaan','Penerimaan Aksesoris','fa fa-circle','input-penerimaan-aksesoris',3,'1'),(48,3,'motor_keluar','Mutasi Motor','fa fa-circle','motor-keluar',4,'1'),(50,4,'leasing/cetak_kwitansi_leasing','Cetak Kwitansi','fa fa-circle','cetak-kwitansi-leasing',1,'1'),(51,4,'leasing/rekap_tagihan','Rekap Tagihan','fa fa-circle','rekap-tagihan',2,'1'),(52,4,'leasing_covernote','Surat Pernyataan','fa fa-circle','surat-pernyataan',3,'1'),(53,4,'pencairan_leasing','Pencairan Leasing','fa fa-circle','pencairan-leasing',4,'1'),(54,5,'laporan','Rpt.Penjualan','fa fa-circle','laporan-penjualan',1,'1'),(59,2,'t_terima_stnk','TT STNK & BPKB','fa fa-circle','terima-stnk',6,'1'),(60,1,'-','Owner Setting','fa fa-circle','owner',10,'1'),(65,6,'backup_db','Backup Database','fa fa-circle','backup-database',1,'1');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-07  9:12:39
