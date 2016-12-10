/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-12-10 14:26:17
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
INSERT INTO `account` VALUES ('6', 'inoy@sportix.com', 'inoy', '7lJoHyJbQEFPmZvycvd1jj4oegRmeRMibzqBYezD9jWL0zIrxQps/pQFsibtrojiBgwTP4TPbQYILqxFDEbbOw==', '909090909', 'supri170845@gmail.com', 'assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg', 'a:33:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:15:\"master-supplier\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"39\";s:4:\"slug\";s:12:\"kwitansi-fee\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"40\";s:4:\"slug\";s:15:\"kwitansi-diskon\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"34\";s:4:\"slug\";s:12:\"return-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:4:\"stok\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:17:\"import-penerimaan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"35\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"49\";s:4:\"slug\";s:11:\"motor-masuk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:14:\"cetak-kwitansi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:26;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:27;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:28;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:29;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:30;a:3:{s:4:\"menu\";s:2:\"55\";s:4:\"slug\";s:13:\"laporan-saldo\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:31;a:3:{s:4:\"menu\";s:2:\"56\";s:4:\"slug\";s:10:\"print-stok\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:32;a:3:{s:4:\"menu\";s:2:\"57\";s:4:\"slug\";s:10:\"print-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', null, '6', null, '0000-00-00 00:00:00', '2016-11-27 10:34:07', '0000-00-00 00:00:00', '2016-12-10 14:12:07', '1');
INSERT INTO `account` VALUES ('7', 'sapta@gmail.com', 'Sapta', 'GsMxDWTIw95OSkBGV7MjIrA4muCNpIzN9Mm74/Z92hYzlyKeoHtM3Z5u2bAi/UVKTplMlUztEy4wXAI2aHnOYw==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:10:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"31\";s:4:\"slug\";s:15:\"master-supplier\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:9;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', null, '1', null, '0000-00-00 00:00:00', '2016-10-26 01:27:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- ----------------------------
-- Table structure for `detail_motor_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `detail_motor_keluar`;
CREATE TABLE `detail_motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_motor_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_motor_keluar
-- ----------------------------
INSERT INTO `detail_motor_keluar` VALUES ('1', '1', 'MSN4576466');
INSERT INTO `detail_motor_keluar` VALUES ('3', '1', 'MSN4576464');
INSERT INTO `detail_motor_keluar` VALUES ('13', '6', 'MSN4576469');
INSERT INTO `detail_motor_keluar` VALUES ('14', '6', 'MSN4576477');
INSERT INTO `detail_motor_keluar` VALUES ('15', '6', 'MSN4576474');

-- ----------------------------
-- Table structure for `detail_motor_keluar_temp`
-- ----------------------------
DROP TABLE IF EXISTS `detail_motor_keluar_temp`;
CREATE TABLE `detail_motor_keluar_temp` (
  `id_detail_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `no_mesin` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_motor_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_motor_keluar_temp
-- ----------------------------

-- ----------------------------
-- Table structure for `global_data`
-- ----------------------------
DROP TABLE IF EXISTS `global_data`;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of global_data
-- ----------------------------
INSERT INTO `global_data` VALUES ('1', 'aksesoris', 'aki', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('2', 'aksesoris', 'spion', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('3', 'aksesoris', 'helm', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('4', 'cpembelian', 'Cash', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('5', 'cpembelian', 'Kredit', '1', null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', null, '-', 'Master', 'fa fa-home', 'javascript:void(0);', '1', '1');
INSERT INTO `menus` VALUES ('2', null, '-', 'Transaksi', 'fa fa-edit', 'javascript:void(0);', '2', '1');
INSERT INTO `menus` VALUES ('3', null, '-', 'Inventory', 'fa fa-tasks', 'javascript:void(0);', '3', '1');
INSERT INTO `menus` VALUES ('4', null, '-', 'Leasing', 'fa fa-users', 'javascript:void(0);', '4', '1');
INSERT INTO `menus` VALUES ('5', null, '-', 'Laporan', 'fa fa-envelope', 'javascript:void(0);', '5', '1');
INSERT INTO `menus` VALUES ('23', '1', 'md_jabatan', 'Master Jabatan', 'fa fa-circle', 'master-jabatan', '1', '1');
INSERT INTO `menus` VALUES ('24', '1', 'md_karyawan', 'Master Karyawan', 'fa fa-circle', 'master-karyawan', '2', '1');
INSERT INTO `menus` VALUES ('26', '1', 'md_customer', 'Master Customer', 'fa fa-circle', 'master-customer', '3', '1');
INSERT INTO `menus` VALUES ('27', '1', 'md_motor', 'Master Motor', 'fa fa-circle', 'master-motor', '4', '1');
INSERT INTO `menus` VALUES ('28', '1', 'md_aksesoris', 'Master Aksesoris', 'fa fa-circle', 'master-aksesoris', '5', '1');
INSERT INTO `menus` VALUES ('29', '1', 'md_gudang', 'Master Gudang', 'fa fa-circle', 'master-gudang', '6', '1');
INSERT INTO `menus` VALUES ('30', '1', 'md_leasing', 'Master Leasing', 'fa fa-circle', 'master-leasing', '7', '1');
INSERT INTO `menus` VALUES ('32', '2', 'penjualan', 'Penjualan', 'fa fa-circle', 'penjualan', '0', '1');
INSERT INTO `menus` VALUES ('33', '2', 'pembayaran', 'Pembayaran', 'fa fa-circle', 'pembayaran', '3', '1');
INSERT INTO `menus` VALUES ('34', '3', 'retur_motor', 'Retur Motor', 'fa fa-circle', 'return-motor', '1', '1');
INSERT INTO `menus` VALUES ('35', '3', 'pdi', 'PDI', 'fa fa-circle', 'pdi', '3', '1');
INSERT INTO `menus` VALUES ('36', '1', 'account', 'Users Management', 'fa fa-circle', 'user-management', '9', '1');
INSERT INTO `menus` VALUES ('37', '1', 'md_supplier', 'Master Supplier', 'fa fa-circle', 'master-supplier', '8', '1');
INSERT INTO `menus` VALUES ('38', '2', 'kwitansi', 'Kwitansi DP', 'fa fa-circle', 'kwitansi-dp', '1', '1');
INSERT INTO `menus` VALUES ('39', '2', 'kwitansi', 'Kwitansi Fee', 'fa fa-circle', 'kwitansi-fee', '2', '1');
INSERT INTO `menus` VALUES ('40', '2', 'kwitansi', 'Kwitansi Diskon', 'fa fa-circle', 'kwitansi-diskon', '3', '1');
INSERT INTO `menus` VALUES ('41', '2', 'kwitansi', 'PDI', 'fa fa-circle', 'pdi', '4', '1');
INSERT INTO `menus` VALUES ('42', '2', 'kwitansi', 'STNK & BPKB', 'fa fa-circle', 'stnk', '5', '1');
INSERT INTO `menus` VALUES ('43', '2', 'kwitansi', 'Void', 'fa fa-circle', 'void', '6', '1');
INSERT INTO `menus` VALUES ('44', '2', 'kwitansi', 'Surat Jalan', 'fa fa-circle', 'surat-jalan', '7', '1');
INSERT INTO `menus` VALUES ('45', '3', 'stock', 'Stock', 'fa fa-circle', 'stock', '1', '1');
INSERT INTO `menus` VALUES ('46', '3', 'motor_terima', 'Penerimaan Motor', 'fa fa-circle', 'import-penerimaan-motor', '2', '1');
INSERT INTO `menus` VALUES ('47', '3', 'input_penerimaan', 'Penerimaan Aksesoris', 'fa fa-circle', 'input-penerimaan-aksesoris', '3', '1');
INSERT INTO `menus` VALUES ('48', '3', 'motor_keluar', 'Motor Keluar Masuk', 'fa fa-circle', 'motor-keluar', '4', '1');
INSERT INTO `menus` VALUES ('49', '3', 'barang_masuk', 'Motor Masuk', 'fa fa-circle', 'motor-masuk', '5', '2');
INSERT INTO `menus` VALUES ('50', '4', 'cetak_kwitansi', 'Cetak Kwitansi', 'fa fa-circle', 'cetak-kwitansi', '1', '1');
INSERT INTO `menus` VALUES ('51', '4', 'rekap_tagihan', 'Rekap Tagihan', 'fa fa-circle', 'rekap-tagihan', '2', '1');
INSERT INTO `menus` VALUES ('52', '4', 'surat_pernyataan', 'Surat Pernyataan', 'fa fa-circle', 'surat-pernyataan', '3', '1');
INSERT INTO `menus` VALUES ('53', '4', 'pencairan_leasing', 'Pencairan Leasing', 'fa fa-circle', 'pencairan-leasing', '4', '1');
INSERT INTO `menus` VALUES ('54', '5', 'laporan', 'Penjualan', 'fa fa-circle', 'laporan-penjualan', '1', '1');
INSERT INTO `menus` VALUES ('55', '5', 'laporan', 'Saldo', 'fa fa-circle', 'laporan-saldo', '2', '1');
INSERT INTO `menus` VALUES ('56', '5', 'laporan', 'Print Stok', 'fa fa-circle', 'print-stok', '3', '1');
INSERT INTO `menus` VALUES ('57', '5', 'laporan', 'STNK & BPKB', 'fa fa-circle', 'print-stnk', '4', '1');

-- ----------------------------
-- Table structure for `motor_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `motor_keluar`;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of motor_keluar
-- ----------------------------
INSERT INTO `motor_keluar` VALUES ('1', 'MKA-SJL/BK/2016/00001', '1', '2', '2016-11-30', '8768686xx', '989776564xx', 'inoyx', 'xxx', '1', '6', '6', null, '2016-11-28 22:26:59', '2016-11-28 23:26:07', null);
INSERT INTO `motor_keluar` VALUES ('6', 'MKA-SJL/BK/2016/00002', '2', '1', '2016-11-29', 'KJK80070707', 'DOPI898700', 'inoyx', '-', '1', '6', '6', null, '2016-11-29 12:56:32', '2016-11-29 13:02:41', null);

-- ----------------------------
-- Table structure for `m_aksesoris`
-- ----------------------------
DROP TABLE IF EXISTS `m_aksesoris`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_aksesoris
-- ----------------------------
INSERT INTO `m_aksesoris` VALUES ('1', 'AKS-20161029-0001', 'Aki GS Batere 220 V', '2', 'assets/images/aksesoris/65291c319eeaf8cc3164c0746af0ab80.png', '1', '6', '6', '6', '2016-10-29 11:57:08', '2016-10-29 12:32:04', '2016-10-29 12:23:08');
INSERT INTO `m_aksesoris` VALUES ('2', 'AKS-20161029-0002', 'Aki GS Batere 230 V', '2', 'assets/images/aksesoris/3f457ace3b1860ad92a2c9a53a7b0693.png', '1', '6', null, null, '2016-10-29 14:21:11', null, null);

-- ----------------------------
-- Table structure for `m_customer`
-- ----------------------------
DROP TABLE IF EXISTS `m_customer`;
CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(30) DEFAULT NULL,
  `nama_customer` varchar(100) DEFAULT NULL,
  `tempat_lahir_customer` varchar(50) DEFAULT NULL,
  `tanggal_lahir_customer` date DEFAULT NULL,
  `kelamin_customer` enum('P','W') DEFAULT NULL,
  `alamat_customer` text,
  `telepon_customer` varchar(20) DEFAULT NULL,
  `handphone_customer` varchar(20) DEFAULT NULL,
  `m_status` enum('1','2','3') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `wilayah` varchar(75) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_customer
-- ----------------------------
INSERT INTO `m_customer` VALUES ('1', '0909090909', 'Isyana', 'jakarta', '2016-10-22', 'W', 'jl. jagakarsa jakarta selatan', '0211234567', '087776666777', '1', null, '6', '6', null, '2016-10-29 15:03:31', '2016-10-29 15:03:49', null, null, null, null, null);
INSERT INTO `m_customer` VALUES ('2', '1234', 'Jarot', 'Surabaya', '2016-11-15', 'P', 'Jl. Damai', '021-31212121', '0897121212112', '1', '6', null, null, '2016-11-16 04:58:18', null, null, '09', '09', '0', 'Ponorogo', 'Sumpasem');

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
INSERT INTO `m_gudang` VALUES ('1', 'WRH-0001', 'Gudang 1', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992', '0218889989', 'Inoy Yth', '1', '1', '6', null, '2016-10-11 22:22:48', '2016-11-29 12:50:09', null);
INSERT INTO `m_gudang` VALUES ('2', 'WRH-0002', 'Gudang 2', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992rr', '021888998933', 'tukul', '1', '1', '6', '1', '2016-10-11 22:29:52', '2016-11-29 12:50:19', '2016-10-11 22:31:54');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------
INSERT INTO `m_karyawan` VALUES ('1', 'EMP-0001', 'Inoy', '4', '2016-10-10', '2017-12-13', 'assets/images/karyawan/56a1db0151a39a719963cfa193d9b448.jpg', '1', null, '6', '1', null, '2016-10-28 23:35:27', '2016-10-11 08:01:28');
INSERT INTO `m_karyawan` VALUES ('2', 'EMP-0002', 'Karyawan 1', '4', '2016-10-11', '2016-11-03', 'assets/images/karyawan/4a7930fd0cfce40ee43741b4d0c0321f.jpg', '1', '1', '6', null, '2016-10-11 07:54:05', '2016-10-28 23:35:43', null);
INSERT INTO `m_karyawan` VALUES ('7', 'EMP-0003', 'coba', '7', '2016-10-06', '2016-10-07', 'assets/images/karyawan/assets/images/karyawan/user_icon.png', '2', '6', '6', null, '2016-10-28 23:29:39', '2016-10-29 14:17:08', null);
INSERT INTO `m_karyawan` VALUES ('8', 'EMP-0008', 'coba', '4', '2016-10-28', '2017-09-19', 'assets/images/karyawan/user_icon.png', '1', '6', '6', null, '2016-10-28 23:36:07', '2016-10-28 23:36:16', null);

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
  `nomsn` varchar(50) DEFAULT NULL,
  `norangka` varchar(50) DEFAULT NULL,
  `tipe_motor` varchar(15) DEFAULT NULL,
  `nama_motor` varchar(50) DEFAULT NULL,
  `varian` varchar(50) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `tahun` char(4) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `harga_otr` float DEFAULT NULL,
  `nama_foto` text,
  `url_foto` text,
  `m_status` enum('1','2','3') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_motor
-- ----------------------------
INSERT INTO `m_motor` VALUES ('1', 'MSN0101010', 'RGK9009090', 'NC11D1D', 'Honda Spacy Helm-in Karburator', 'Matic', 'WH', '2016', 'Honda', '17500000', 'assets/images/motor/icon.png', '/assets/images//assets/images/motor/icon.png', '1', '1', '6', null, '2016-10-28 00:36:07', '2016-11-16 02:49:28', null);
INSERT INTO `m_motor` VALUES ('2', 'MSN0909090', 'RGK0989797', 'NC10D1D', 'Supra X 125', 'Manual Transmission', 'BLC', '2016', 'Honda', '16000000', 'assets/images/motor/icon.png', '/assets/images//assets/images/motor/icon.png', '1', '1', '6', '1', '2016-10-28 00:56:14', '2016-11-16 02:49:41', '2016-10-28 01:01:46');
INSERT INTO `m_motor` VALUES ('3', 'MSN7767686', 'RGK7676851', 'NC12D1D', 'jhjh', 'xx', null, null, 'Honda', '90000000', '', '/assets/images//assets/images/motor/motor_icon.png', '3', '6', '6', '6', '2016-10-28 23:45:50', '2016-10-28 23:48:44', '2016-10-28 23:48:49');
INSERT INTO `m_motor` VALUES ('4', 'RGK909090', 'MSN989898', 'NC13D1D', 'Karisma', 'Manual', 'RD', '2016', 'Honda', '20000000', 'assets/images/motor/131c97dd4d5f1a6cf6a6271cdb67bbe4.jpg', '/assets/images//assets/images/motor/131c97dd4d5f1a6cf6a6271cdb67bbe4.jpg', '1', '6', '6', null, '2016-11-01 13:11:36', '2016-11-16 02:49:57', null);

-- ----------------------------
-- Table structure for `m_supplier`
-- ----------------------------
DROP TABLE IF EXISTS `m_supplier`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_supplier
-- ----------------------------
INSERT INTO `m_supplier` VALUES ('1', 'spl001', 'Honda Sunter', 'Jl. Sunter Raya', '021-2134112', 'Sapta', '082123313010', '1', '2016-11-15 05:08:30', '2016-11-15 05:18:06', null, '6', '6', null);
INSERT INTO `m_supplier` VALUES ('2', 'spl002', 'Yamaha Kalibata', 'Jl. Kalibata Raya', '021-33167872', 'Supriyadi', '08312123122', '3', '2016-11-15 05:19:32', null, '2016-11-15 05:20:00', '6', null, '6');

-- ----------------------------
-- Table structure for `m_supplier_old`
-- ----------------------------
DROP TABLE IF EXISTS `m_supplier_old`;
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

-- ----------------------------
-- Records of m_supplier_old
-- ----------------------------

-- ----------------------------
-- Table structure for `penerimaan_aksesoris`
-- ----------------------------
DROP TABLE IF EXISTS `penerimaan_aksesoris`;
CREATE TABLE `penerimaan_aksesoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aksesoris_id` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `gudang_id` int(11) DEFAULT NULL,
  `aksesoris_status` enum('1','2','3') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_aksesoris
-- ----------------------------
INSERT INTO `penerimaan_aksesoris` VALUES ('1', '1', '6', '1', '3', '6', '6', '6', '2016-11-20 22:44:00', '2016-11-27 09:40:50', '2016-11-27 09:59:02');
INSERT INTO `penerimaan_aksesoris` VALUES ('2', '2', '34', '2', '3', '6', '6', '6', '2016-11-27 07:32:04', '2016-11-27 09:42:03', '2016-11-27 10:03:01');
INSERT INTO `penerimaan_aksesoris` VALUES ('3', '2', '45', '1', '1', '6', '6', null, '2016-11-27 10:03:20', '2016-12-10 14:20:20', null);

-- ----------------------------
-- Table structure for `penerimaan_motor`
-- ----------------------------
DROP TABLE IF EXISTS `penerimaan_motor`;
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
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_motor
-- ----------------------------
INSERT INTO `penerimaan_motor` VALUES ('42', 'B08080VND1', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576464', 'RK5446464', 'NC11D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('43', 'B08080VND2', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576465', 'RK5446464', 'NC10D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('44', 'B08080VND3', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576466', 'RK5446464', 'NC12D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('45', 'B08080VND4', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576467', 'RK5446464', 'NC13D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('46', 'B08080VND5', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576468', 'RK5446464', 'NC11D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('47', 'B08080VND6', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576469', 'RK5446464', 'NC10D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('48', 'B08080VND7', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576470', 'RK5446464', 'NC12D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('49', 'B08080VND8', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576471', 'RK5446464', 'NC13D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('50', 'B08080VND9', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576472', 'RK5446464', 'NC11D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('51', 'B08080VND10', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576473', 'RK5446464', 'NC10D1D', 'Merah', '2015', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('52', 'B08080VND11', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576474', 'RK5446464', 'NC12D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('53', 'B08080VND12', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576475', 'RK5446464', 'NC13D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('54', 'B08080VND13', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576476', 'RK5446464', 'NC11D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('55', 'B08080VND14', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576477', 'RK5446464', 'NC10D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('56', 'B08080VND15', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576478', 'RK5446464', 'NC12D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('57', 'B08080VND16', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576479', 'RK5446464', 'NC13D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('58', 'B08080VND17', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576480', 'RK5446464', 'NC11D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('59', 'B08080VND18', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576481', 'RK5446464', 'NC10D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('60', 'B08080VND19', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576482', 'RK5446464', 'NC12D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('61', 'B08080VND20', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576483', 'RK5446464', 'NC13D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('62', 'B08080VND21', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576484', 'RK5446464', 'NC11D1D', 'Merah', '2015', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('63', 'B08080VND22', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576485', 'RK5446464', 'NC10D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('64', 'B08080VND23', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576486', 'RK5446464', 'NC12D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('65', 'B08080VND24', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576487', 'RK5446464', 'NC13D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('66', 'B08080VND25', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576488', 'RK5446464', 'NC11D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('67', 'B08080VND26', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576489', 'RK5446464', 'NC10D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('68', 'B08080VND27', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576490', 'RK5446464', 'NC12D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('69', 'B08080VND28', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576491', 'RK5446464', 'NC13D1D', 'Merah', '2016', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('70', 'B08080VND29', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576492', 'RK5446464', 'NC11D1D', 'Merah', '2016', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('71', 'B08080VND30', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576493', 'RK5446464', 'NC10D1D', 'Merah', '2016', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('72', 'B08080VND31', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576494', 'RK5446464', 'NC12D1D', 'Merah', '2016', '1', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('73', 'B08080VND32', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576495', 'RK5446464', 'NC13D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('74', 'B08080VND33', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576496', 'RK5446464', 'NC11D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);
INSERT INTO `penerimaan_motor` VALUES ('75', 'B08080VND34', '2016-11-11', 'SJ00854545', 'SO5487545', 'MSN4576497', 'RK5446464', 'NC10D1D', 'Merah', '2016', '2', '2016-11-27 19:08:32', 'excel_penerimaan_motor40.xlsx', '1', '6', null, null, '2016-11-27 19:08:32', null, null);

-- ----------------------------
-- Table structure for `penerimaan_motor_temp`
-- ----------------------------
DROP TABLE IF EXISTS `penerimaan_motor_temp`;
CREATE TABLE `penerimaan_motor_temp` (
  `id_temp` int(11) NOT NULL AUTO_INCREMENT,
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
  `m_status` enum('') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_motor_temp
-- ----------------------------

-- ----------------------------
-- Table structure for `t_harga_motor`
-- ----------------------------
DROP TABLE IF EXISTS `t_harga_motor`;
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
  `fee` float DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_harga_motor
-- ----------------------------
INSERT INTO `t_harga_motor` VALUES ('1', 'SO/MKA-2016/XI/000001', 'Cash', 'Udin', null, null, '1000000', '16500000', '10000000', '6500000', '500000', '1', '2016-11-16 04:58:18', null, null, '6', null, null);

-- ----------------------------
-- Table structure for `t_kwitansi_diskon`
-- ----------------------------
DROP TABLE IF EXISTS `t_kwitansi_diskon`;
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

-- ----------------------------
-- Records of t_kwitansi_diskon
-- ----------------------------

-- ----------------------------
-- Table structure for `t_kwitansi_fee`
-- ----------------------------
DROP TABLE IF EXISTS `t_kwitansi_fee`;
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

-- ----------------------------
-- Records of t_kwitansi_fee
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pdi`
-- ----------------------------
DROP TABLE IF EXISTS `t_pdi`;
CREATE TABLE `t_pdi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdpdi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `tgl_pdi` date DEFAULT NULL,
  `pic` varchar(25) DEFAULT NULL,
  `list_ok` text,
  `list_empty` text,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pdi
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `t_pembayaran`;
CREATE TABLE `t_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `dp` double DEFAULT NULL,
  `transaksi` int(11) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `sisa_pembayaran` double DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for `t_penjualan`
-- ----------------------------
DROP TABLE IF EXISTS `t_penjualan`;
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
  `m_status` enum('1','2','3') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_penjualan
-- ----------------------------
INSERT INTO `t_penjualan` VALUES ('1', 'SJ/MKA-2016/X/000001', 'SO/MKA-2016/X/000001', null, '0909090909', null, null, null, null, null, null, null, null, '2016-10-30 23:28:19', null, null);
INSERT INTO `t_penjualan` VALUES ('2', null, 'SO/MKA-2016/XI/000001', null, '1234', '2016-11-15', 'MSN0101010', 'WH', '17.5', '1', '6', null, null, '2016-11-16 04:58:18', null, null);

-- ----------------------------
-- Table structure for `t_stnk_bpkb`
-- ----------------------------
DROP TABLE IF EXISTS `t_stnk_bpkb`;
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

-- ----------------------------
-- Records of t_stnk_bpkb
-- ----------------------------
