-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dealer_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `path_foto` varchar(255) DEFAULT NULL,
  `access_menu` text,
  `super_admin` enum('1','2') DEFAULT '1' COMMENT '1 =>not super admin, 2 => is super admin',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime NOT NULL,
  `sys_update_date` datetime NOT NULL,
  `sys_delete_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `status` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (6,'inoy@sportix.com','inoy','Q4LtO.abDQlMnOpK0k~hOY1I~KOLsQU2tr2dTf6iWDv44pZETwzgoE0fyaOAxOGBcP6KhkOCnEHRvAbHbkg~sw--','909090909','supri170845@gmail.com','assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg','a:28:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"60\";s:4:\"slug\";s:5:\"owner\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:1;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:10;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:26;a:3:{s:4:\"menu\";s:2:\"55\";s:4:\"slug\";s:13:\"laporan-saldo\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:27;a:3:{s:4:\"menu\";s:2:\"56\";s:4:\"slug\";s:10:\"print-stok\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}','2',NULL,6,NULL,'0000-00-00 00:00:00','2017-04-29 16:35:01','0000-00-00 00:00:00','2017-05-05 19:42:50','1'),(7,'sapta@gmail.com','Sapta','FPeGUTv9tqU2OK+ehIe1y8pL+LOh5ZmSomm7hY/ibO9N77b052+OaMFj/vNfzL298YcvFF/EAsBh8faI+QQvRA==','879979797979','supri170845@gmail.com','667fa1e720b199d98293f0eec4086ebe.jpg','a:27:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"34\";s:4:\"slug\";s:12:\"return-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"49\";s:4:\"slug\";s:11:\"motor-masuk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:26;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}}','1',NULL,6,NULL,'0000-00-00 00:00:00','2017-03-12 01:16:44','0000-00-00 00:00:00','2017-03-12 01:13:19','1');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `covernote_history`
--

DROP TABLE IF EXISTS `covernote_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `covernote_history` (
  `id_covernote` int(11) NOT NULL AUTO_INCREMENT,
  `noso_covernote` varchar(50) DEFAULT NULL,
  `print_format_id` int(11) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_covernote`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `covernote_history`
--

LOCK TABLES `covernote_history` WRITE;
/*!40000 ALTER TABLE `covernote_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `covernote_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_motor_keluar`
--

DROP TABLE IF EXISTS `detail_motor_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_motor_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_motor_keluar`
--

LOCK TABLES `detail_motor_keluar` WRITE;
/*!40000 ALTER TABLE `detail_motor_keluar` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_motor_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_motor_keluar_temp`
--

DROP TABLE IF EXISTS `detail_motor_keluar_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_motor_keluar_temp` (
  `id_detail_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `no_mesin` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_motor_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_motor_keluar_temp`
--

LOCK TABLES `detail_motor_keluar_temp` WRITE;
/*!40000 ALTER TABLE `detail_motor_keluar_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_motor_keluar_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_data`
--

DROP TABLE IF EXISTS `global_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `global_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_data` varchar(50) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `global_data_status` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_data`
--

LOCK TABLES `global_data` WRITE;
/*!40000 ALTER TABLE `global_data` DISABLE KEYS */;
INSERT INTO `global_data` VALUES (1,'aksesoris','aki','1',NULL,NULL,NULL,NULL,NULL,NULL),(2,'aksesoris','spion','1',NULL,NULL,NULL,NULL,NULL,NULL),(3,'aksesoris','helm','1',NULL,NULL,NULL,NULL,NULL,NULL),(4,'cpembelian','Cash','1',NULL,NULL,NULL,NULL,NULL,NULL),(5,'cpembelian','Kredit','1',NULL,NULL,NULL,NULL,NULL,NULL),(6,'aksesoris','toolkit','1',NULL,NULL,NULL,NULL,NULL,NULL),(7,'aksesoris','rumah_plat','1',NULL,NULL,NULL,NULL,NULL,NULL),(8,'aksesoris','jacket','1',NULL,NULL,NULL,NULL,NULL,NULL),(9,'aksesoris','jas_hujan','1',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `global_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_aksesoris`
--

DROP TABLE IF EXISTS `m_aksesoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_aksesoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_aksesoris` varchar(20) NOT NULL,
  `aksesoris` varchar(35) NOT NULL,
  `kategori` int(11) NOT NULL,
  `url_foto` text NOT NULL,
  `m_status` enum('1','2','3') NOT NULL DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_aksesoris`
--

LOCK TABLES `m_aksesoris` WRITE;
/*!40000 ALTER TABLE `m_aksesoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_aksesoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_biro_jasa`
--

DROP TABLE IF EXISTS `m_biro_jasa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_biro_jasa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_birojasa` varchar(50) DEFAULT NULL,
  `telepon_birojasa` varchar(20) DEFAULT NULL,
  `handphone_birojasa` varchar(20) DEFAULT NULL,
  `alamat_birojasa` text,
  `pic_birojasa` varchar(50) DEFAULT NULL,
  `pic_kontak_birojasa` varchar(20) DEFAULT NULL,
  `email_birojasa` varchar(50) DEFAULT NULL,
  `status_birojasa` int(11) DEFAULT '2',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_biro_jasa`
--

LOCK TABLES `m_biro_jasa` WRITE;
/*!40000 ALTER TABLE `m_biro_jasa` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_biro_jasa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_customer`
--

DROP TABLE IF EXISTS `m_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(30) NOT NULL DEFAULT '',
  `nama_customer` varchar(100) DEFAULT NULL,
  `tempat_lahir_customer` varchar(50) DEFAULT NULL,
  `tanggal_lahir_customer` date DEFAULT NULL,
  `kelamin_customer` enum('P','W') DEFAULT NULL,
  `alamat_customer` text,
  `telepon_customer` varchar(20) DEFAULT NULL,
  `handphone_customer` varchar(20) DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `wilayah` varchar(75) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `m_status` enum('1','2','3') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_customer`
--

LOCK TABLES `m_customer` WRITE;
/*!40000 ALTER TABLE `m_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_gudang`
--

DROP TABLE IF EXISTS `m_gudang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_gudang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_gudang` varchar(10) NOT NULL,
  `gudang` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `status_gudang` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`kd_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_gudang`
--

LOCK TABLES `m_gudang` WRITE;
/*!40000 ALTER TABLE `m_gudang` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_gudang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_jabatan`
--

DROP TABLE IF EXISTS `m_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `status_jabatan` enum('1','2','3') DEFAULT '1' COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_jabatan`
--

LOCK TABLES `m_jabatan` WRITE;
/*!40000 ALTER TABLE `m_jabatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_karyawan`
--

DROP TABLE IF EXISTS `m_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_karyawan` varchar(10) NOT NULL,
  `karyawan` varchar(75) DEFAULT NULL,
  `kd_jabatan_karyawan` varchar(10) DEFAULT NULL COMMENT 'kd_jabatan_karyawan didapat dari table m_jabatan',
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status_karyawan` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`kd_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_karyawan`
--

LOCK TABLES `m_karyawan` WRITE;
/*!40000 ALTER TABLE `m_karyawan` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_leasing`
--

DROP TABLE IF EXISTS `m_leasing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_leasing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_leasing` varchar(10) NOT NULL,
  `leasing` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pic` varchar(50) NOT NULL COMMENT 'PIC mengambil dari m_karyawan',
  `hp` varchar(20) DEFAULT NULL,
  `kalimat_kw_1` text,
  `kalimat_kw_2` text,
  `status_leasing` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`kd_leasing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_leasing`
--

LOCK TABLES `m_leasing` WRITE;
/*!40000 ALTER TABLE `m_leasing` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_leasing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_motor`
--

DROP TABLE IF EXISTS `m_motor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_motor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_motor` varchar(25) NOT NULL DEFAULT '',
  `nama_motor` varchar(50) DEFAULT 'unknow-name',
  `varian` varchar(50) DEFAULT 'unknown-varian',
  `merk` varchar(50) DEFAULT 'unknown-merk',
  `harga_otr` float DEFAULT '0',
  `nama_foto` text,
  `url_foto` text,
  `m_status` enum('1','2','3') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`tipe_motor`),
  UNIQUE KEY `unique_A` (`tipe_motor`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_motor`
--

LOCK TABLES `m_motor` WRITE;
/*!40000 ALTER TABLE `m_motor` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_motor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_owner`
--

DROP TABLE IF EXISTS `m_owner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_owner` (
  `id` int(11) NOT NULL DEFAULT '0' COMMENT 'ID harus nilainya 1',
  `company_name` varchar(100) DEFAULT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `owner_ktp` varchar(50) DEFAULT NULL,
  `owner_telp` varchar(20) DEFAULT NULL,
  `owner_handphone` varchar(20) DEFAULT NULL,
  `owner_email` varchar(50) DEFAULT NULL,
  `owner_address` text,
  `owner_npwp` varchar(50) DEFAULT NULL,
  `owner_jabatan` varchar(50) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_owner`
--

LOCK TABLES `m_owner` WRITE;
/*!40000 ALTER TABLE `m_owner` DISABLE KEYS */;
INSERT INTO `m_owner` VALUES (1,'PT.Mandala Kekar Abadi','Sanjaya, SE','1055031302660002','021535353535','08674521153','sanjaya.se@gmail.com','Jl. Raya Bekasi Timur No. 158, Cipinang - Jakarta Timur','000000000','Direktur Utama',NULL,6,NULL,NULL,'2017-02-05 10:28:23',NULL);
/*!40000 ALTER TABLE `m_owner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_supplier`
--

DROP TABLE IF EXISTS `m_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsupplier` varchar(15) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `pic` varchar(75) DEFAULT NULL,
  `hp` varchar(25) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_supplier`
--

LOCK TABLES `m_supplier` WRITE;
/*!40000 ALTER TABLE `m_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_supplier_old`
--

DROP TABLE IF EXISTS `m_supplier_old`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_supplier_old` (
  `kd_supplier` varchar(10) NOT NULL,
  `supplier` varchar(75) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_supplier` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`kd_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_supplier_old`
--

LOCK TABLES `m_supplier_old` WRITE;
/*!40000 ALTER TABLE `m_supplier_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_supplier_old` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,NULL,'-','Master','fa fa-home','javascript:void(0);',1,'1'),(2,NULL,'-','Transaksi','fa fa-edit','javascript:void(0);',2,'1'),(3,NULL,'-','Inventory','fa fa-tasks','javascript:void(0);',3,'1'),(4,NULL,'-','Leasing','fa fa-users','javascript:void(0);',4,'1'),(5,NULL,'-','Laporan','fa fa-envelope','javascript:void(0);',5,'1'),(23,1,'md_jabatan','Master Jabatan','fa fa-circle','master-jabatan',1,'1'),(24,1,'md_karyawan','Master Karyawan','fa fa-circle','master-karyawan',2,'1'),(26,1,'md_customer','Master Customer','fa fa-circle','master-customer',3,'1'),(27,1,'md_motor','Master Motor','fa fa-circle','master-motor',4,'1'),(28,1,'md_aksesoris','Master Aksesoris','fa fa-circle','master-aksesoris',5,'1'),(29,1,'md_gudang','Master Gudang','fa fa-circle','master-gudang',6,'1'),(30,1,'md_leasing','Master Leasing','fa fa-circle','master-leasing',7,'1'),(32,2,'t_penjualan','Penjualan','fa fa-circle','penjualan',1,'1'),(33,2,'pembayaran','Pembayaran','fa fa-circle','pembayaran',3,'1'),(34,3,'retur_motor','Retur Motor','fa fa-circle','return-motor',1,'1'),(36,1,'account','Users Management','fa fa-circle','user-management',9,'1'),(37,1,'md_birojasa','Master Birojasa','fa fa-circle','master-biro-jasa',8,'1'),(38,2,'t_kwitansi','Kwitansi DP','fa fa-circle','kwitansi-dp',2,'1'),(41,2,'t_pdi','PDI','fa fa-circle','pdi',3,'1'),(42,2,'t_stnk_bpkb','STNK & BPKB','fa fa-circle','stnk',4,'1'),(43,2,'t_void','Void','fa fa-circle','void',6,'1'),(44,2,'t_surat_jalan','Surat Jalan','fa fa-circle','surat-jalan',7,'1'),(45,3,'stok','Stok','fa fa-circle','stock',1,'1'),(46,3,'motor_terima','Penerimaan Motor','fa fa-circle','import-penerimaan-motor',2,'1'),(47,3,'input_penerimaan','Penerimaan Aksesoris','fa fa-circle','input-penerimaan-aksesoris',3,'1'),(48,3,'motor_keluar','Mutasi Motor','fa fa-circle','motor-keluar',4,'1'),(49,3,'barang_masuk','Motor Masuk','fa fa-circle','motor-masuk',5,'1'),(50,4,'leasing/cetak_kwitansi_leasing','Cetak Kwitansi','fa fa-circle','cetak-kwitansi-leasing',1,'1'),(51,4,'leasing/rekap_tagihan','Rekap Tagihan','fa fa-circle','rekap-tagihan',2,'1'),(52,4,'leasing_covernote','Surat Pernyataan','fa fa-circle','surat-pernyataan',3,'1'),(53,4,'pencairan_leasing','Pencairan Leasing','fa fa-circle','pencairan-leasing',4,'1'),(54,5,'laporan','Rpt.Penjualan','fa fa-circle','laporan-penjualan',1,'1'),(55,5,'laporan','Saldo','fa fa-circle','laporan-saldo',2,'1'),(56,5,'laporan','Print Stok','fa fa-circle','print-stok',3,'1'),(59,2,'t_terima_stnk','TT STNK & BPKB','fa fa-circle','terima-stnk',5,'1'),(60,1,'md_owner_info','Owner Setting','fa fa-circle','owner',10,'1');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motor_keluar`
--

DROP TABLE IF EXISTS `motor_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `kode_motor_keluar` varchar(30) DEFAULT NULL,
  `id_gudang_in` int(11) DEFAULT NULL,
  `id_gudang_out` int(11) DEFAULT NULL,
  `tgl_motor_keluar` date DEFAULT NULL,
  `kode_po_motor_keluar` varchar(20) DEFAULT NULL,
  `kode_do_motor_keluar` varchar(20) DEFAULT NULL,
  `pic_motor_keluar` varchar(30) DEFAULT NULL,
  `keterangan_motor_keluar` text,
  `status_motor_keluar` enum('1','2','3') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_motor_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motor_keluar`
--

LOCK TABLES `motor_keluar` WRITE;
/*!40000 ALTER TABLE `motor_keluar` DISABLE KEYS */;
/*!40000 ALTER TABLE `motor_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan_aksesoris`
--

DROP TABLE IF EXISTS `penerimaan_aksesoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan_aksesoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aksesoris_id` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `tanggal_terima` datetime DEFAULT NULL,
  `status_add_or_min` enum('1','2') DEFAULT '1' COMMENT '1=>tambah,2=>kurang',
  `keterangan` text,
  `gudang_id` int(11) DEFAULT NULL,
  `aksesoris_status` enum('1','2','3') DEFAULT '1',
  `by_system` enum('1','2') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan_aksesoris`
--

LOCK TABLES `penerimaan_aksesoris` WRITE;
/*!40000 ALTER TABLE `penerimaan_aksesoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `penerimaan_aksesoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan_motor`
--

DROP TABLE IF EXISTS `penerimaan_motor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan_motor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(15) DEFAULT NULL COMMENT 'mobil yang membawa motor',
  `tgl_sj` date DEFAULT NULL,
  `no_sj` varchar(15) DEFAULT NULL,
  `no_so` varchar(15) DEFAULT NULL,
  `nomesin` varchar(25) DEFAULT NULL,
  `norangka` varchar(25) DEFAULT NULL,
  `tipe` varchar(25) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `kdgudang` int(11) DEFAULT NULL,
  `tglupload` datetime DEFAULT NULL,
  `namafile` varchar(200) DEFAULT NULL,
  `m_status` enum('1','2','3') DEFAULT '1',
  `status_jual` enum('1','2','3','4') DEFAULT '1' COMMENT '1=belum terjual, 2=sudah terjual, 3=retur,4=inprocess',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan_motor`
--

LOCK TABLES `penerimaan_motor` WRITE;
/*!40000 ALTER TABLE `penerimaan_motor` DISABLE KEYS */;
/*!40000 ALTER TABLE `penerimaan_motor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan_motor_temp`
--

DROP TABLE IF EXISTS `penerimaan_motor_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan_motor_temp` (
  `id_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(15) DEFAULT NULL COMMENT 'mobil yang membawa motor',
  `tgl_sj` date DEFAULT NULL,
  `no_sj` varchar(15) DEFAULT NULL,
  `no_so` varchar(15) DEFAULT NULL,
  `nomesin` varchar(25) NOT NULL DEFAULT '',
  `norangka` varchar(25) NOT NULL DEFAULT '',
  `tipe` varchar(25) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `kdgudang` int(11) DEFAULT NULL,
  `tglupload` datetime DEFAULT NULL,
  `namafile` varchar(200) DEFAULT NULL,
  `m_status` enum('') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_temp`,`norangka`,`nomesin`),
  UNIQUE KEY `unique_A_B` (`nomesin`,`norangka`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan_motor_temp`
--

LOCK TABLES `penerimaan_motor_temp` WRITE;
/*!40000 ALTER TABLE `penerimaan_motor_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `penerimaan_motor_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_harga_motor`
--

DROP TABLE IF EXISTS `t_harga_motor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_harga_motor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noso` varchar(25) NOT NULL,
  `cara_pembelian` varchar(15) DEFAULT NULL,
  `marketing` varchar(75) DEFAULT NULL,
  `leasing` varchar(15) DEFAULT NULL,
  `dp_system` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `tagih` float DEFAULT NULL,
  `dp` float DEFAULT NULL,
  `sisa_hutang` float DEFAULT NULL,
  `dp_lunas` enum('1','2') DEFAULT '1' COMMENT '1=>belum lunas, 2=>lunas',
  `fee` float DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_harga_motor`
--

LOCK TABLES `t_harga_motor` WRITE;
/*!40000 ALTER TABLE `t_harga_motor` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_harga_motor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_kwitansi_diskon`
--

DROP TABLE IF EXISTS `t_kwitansi_diskon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_kwitansi_diskon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_kwitansi_diskon`
--

LOCK TABLES `t_kwitansi_diskon` WRITE;
/*!40000 ALTER TABLE `t_kwitansi_diskon` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_kwitansi_diskon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_kwitansi_fee`
--

DROP TABLE IF EXISTS `t_kwitansi_fee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_kwitansi_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `m_status` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_kwitansi_fee`
--

LOCK TABLES `t_kwitansi_fee` WRITE;
/*!40000 ALTER TABLE `t_kwitansi_fee` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_kwitansi_fee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_kwitansi_leasing`
--

DROP TABLE IF EXISTS `t_kwitansi_leasing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_kwitansi_leasing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `dp_system` float DEFAULT NULL,
  `tagih` int(10) DEFAULT NULL,
  `subsidi1` float DEFAULT NULL,
  `subsidi2` float DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `m_status` int(5) DEFAULT NULL,
  `sys_create_user` varchar(10) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_kwitansi_leasing`
--

LOCK TABLES `t_kwitansi_leasing` WRITE;
/*!40000 ALTER TABLE `t_kwitansi_leasing` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_kwitansi_leasing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pdi`
--

DROP TABLE IF EXISTS `t_pdi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pdi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdpdi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `nosj` varchar(25) DEFAULT NULL,
  `tgl_pdi` date DEFAULT NULL,
  `pic` varchar(25) DEFAULT NULL,
  `gudang_id` int(11) DEFAULT NULL,
  `sj_print_date` date DEFAULT NULL,
  `sj_print_status` enum('1','2') DEFAULT '1' COMMENT '1=>not printed, 2=>printed',
  `sj_print_user_id` int(11) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pdi`
--

LOCK TABLES `t_pdi` WRITE;
/*!40000 ALTER TABLE `t_pdi` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pdi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pdi_detail`
--

DROP TABLE IF EXISTS `t_pdi_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pdi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdi_id` int(11) DEFAULT NULL,
  `aksesoris_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pdi_detail`
--

LOCK TABLES `t_pdi_detail` WRITE;
/*!40000 ALTER TABLE `t_pdi_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pdi_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pembayaran`
--

DROP TABLE IF EXISTS `t_pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `transaksi` int(11) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `tgl_dp` date DEFAULT NULL,
  `m_status` int(2) DEFAULT '1',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pembayaran`
--

LOCK TABLES `t_pembayaran` WRITE;
/*!40000 ALTER TABLE `t_pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pencairan_leasing`
--

DROP TABLE IF EXISTS `t_pencairan_leasing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pencairan_leasing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `tgl_tagihan` datetime DEFAULT NULL,
  `cabang_leasing` varchar(1000) DEFAULT NULL,
  `tgl_pencairan` datetime DEFAULT NULL,
  `no_bukti_potongan` varchar(100) DEFAULT NULL,
  `tot_tagihan` double DEFAULT NULL,
  `tot_pencairan` double DEFAULT NULL,
  `sisa_tagihan` double DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pencairan_leasing`
--

LOCK TABLES `t_pencairan_leasing` WRITE;
/*!40000 ALTER TABLE `t_pencairan_leasing` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pencairan_leasing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pencairan_leasing_detail`
--

DROP TABLE IF EXISTS `t_pencairan_leasing_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pencairan_leasing_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `id_kwitansi` int(11) DEFAULT NULL,
  `tgl_pencairan` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pencairan_leasing_detail`
--

LOCK TABLES `t_pencairan_leasing_detail` WRITE;
/*!40000 ALTER TABLE `t_pencairan_leasing_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pencairan_leasing_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_penjualan`
--

DROP TABLE IF EXISTS `t_penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nosj` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `nokonsumen` varchar(25) DEFAULT NULL,
  `ktp` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nomsn` varchar(20) DEFAULT NULL,
  `warna_motor` varchar(100) DEFAULT NULL,
  `harga_otr` float DEFAULT NULL,
  `m_status` enum('1','2','3','4','5') DEFAULT NULL COMMENT '1=>active,2=>not active,3=>deleted,4=>void,5=>process_finish',
  `status_kwitansi` int(11) DEFAULT '0',
  `fee_print` enum('1','2') DEFAULT '1',
  `fee_print_user` int(11) DEFAULT NULL,
  `discount_print` enum('1','2') DEFAULT '1',
  `discount_print_user` int(11) DEFAULT NULL,
  `fee_print_date` datetime DEFAULT NULL,
  `discount_print_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noso` (`noso`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_penjualan`
--

LOCK TABLES `t_penjualan` WRITE;
/*!40000 ALTER TABLE `t_penjualan` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_rekap_tagihan`
--

DROP TABLE IF EXISTS `t_rekap_tagihan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_rekap_tagihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `tgl_tagihan` datetime DEFAULT NULL,
  `tot_tagihan` double DEFAULT NULL,
  `sisa_tagihan` double DEFAULT NULL,
  `kdleasing` varchar(100) DEFAULT NULL,
  `cabang_leasing` varchar(1000) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_rekap_tagihan`
--

LOCK TABLES `t_rekap_tagihan` WRITE;
/*!40000 ALTER TABLE `t_rekap_tagihan` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_rekap_tagihan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_rekap_tagihan_detail`
--

DROP TABLE IF EXISTS `t_rekap_tagihan_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_rekap_tagihan_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kwitansi` int(11) DEFAULT NULL,
  `no_kwitansi` varchar(100) DEFAULT NULL,
  `tgl_kwitansi` datetime DEFAULT NULL,
  `nomor_tagihan` varchar(100) DEFAULT NULL,
  `price_list` float DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_rekap_tagihan_detail`
--

LOCK TABLES `t_rekap_tagihan_detail` WRITE;
/*!40000 ALTER TABLE `t_rekap_tagihan_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_rekap_tagihan_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_stnk`
--

DROP TABLE IF EXISTS `t_stnk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_stnk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_so` varchar(30) DEFAULT NULL,
  `no_process` varchar(50) DEFAULT NULL,
  `stnk_process_date` date DEFAULT NULL,
  `stnk_estimate_date` date DEFAULT NULL,
  `bpkb_process_date` date DEFAULT NULL,
  `bpkb_estimate_date` date DEFAULT NULL,
  `stnk_status` int(2) DEFAULT '1',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime NOT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_stnk`
--

LOCK TABLES `t_stnk` WRITE;
/*!40000 ALTER TABLE `t_stnk` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_stnk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_stnk_bpkb`
--

DROP TABLE IF EXISTS `t_stnk_bpkb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_stnk_bpkb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noproses` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `tgl_proses_stnk` date DEFAULT NULL,
  `tgl_proses_bpkb` date DEFAULT NULL,
  `estimasi_stnk_selesai` date DEFAULT NULL,
  `estimasi_bpkb_selesai` date DEFAULT NULL,
  `ktp_stnk` varchar(35) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_stnk_bpkb`
--

LOCK TABLES `t_stnk_bpkb` WRITE;
/*!40000 ALTER TABLE `t_stnk_bpkb` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_stnk_bpkb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_stnk_customer`
--

DROP TABLE IF EXISTS `t_stnk_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_stnk_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_stnk_id` int(11) DEFAULT NULL,
  `t_stnk_ktp` varchar(30) DEFAULT NULL,
  `t_stnk_nama` varchar(50) DEFAULT NULL,
  `t_stnk_tempat_lahir` varchar(30) DEFAULT NULL,
  `t_stnk_tgl_lahir` date DEFAULT NULL,
  `t_stnk_jenis_kelamin` enum('P','W') DEFAULT 'P',
  `t_stnk_alamat` text,
  `t_stnk_rt` varchar(5) DEFAULT NULL,
  `t_stnk_rw` varchar(5) DEFAULT NULL,
  `t_stnk_wilayah` text,
  `t_stnk_kelurahan` varchar(100) DEFAULT NULL,
  `t_stnk_kecamatan` varchar(100) DEFAULT NULL,
  `t_stnk_telepon` varchar(20) DEFAULT NULL,
  `t_stnk_handphone` varchar(20) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_stnk_customer`
--

LOCK TABLES `t_stnk_customer` WRITE;
/*!40000 ALTER TABLE `t_stnk_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_stnk_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_terima_stnk`
--

DROP TABLE IF EXISTS `t_terima_stnk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_terima_stnk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `t_stnk_id` int(11) DEFAULT NULL,
  `birojasa_id` int(11) DEFAULT NULL,
  `t_terima_no_polisi` varchar(30) DEFAULT NULL,
  `t_terima_no_stnk` varchar(30) DEFAULT NULL,
  `t_terima_no_bpkb` varchar(30) DEFAULT NULL,
  `t_terima_tgl_stnk` date DEFAULT NULL,
  `t_terima_tgl_bpkb` date DEFAULT NULL,
  `t_terima_no_bon_1` varchar(20) DEFAULT NULL,
  `t_terima_no_bon_2` varchar(20) DEFAULT NULL,
  `t_terima_add_biaya_1` float DEFAULT NULL,
  `t_terima_add_biaya_2` float DEFAULT NULL,
  `t_terima_add_biaya_1_description` text,
  `t_terima_add_biaya_2_description` text,
  `t_terima_status` int(11) DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_stnk_id` (`t_stnk_id`),
  CONSTRAINT `t_stnk_id` FOREIGN KEY (`t_stnk_id`) REFERENCES `t_stnk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_terima_stnk`
--

LOCK TABLES `t_terima_stnk` WRITE;
/*!40000 ALTER TABLE `t_terima_stnk` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_terima_stnk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_void`
--

DROP TABLE IF EXISTS `t_void`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_void` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noso` varchar(255) DEFAULT NULL,
  `void_user_id` int(11) DEFAULT NULL,
  `void_description` text,
  `void_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noso` (`noso`),
  CONSTRAINT `noso` FOREIGN KEY (`noso`) REFERENCES `t_penjualan` (`noso`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_void`
--

LOCK TABLES `t_void` WRITE;
/*!40000 ALTER TABLE `t_void` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_void` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-05 19:44:18
