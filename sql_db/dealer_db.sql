/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-10-27 12:21:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `account`
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `path_foto` varchar(255) DEFAULT NULL,
  `access_menu` text,
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

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('6', 'inoy@sportix.com', 'inoy ajah', 'V4+12xYhTQoWUW/x1YiZa4X79eZXdW6yVcjCxo3KqBeulvzco+5rrCeMbF1SX/aM6csWWwJm/Eh7L7v11Ky8IA==', '909090909', 'supri170845@gmail.com', '64a020e0c210b5004d2ce50c21240d71.jpg', 'a:13:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"31\";s:4:\"slug\";s:15:\"master-supplier\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"34\";s:4:\"slug\";s:12:\"return-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"35\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}}', null, '1', null, '0000-00-00 00:00:00', '2016-10-24 10:31:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `account` VALUES ('7', 'sapta@gmail.com', 'Sapta', 'GsMxDWTIw95OSkBGV7MjIrA4muCNpIzN9Mm74/Z92hYzlyKeoHtM3Z5u2bAi/UVKTplMlUztEy4wXAI2aHnOYw==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:10:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"31\";s:4:\"slug\";s:15:\"master-supplier\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:9;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', null, '1', null, '0000-00-00 00:00:00', '2016-10-26 01:27:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', null, '-', 'Master', 'fa fa-home', 'javascript:void(0);', '1', '2');
INSERT INTO `menus` VALUES ('2', null, '-', 'Transaksi', 'fa fa-edit', 'javascript:void(0);', '2', '2');
INSERT INTO `menus` VALUES ('3', null, '-', 'Inventory', 'fa fa-tasks', 'javascript:void(0);', '3', '2');
INSERT INTO `menus` VALUES ('4', null, '-', 'Leasing', 'fa fa-users', 'javascript:void(0);', '4', '2');
INSERT INTO `menus` VALUES ('5', null, '-', 'Laporan', 'fa fa-envelope', 'javascript:void(0);', '5', '2');
INSERT INTO `menus` VALUES ('23', '1', 'md_jabatan', 'Master Jabatan', 'fa fa-circle', 'master-jabatan', '1', '2');
INSERT INTO `menus` VALUES ('24', '1', 'md_karyawan', 'Master Karyawan', 'fa fa-circle', 'master-karyawan', '2', '2');
INSERT INTO `menus` VALUES ('26', '1', 'md_customer', 'Master Customer', 'fa fa-circle', 'master-customer', '3', '2');
INSERT INTO `menus` VALUES ('27', '1', 'md_motor', 'Master Motor', 'fa fa-circle', 'master-motor', '4', '2');
INSERT INTO `menus` VALUES ('28', '1', 'md_aksesoris', 'Master Aksesoris', 'fa fa-circle', 'master-aksesoris', '5', '2');
INSERT INTO `menus` VALUES ('29', '1', 'md_gudang', 'Master Gudang', 'fa fa-circle', 'master-gudang', '6', '2');
INSERT INTO `menus` VALUES ('30', '1', 'md_leasing', 'Master Leasing', 'fa fa-circle', 'master-leasing', '7', '2');
INSERT INTO `menus` VALUES ('31', '1', 'md_supplier', 'Master Supplier', 'fa fa-circle', 'master-supplier', '8', '2');
INSERT INTO `menus` VALUES ('32', '2', 'penjualan', 'Penjualan', 'fa fa-circle', 'penjualan', '1', '2');
INSERT INTO `menus` VALUES ('33', '2', 'pembayaran', 'Pembayaran', 'fa fa-circle', 'pembayaran', '2', '2');
INSERT INTO `menus` VALUES ('34', '3', 'retur_motor', 'Retur Motor', 'fa fa-circle', 'return-motor', '1', '2');
INSERT INTO `menus` VALUES ('35', '3', 'pdi', 'PDI', 'fa fa-circle', 'pdi', '3', '2');
INSERT INTO `menus` VALUES ('36', '1', 'account', 'Users Management', 'fa fa-circle', 'user-management', '9', '2');

-- ----------------------------
-- Table structure for `m_gudang`
-- ----------------------------
DROP TABLE IF EXISTS `m_gudang`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_gudang
-- ----------------------------
INSERT INTO `m_gudang` VALUES ('1', 'WRH-0001', 'Gudang 123 f', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992', '0218889989', 'Inoy Yth', '1', '1', '1', null, '2016-10-11 22:22:48', '2016-10-20 00:11:31', null);
INSERT INTO `m_gudang` VALUES ('2', 'WRH-0002', 'Gudang 123x', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992rr', '021888998933', null, '2', '1', '1', '1', '2016-10-11 22:29:52', '2016-10-11 22:31:25', '2016-10-11 22:31:54');

-- ----------------------------
-- Table structure for `m_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `m_jabatan`;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_jabatan
-- ----------------------------
INSERT INTO `m_jabatan` VALUES ('4', 'Super Adminstrator', 'Super Admin', '1', null, '1', '1', null, '2016-10-09 08:36:05', '2016-10-24 11:55:27');
INSERT INTO `m_jabatan` VALUES ('6', 'Administrator', 'admin biasa', '1', null, '1', '1', null, '2016-10-09 08:31:53', '2016-10-24 11:37:48');
INSERT INTO `m_jabatan` VALUES ('7', 'Sales Marketing', 'Sales Marketing yang bertugas datang ke leasing', '1', '1', '1', '1', '2016-10-09 03:16:19', '2016-10-09 08:31:22', '2016-10-24 11:36:10');

-- ----------------------------
-- Table structure for `m_karyawan`
-- ----------------------------
DROP TABLE IF EXISTS `m_karyawan`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------
INSERT INTO `m_karyawan` VALUES ('1', 'EMP-0001', 'Inoy', '7', '2016-10-10', '2016-10-26', 'a.jpg', '1', null, null, '1', null, null, '2016-10-11 08:01:28');
INSERT INTO `m_karyawan` VALUES ('2', 'EMP-0002', 'Karyawan 1', '4', '2016-10-11', '2016-10-14', '2d583279ca69596f66fd094f98e829c4.jpg', '1', '1', '1', null, '2016-10-11 07:54:05', '2016-10-11 07:59:42', null);

-- ----------------------------
-- Table structure for `m_leasing`
-- ----------------------------
DROP TABLE IF EXISTS `m_leasing`;
CREATE TABLE `m_leasing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_leasing` varchar(10) NOT NULL,
  `leasing` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pic` int(11) NOT NULL COMMENT 'PIC mengambil dari m_karyawan',
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_leasing
-- ----------------------------
INSERT INTO `m_leasing` VALUES ('1', 'WO', 'WOW FINANCE', 'JL. Jagakarasa No.56 Jakarta Selatan', '021888998933', 'womfinance@gmail.com', '1', '087880008008', 'Kalimat KW 1', 'Kalimat KW 2', '1', '1', '1', null, '2016-10-12 07:08:43', '2016-10-26 02:04:00', null);
INSERT INTO `m_leasing` VALUES ('2', 'WOM', 'fsfd', 'dfsdf', '4333333333', 'supri170845@rocketmail.com', '1', '34343434909090', 'kdsdf', 'kjsldkf', '1', '1', null, null, '2016-10-26 02:00:28', null, null);

-- ----------------------------
-- Table structure for `m_motor`
-- ----------------------------
DROP TABLE IF EXISTS `m_motor`;
CREATE TABLE `m_motor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_motor` varchar(15) DEFAULT NULL,
  `nama_motor` varchar(50) DEFAULT NULL,
  `varian` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `harga_otr` float DEFAULT NULL,
  `nama_foto` text,
  `url_foto` text,
  `m_status` enum('1','2','3') DEFAULT NULL,
  `status_leasing` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_motor
-- ----------------------------
