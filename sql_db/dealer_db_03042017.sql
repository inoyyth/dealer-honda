/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-04-03 21:53:09
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

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('6', 'inoy@sportix.com', 'inoy', 'TMKhFaajJOsUw.h~1lEmaN0.zNcaFYHaVmrHKmHREHvdUyVtBfIRKZeTTTC6zwekHlqF7FV3SV~7uHRPtiDGbg--', '909090909', 'supri170845@gmail.com', 'assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg', 'a:28:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"60\";s:4:\"slug\";s:5:\"owner\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:1;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:10;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:13;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:14;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:15;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:16;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:24;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:26;a:3:{s:4:\"menu\";s:2:\"55\";s:4:\"slug\";s:13:\"laporan-saldo\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:27;a:3:{s:4:\"menu\";s:2:\"56\";s:4:\"slug\";s:10:\"print-stok\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', '2', null, '6', null, '0000-00-00 00:00:00', '2017-04-03 23:58:19', '0000-00-00 00:00:00', '2017-04-04 00:05:43', '1');
INSERT INTO `account` VALUES ('7', 'sapta@gmail.com', 'Sapta', 'FPeGUTv9tqU2OK+ehIe1y8pL+LOh5ZmSomm7hY/ibO9N77b052+OaMFj/vNfzL298YcvFF/EAsBh8faI+QQvRA==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:27:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"34\";s:4:\"slug\";s:12:\"return-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"49\";s:4:\"slug\";s:11:\"motor-masuk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:26;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}}', '1', null, '6', null, '0000-00-00 00:00:00', '2017-03-12 01:16:44', '0000-00-00 00:00:00', '2017-03-12 01:13:19', '1');

-- ----------------------------
-- Table structure for `covernote_history`
-- ----------------------------
DROP TABLE IF EXISTS `covernote_history`;
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

-- ----------------------------
-- Records of covernote_history
-- ----------------------------

-- ----------------------------
-- Table structure for `detail_motor_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `detail_motor_keluar`;
CREATE TABLE `detail_motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_motor_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_motor_keluar
-- ----------------------------
INSERT INTO `detail_motor_keluar` VALUES ('1', '2', 'JBP1E1380986');
INSERT INTO `detail_motor_keluar` VALUES ('2', '2', 'JBP1E1384326');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of global_data
-- ----------------------------
INSERT INTO `global_data` VALUES ('1', 'aksesoris', 'aki', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('2', 'aksesoris', 'spion', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('3', 'aksesoris', 'helm', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('4', 'cpembelian', 'Cash', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('5', 'cpembelian', 'Kredit', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('6', 'aksesoris', 'toolkit', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('7', 'aksesoris', 'rumah_plat', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('8', 'aksesoris', 'jacket', '1', null, null, null, null, null, null);
INSERT INTO `global_data` VALUES ('9', 'aksesoris', 'jas_hujan', '1', null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

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
INSERT INTO `menus` VALUES ('32', '2', 't_penjualan', 'Penjualan', 'fa fa-circle', 'penjualan', '1', '1');
INSERT INTO `menus` VALUES ('33', '2', 'pembayaran', 'Pembayaran', 'fa fa-circle', 'pembayaran', '3', '1');
INSERT INTO `menus` VALUES ('34', '3', 'retur_motor', 'Retur Motor', 'fa fa-circle', 'return-motor', '1', '1');
INSERT INTO `menus` VALUES ('36', '1', 'account', 'Users Management', 'fa fa-circle', 'user-management', '9', '1');
INSERT INTO `menus` VALUES ('37', '1', 'md_birojasa', 'Master Birojasa', 'fa fa-circle', 'master-biro-jasa', '8', '1');
INSERT INTO `menus` VALUES ('38', '2', 't_kwitansi', 'Kwitansi DP', 'fa fa-circle', 'kwitansi-dp', '2', '1');
INSERT INTO `menus` VALUES ('41', '2', 't_pdi', 'PDI', 'fa fa-circle', 'pdi', '3', '1');
INSERT INTO `menus` VALUES ('42', '2', 't_stnk_bpkb', 'STNK & BPKB', 'fa fa-circle', 'stnk', '4', '1');
INSERT INTO `menus` VALUES ('43', '2', 't_void', 'Void', 'fa fa-circle', 'void', '6', '1');
INSERT INTO `menus` VALUES ('44', '2', 't_surat_jalan', 'Surat Jalan', 'fa fa-circle', 'surat-jalan', '7', '1');
INSERT INTO `menus` VALUES ('45', '3', 'stok', 'Stok', 'fa fa-circle', 'stock', '1', '1');
INSERT INTO `menus` VALUES ('46', '3', 'motor_terima', 'Penerimaan Motor', 'fa fa-circle', 'import-penerimaan-motor', '2', '1');
INSERT INTO `menus` VALUES ('47', '3', 'input_penerimaan', 'Penerimaan Aksesoris', 'fa fa-circle', 'input-penerimaan-aksesoris', '3', '1');
INSERT INTO `menus` VALUES ('48', '3', 'motor_keluar', 'Mutasi Motor', 'fa fa-circle', 'motor-keluar', '4', '1');
INSERT INTO `menus` VALUES ('49', '3', 'barang_masuk', 'Motor Masuk', 'fa fa-circle', 'motor-masuk', '5', '1');
INSERT INTO `menus` VALUES ('50', '4', 'leasing/cetak_kwitansi_leasing', 'Cetak Kwitansi', 'fa fa-circle', 'cetak-kwitansi-leasing', '1', '1');
INSERT INTO `menus` VALUES ('51', '4', 'leasing/rekap_tagihan', 'Rekap Tagihan', 'fa fa-circle', 'rekap-tagihan', '2', '1');
INSERT INTO `menus` VALUES ('52', '4', 'leasing_covernote', 'Surat Pernyataan', 'fa fa-circle', 'surat-pernyataan', '3', '1');
INSERT INTO `menus` VALUES ('53', '4', 'pencairan_leasing', 'Pencairan Leasing', 'fa fa-circle', 'pencairan-leasing', '4', '1');
INSERT INTO `menus` VALUES ('54', '5', 'laporan', 'Rpt.Penjualan', 'fa fa-circle', 'laporan-penjualan', '1', '1');
INSERT INTO `menus` VALUES ('55', '5', 'laporan', 'Saldo', 'fa fa-circle', 'laporan-saldo', '2', '1');
INSERT INTO `menus` VALUES ('56', '5', 'laporan', 'Print Stok', 'fa fa-circle', 'print-stok', '3', '1');
INSERT INTO `menus` VALUES ('59', '2', 't_terima_stnk', 'TT STNK & BPKB', 'fa fa-circle', 'terima-stnk', '5', '1');
INSERT INTO `menus` VALUES ('60', '1', 'md_owner_info', 'Owner Setting', 'fa fa-circle', 'owner', '10', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of motor_keluar
-- ----------------------------
INSERT INTO `motor_keluar` VALUES ('1', 'MKA-SJL/BK/2016/00001', '1', '2', '2016-11-30', '8768686xx', '989776564xx', 'inoyx', 'xxx', '3', '6', '6', '6', '2016-11-28 22:26:59', '2016-12-24 22:24:09', '2017-02-03 23:31:41');
INSERT INTO `motor_keluar` VALUES ('2', 'MKA-SJL/BK/2017/00001', '2', '1', '2017-02-04', 'PO1', 'DO1', 'Otong', 'untuk barang display', '1', '6', null, null, '2017-02-03 23:41:09', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_aksesoris
-- ----------------------------
INSERT INTO `m_aksesoris` VALUES ('1', 'AKS-20161029-0001', '12N5-3B', '1', 'assets/images/aksesoris/c88961606f15cbce3f8881794dbdd2cb.jpg', '1', '6', '6', '6', '2016-10-29 11:57:08', '2017-01-01 09:12:43', '2016-10-29 12:23:08');
INSERT INTO `m_aksesoris` VALUES ('2', 'AKS-20161029-0002', 'GN4-2A-2', '1', 'assets/images/aksesoris/965a2344fe24ea698d11a40bb2e40b6c.png', '1', '6', '6', null, '2016-10-29 14:21:11', '2017-01-01 12:24:31', null);
INSERT INTO `m_aksesoris` VALUES ('3', 'AKS-20161224-0003', 'GN4A-4D', '1', 'assets/images/aksesoris/ca14aa7d139b33b011547228bbe50ca1.jpg', '1', '6', '6', null, '2016-12-24 07:26:33', '2017-01-01 09:13:02', null);
INSERT INTO `m_aksesoris` VALUES ('4', 'AKS-20161224-0004', 'GN4-2A', '1', 'assets/images/aksesoris/ecba2c73ca4c7a2d084d1c23afbca7cb.jpg', '1', '6', '6', null, '2016-12-24 07:26:40', '2017-01-01 09:13:14', null);
INSERT INTO `m_aksesoris` VALUES ('5', 'AKS-20161224-0005', 'RS SPION', '2', 'assets/images/aksesoris/1fad22e24e2d6333ce0528b93d6abd2a.jpg', '1', '6', '6', null, '2016-12-24 07:26:47', '2017-01-01 09:16:25', null);
INSERT INTO `m_aksesoris` VALUES ('6', 'AKS-20161224-0006', 'MPX Spion', '2', 'assets/images/aksesoris/457e7f556d1ff83e1536767009070e5d.jpg', '1', '6', '6', null, '2016-12-24 07:26:55', '2017-01-01 09:16:15', null);
INSERT INTO `m_aksesoris` VALUES ('7', 'AKS-20161224-0007', 'TRX-R Full Face', '3', 'assets/images/aksesoris/4511bdb796345ee41e510b4f0a59eef0.jpg', '1', '6', '6', null, '2016-12-24 07:27:01', '2017-01-01 09:18:58', null);
INSERT INTO `m_aksesoris` VALUES ('8', 'AKS-20161224-0008', 'TRX-R Half Face', '3', 'assets/images/aksesoris/090c5da0303fa6db8b02bc3246abf526.jpg', '1', '6', '6', null, '2016-12-24 07:27:06', '2017-01-01 09:19:18', null);
INSERT INTO `m_aksesoris` VALUES ('9', 'AKS-20161224-0009', 'Toolkit STD', '6', 'assets/images/aksesoris/3d0b050d48b201ee695147a0a971d769.jpg', '1', '6', '6', null, '2016-12-24 07:27:13', '2017-01-01 09:21:15', null);
INSERT INTO `m_aksesoris` VALUES ('10', 'AKS-20161224-0010', 'Toolkit ADV', '6', 'assets/images/aksesoris/ede6f0d03a436ddf8812832a6eca8f99.jpg', '1', '6', '6', null, '2016-12-24 07:27:20', '2017-01-01 09:21:41', null);
INSERT INTO `m_aksesoris` VALUES ('11', 'AKS-20161224-0011', 'House Plat STD', '7', 'assets/images/aksesoris/icon.png', '1', '6', '6', null, '2016-12-24 07:27:31', '2017-01-01 09:22:29', null);
INSERT INTO `m_aksesoris` VALUES ('12', '123', 'House Plat ADV', '7', 'assets/images/aksesoris/icon.png', '1', '6', '6', null, '2016-12-24 11:41:31', '2017-01-01 09:22:55', null);
INSERT INTO `m_aksesoris` VALUES ('13', 'AKS-20161224-0012', 'JKT-STD', '8', 'assets/images/aksesoris/8b63d0a164be59fa897935a17ad39a78.jpg', '1', '6', null, null, '2017-01-01 09:25:03', null, null);
INSERT INTO `m_aksesoris` VALUES ('14', 'AKS-20161224-0013', 'JKT-ADV', '8', 'assets/images/aksesoris/ec9e1a6cb4d1079b498773289424e8ac.jpg', '1', '6', null, null, '2017-01-01 09:25:35', null, null);
INSERT INTO `m_aksesoris` VALUES ('15', 'AKS-20161224-0014', 'JS-STD', '9', 'assets/images/aksesoris/7c1d0f9b807d6ca02b35440b6397fe4a.jpg', '1', '6', null, null, '2017-01-01 09:27:13', null, null);
INSERT INTO `m_aksesoris` VALUES ('16', 'AKS-20161224-0015', 'JS-ADV', '9', 'assets/images/aksesoris/999924d765c46ea8783d59292ffcd99b.jpg', '1', '6', null, null, '2017-01-01 09:27:44', null, null);

-- ----------------------------
-- Table structure for `m_biro_jasa`
-- ----------------------------
DROP TABLE IF EXISTS `m_biro_jasa`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_biro_jasa
-- ----------------------------
INSERT INTO `m_biro_jasa` VALUES ('1', 'PT.BIRO SATU', '0214563125', '087549464644', 'Jl. Raden Inten 10', 'Oki', '08754546413', 'birosatu@gmail.com', '1', null, '2017-01-21 07:18:52', '2017-01-21 07:20:07', null, '6', '6');
INSERT INTO `m_biro_jasa` VALUES ('2', 'PT.BIRO DUA', '0154513454', '08752421212', 'Jl. Kemayoran 10 Jakarta Selatan', 'Yano', '08786442245', 'birodua@gmail.com', '1', null, '2017-01-21 07:19:45', null, null, '6', null);
INSERT INTO `m_biro_jasa` VALUES ('3', 'A Biro Jasa', '02187946464', '08756646464', 'Jl. Mangar Selatan Jakarta Pusat', 'Helmi', '08754546413', null, '1', '2017-01-21 07:08:51', null, null, '6', null, null);

-- ----------------------------
-- Table structure for `m_customer`
-- ----------------------------
DROP TABLE IF EXISTS `m_customer`;
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_customer
-- ----------------------------
INSERT INTO `m_customer` VALUES ('11', '1234', 'Inoy YthXX', 'Jakarta XXX', '2016-12-27', 'P', 'Jl. STM', '021-31212121', '0877889911369', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '1', null, null, null, null, null, null);

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
INSERT INTO `m_gudang` VALUES ('2', 'WRH-0002', 'Gudang 123x', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992rr', '021888998933', 'tukul', '1', '1', '6', '1', '2016-10-11 22:29:52', '2016-11-27 06:16:13', '2016-10-11 22:31:54');

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
INSERT INTO `m_jabatan` VALUES ('4', 'Super Administrator', 'Super Admin', '1', null, '1', '1', null, '2016-10-09 08:36:05', '2016-10-24 11:55:27');
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
INSERT INTO `m_karyawan` VALUES ('8', 'EMP-0008', 'coba', '4', '2016-10-28', '2017-09-19', 'assets/images/karyawan/user_icon.png', '3', '6', '6', '6', '2016-10-28 23:36:07', '2016-10-28 23:36:16', '2017-03-31 07:56:28');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_leasing
-- ----------------------------
INSERT INTO `m_leasing` VALUES ('1', 'WO', 'WOW FINANCE', 'JL. Jagakarasa No.56 Jakarta Selatan', '021888998933', 'womfinance@gmail.com', 'Inoy', '087880008008', 'Kalimat KW 1', 'Kalimat KW 2', '1', '1', '1', null, '2016-10-12 07:08:43', '2016-10-26 02:04:00', null);
INSERT INTO `m_leasing` VALUES ('2', 'WOM', 'fsfd', 'dfsdf', '4333333333', 'supri170845@rocketmail.com', 'Sapta', '34343434909090', 'kdsdf', 'kjsldkf', '1', '1', null, null, '2016-10-26 02:00:28', null, null);

-- ----------------------------
-- Table structure for `m_motor`
-- ----------------------------
DROP TABLE IF EXISTS `m_motor`;
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
) ENGINE=InnoDB AUTO_INCREMENT=894 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_motor
-- ----------------------------
INSERT INTO `m_motor` VALUES ('1', 'AFX12U08', 'SupraX 125 D', 'Manual', 'Honda', '15000000', 'assets/images/motor/7875eb7c85881c95c21b8995f0de1e9a.jpg', '/assets/images//assets/images/motor/7875eb7c85881c95c21b8995f0de1e9a.jpg', '1', null, '6', null, null, '2016-12-26 22:52:57', null);
INSERT INTO `m_motor` VALUES ('3', 'AFX12U8A', 'Spacy', 'Automatic', 'Honda', '16000000', 'assets/images/motor/a390e0181be2d62aee6c3aef26f2575d.jpg', '/assets/images//assets/images/motor/a390e0181be2d62aee6c3aef26f2575d.jpg', '1', null, '6', null, null, '2016-12-26 22:53:32', null);
INSERT INTO `m_motor` VALUES ('5', 'C1CN16M2', 'Supra X 125', 'Manual', 'Honda', '14500000', 'assets/images/motor/9a482b5e17d0940d026120082284d945.jpg', '/assets/images//assets/images/motor/9a482b5e17d0940d026120082284d945.jpg', '1', null, '6', null, null, '2016-12-26 22:55:08', null);
INSERT INTO `m_motor` VALUES ('7', 'C1CN16MS', 'Vario 110', 'Automatic', 'Honda', '15600000', 'assets/images/motor/54a634dc98176830475eb278f29135c1.jpg', '/assets/images//assets/images/motor/54a634dc98176830475eb278f29135c1.jpg', '1', null, '6', null, null, '2016-12-26 22:55:49', null);
INSERT INTO `m_motor` VALUES ('8', 'D1A2N8MA', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('9', 'EF02N12M', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('16', 'K1H2N4LM', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('22', 'NF12ACF3', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('24', 'NFT13C01', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('74', 'GL15BCF2', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('79', 'NC1D1CF2', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('80', 'X1B2N7L0', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('94', 'X1B2N4LA', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('102', 'YG2N15L1', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('117', 'GL15C21A', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('118', 'K1H2N4L0', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('121', 'NFT13C03', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('127', 'YG2N2LAA', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('128', 'T5E02RL0', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('138', 'YG2N2L1A', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('149', 'D1A2N18M', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('150', 'D1A2N19M', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('151', 'D1A2N9MA', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('158', 'YG02N2L1', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('164', 'EF02N11S', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('174', 'X1B2N4LO', 'SupraX 125 D', 'Bebek', 'Honda', '14000000', 'assets/images/motor/cf19ce1d4adbd1f03a206d077745183a.jpg', '/assets/images//assets/images/motor/cf19ce1d4adbd1f03a206d077745183a.jpg', '1', null, '6', null, null, '2016-12-24 22:21:17', null);
INSERT INTO `m_motor` VALUES ('182', 'Y3B2R17L', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('263', 'H5C2R2MA', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('392', 'K1H2N14S', 'Vario 125', 'Matic', 'Honda', '13500000', 'assets/images/motor/icon.png', '/assets/images//assets/images/motor/icon.png', '1', null, '6', null, null, '2016-12-24 22:20:20', null);
INSERT INTO `m_motor` VALUES ('606', 'H5C2R2M1', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('641', 'EF02N12S', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('790', 'H5C2R2MB', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('800', 'AFP12W08', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);
INSERT INTO `m_motor` VALUES ('893', 'NFT13C02', 'unknow-name', 'unknown-varian', 'unknown-merk', '0', null, null, '1', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `m_owner`
-- ----------------------------
DROP TABLE IF EXISTS `m_owner`;
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

-- ----------------------------
-- Records of m_owner
-- ----------------------------
INSERT INTO `m_owner` VALUES ('1', 'PT.Mandala Kekar Abadi', 'Sanjaya, SE', '1055031302660002', '021535353535', '08674521153', 'sanjaya.se@gmail.com', 'Jl. Raya Bekasi Timur No. 158, Cipinang - Jakarta Timur', '000000000', 'Direktur Utama', null, '6', null, null, '2017-02-05 10:28:23', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_aksesoris
-- ----------------------------
INSERT INTO `penerimaan_aksesoris` VALUES ('8', '1', '300', '2017-01-01 01:29:13', '1', 'barang baru terima', '1', '1', '1', '6', null, null, '2017-01-01 01:29:13', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('9', '1', '100', '2017-01-01 01:29:30', '1', 'barang baru terima', '1', '1', '1', '6', null, null, '2017-01-01 01:29:30', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('11', '2', '100', '2017-01-01 09:30:41', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 09:30:41', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('12', '5', '200', '2017-01-01 21:19:31', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:19:31', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('13', '6', '100', '2017-01-01 21:19:47', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:19:47', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('14', '7', '100', '2017-01-01 21:29:25', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:29:25', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('15', '8', '100', '2017-01-01 21:29:42', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:29:42', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('16', '9', '100', '2017-01-01 21:29:53', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:29:53', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('17', '10', '100', '2017-01-01 21:30:12', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:30:12', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('18', '11', '100', '2017-01-01 21:30:33', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:30:33', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('19', '12', '100', '2017-01-01 21:30:46', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:30:46', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('20', '13', '100', '2017-01-01 21:31:01', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:31:01', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('21', '14', '100', '2017-01-01 21:31:12', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:31:12', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('22', '15', '100', '2017-01-01 21:31:27', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:31:27', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('23', '16', '100', '2017-01-01 21:31:39', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:31:39', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('24', '8', '100', '2017-01-01 21:45:23', '2', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:45:23', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('26', '8', '100', '2017-01-01 21:46:51', '1', '-', '1', '1', '1', '6', null, null, '2017-01-01 21:46:51', null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('62', '1', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('63', '5', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('64', '9', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('65', '7', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('66', '11', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('67', '13', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('68', '15', '1', '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('69', '1', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('70', '5', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('71', '9', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('72', '7', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('73', '11', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('74', '13', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('75', '15', '1', '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('77', '5', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('78', '9', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('79', '7', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('80', '11', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('81', '13', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('82', '15', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('84', '5', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('85', '9', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('86', '7', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('87', '11', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('88', '13', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('89', '15', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('90', '2', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('91', '5', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('92', '9', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('93', '7', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('94', '11', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('95', '13', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('96', '15', '1', '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('97', '2', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('98', '5', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('99', '9', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('100', '7', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('101', '11', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('102', '13', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('103', '15', '1', '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('104', '2', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('105', '5', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('106', '9', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('107', '7', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('108', '11', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('109', '13', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('110', '15', '1', '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('111', '2', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('112', '5', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('113', '9', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('114', '7', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('115', '11', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('116', '13', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('117', '15', '1', '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('119', '5', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('120', '9', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('121', '7', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('122', '11', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('123', '13', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('124', '15', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('126', '5', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('127', '9', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('128', '7', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('129', '11', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('130', '13', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('131', '15', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('132', '1', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('134', '9', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('135', '7', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('136', '11', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('137', '13', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('138', '15', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('139', '1', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('141', '9', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('142', '7', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('143', '11', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('144', '13', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('145', '15', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('146', '1', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('147', '5', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('148', '9', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('149', '7', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('150', '11', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('151', '13', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('152', '15', '1', '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('153', '1', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('154', '5', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('155', '9', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('156', '7', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('157', '11', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('158', '13', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('159', '15', '1', '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('160', '1', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('161', '5', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('162', '9', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('163', '7', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('164', '11', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('165', '13', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('166', '15', '1', '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('167', '1', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('168', '5', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('169', '10', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('170', '7', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('171', '11', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('172', '14', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('173', '16', '1', '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('174', '1', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('175', '5', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('176', '9', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('177', '7', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('178', '11', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('179', '13', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('180', '15', '1', '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('181', '1', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('182', '6', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('183', '9', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('184', '7', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('185', '12', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('186', '13', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('187', '15', '1', '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('188', '1', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('189', '5', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('190', '9', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('191', '7', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('192', '11', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('193', '13', '1', '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('194', '15', '1', '2017-02-11 13:27:09', '2', 'Update By System For PDI-2017/II/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('195', '1', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('196', '6', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('197', '9', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('198', '7', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('199', '11', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('200', '13', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('201', '15', '1', '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('202', '1', '1', '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('203', '5', '1', '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('204', '9', '1', '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('205', '8', '1', '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('207', '13', '1', '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('209', '1', '1', '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('210', '5', '1', '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('211', '9', '1', '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('212', '8', '1', '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('214', '13', '1', '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('216', '1', '1', '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('217', '5', '1', '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('218', '9', '1', '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('219', '8', '1', '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('221', '13', '1', '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('223', '1', '1', '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('224', '5', '1', '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('225', '9', '1', '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('226', '8', '1', '2017-02-18 14:45:24', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('228', '13', '1', '2017-02-18 14:45:24', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('230', '1', '1', '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('231', '5', '1', '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('232', '9', '1', '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('233', '8', '1', '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('235', '13', '1', '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('237', '1', '1', '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('238', '5', '1', '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('239', '9', '1', '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('240', '8', '1', '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('242', '13', '1', '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('244', '1', '1', '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('245', '5', '1', '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('246', '9', '1', '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('247', '8', '1', '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('249', '13', '1', '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('251', '3', '8', '2017-03-04 09:51:23', '1', '-', '2', '1', '1', '6', null, null, '2017-03-04 09:51:23', null, null);

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
  `status_jual` enum('1','2','3','4') DEFAULT '1' COMMENT '1=belum terjual, 2=sudah terjual, 3=retur,4=inprocess',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_motor
-- ----------------------------
INSERT INTO `penerimaan_motor` VALUES ('1', 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380984', 'JBP112GK383415', 'AFX12U08', 'MH', '2016', '1', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', null, '6', '6', null, '2016-12-26 22:50:56', '2017-02-18 14:21:00', null);
INSERT INTO `penerimaan_motor` VALUES ('2', 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380986', 'JBP113GK383410', 'AFX12U08', 'MH', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '4', '6', '6', null, '2016-12-26 22:50:56', '2017-02-18 17:37:53', null);
INSERT INTO `penerimaan_motor` VALUES ('3', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384326', 'JBP110GK386121', 'AFX12U8A', 'BK', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2017-02-11 14:29:49', null);
INSERT INTO `penerimaan_motor` VALUES ('4', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384317', 'JBP11XGK386157', 'AFX12U8A', 'BK', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2017-02-11 14:28:07', null);
INSERT INTO `penerimaan_motor` VALUES ('5', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFW1E1362372', 'JFW111GK363347', 'C1CN16M2', 'MS', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '1', '6', '6', null, '2016-12-26 22:50:56', '2017-01-28 11:48:17', null);
INSERT INTO `penerimaan_motor` VALUES ('6', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFW1E1362327', 'JFW119GK362995', 'C1CN16M2', 'MS', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '1', '6', '6', null, '2016-12-26 22:50:56', '2016-12-31 10:47:44', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_harga_motor
-- ----------------------------
INSERT INTO `t_harga_motor` VALUES ('1', 'SO/MKA-2017/II/000001', 'Cash', 'Inoy', '', '15000000', '200000', '14800000', '5000000', '9800000', '1', '200000', '1', '2017-02-11 13:17:44', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('2', 'SO/MKA-2017/II/000002', 'Cash', 'Surti', '', '16000000', '1000000', '15000000', '5000000', '10000000', '2', '500000', '1', '2017-02-11 14:28:06', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('3', 'SO/MKA-2017/II/000003', 'Kredit', 'Sudirman', 'WO', '5000000', '500000', '4500000', '2750000', '1750000', '2', '750000', '1', '2017-02-11 14:29:49', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('4', 'SO/MKA-2017/II/000004', 'Kredit', 'Sudirman', 'WO', '5000000', '1000000', '4000000', '1000000', '3000000', '1', '300000', '1', '2017-02-18 14:21:00', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('5', 'SO/MKA-2017/II/000005', 'Cash', 'salim', '', '15000000', '1000000', '14000000', '5000000', '9000000', '1', '500000', '1', '2017-02-18 17:37:53', null, null, '6', null, null);

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
-- Table structure for `t_kwitansi_leasing`
-- ----------------------------
DROP TABLE IF EXISTS `t_kwitansi_leasing`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_kwitansi_leasing
-- ----------------------------
INSERT INTO `t_kwitansi_leasing` VALUES ('1', 'KWT/MKA/FIF/II/000001', 'SO/MKA-2017/II/000003', '5000000', '11000000', '100000', '0', '1', '1', '6', '2017-02-11 14:43:28');
INSERT INTO `t_kwitansi_leasing` VALUES ('2', 'KWT/MKA/FIF/IV/000002', 'SO/MKA-2017/II/000004', '5000000', '10000000', '100000', '0', '1', '1', '6', '2017-04-04 00:11:03');

-- ----------------------------
-- Table structure for `t_pdi`
-- ----------------------------
DROP TABLE IF EXISTS `t_pdi`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pdi
-- ----------------------------
INSERT INTO `t_pdi` VALUES ('1', 'PDI-2017/II/000001', 'SO/MKA-2017/II/000001', 'SJ-2017/II/000001', '2017-02-11', 'inoy', '1', '2017-02-11', '2', '6', '1', '2017-02-11', null, null, '6', null, null);
INSERT INTO `t_pdi` VALUES ('2', 'PDI-2017/II/000002', 'SO/MKA-2017/II/000003', 'SJ-2017/II/000002', '2017-02-11', 'Bandu', '1', null, '1', null, '1', '2017-02-11', null, null, '6', null, null);
INSERT INTO `t_pdi` VALUES ('3', 'PDI-2017/II/000003', 'SO/MKA-2017/II/000002', 'SJ-2017/II/000003', '2017-02-18', 'inoy', '1', '2017-02-17', '2', '6', '1', '2017-02-17', '2017-02-18', null, '6', '6', null);

-- ----------------------------
-- Table structure for `t_pdi_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_pdi_detail`;
CREATE TABLE `t_pdi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdi_id` int(11) DEFAULT NULL,
  `aksesoris_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pdi_detail
-- ----------------------------
INSERT INTO `t_pdi_detail` VALUES ('1', '1', '1');
INSERT INTO `t_pdi_detail` VALUES ('2', '1', '5');
INSERT INTO `t_pdi_detail` VALUES ('3', '1', '9');
INSERT INTO `t_pdi_detail` VALUES ('4', '1', '7');
INSERT INTO `t_pdi_detail` VALUES ('5', '1', '11');
INSERT INTO `t_pdi_detail` VALUES ('6', '1', '13');
INSERT INTO `t_pdi_detail` VALUES ('7', '1', '15');
INSERT INTO `t_pdi_detail` VALUES ('8', '2', '1');
INSERT INTO `t_pdi_detail` VALUES ('9', '2', '6');
INSERT INTO `t_pdi_detail` VALUES ('10', '2', '9');
INSERT INTO `t_pdi_detail` VALUES ('11', '2', '7');
INSERT INTO `t_pdi_detail` VALUES ('12', '2', '11');
INSERT INTO `t_pdi_detail` VALUES ('13', '2', '13');
INSERT INTO `t_pdi_detail` VALUES ('14', '2', '15');
INSERT INTO `t_pdi_detail` VALUES ('36', '3', '1');
INSERT INTO `t_pdi_detail` VALUES ('37', '3', '5');
INSERT INTO `t_pdi_detail` VALUES ('38', '3', '9');
INSERT INTO `t_pdi_detail` VALUES ('39', '3', '8');
INSERT INTO `t_pdi_detail` VALUES ('40', '3', '0');
INSERT INTO `t_pdi_detail` VALUES ('41', '3', '13');
INSERT INTO `t_pdi_detail` VALUES ('42', '3', '0');

-- ----------------------------
-- Table structure for `t_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `t_pembayaran`;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------
INSERT INTO `t_pembayaran` VALUES ('1', 'KWT/KD/2017/II/000001', 'SO/MKA-2017/II/000001', '1', '5000000', '2017-02-10', '1', '2017-02-11 13:17:44', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('2', 'KWT/KD/2017/II/000002', 'SO/MKA-2017/II/000002', '1', '5000000', '2017-02-11', '1', '2017-02-11 14:28:06', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('3', 'KWT/KD/2017/II/000003', 'SO/MKA-2017/II/000003', '1', '2750000', '2017-02-11', '1', '2017-02-11 14:29:49', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('4', 'KWT/KD/2017/II/000004', 'SO/MKA-2017/II/000002', '2', '3000000', '2017-02-12', '1', '2017-02-11 14:30:59', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('5', 'KWT/KD/2017/II/000005', 'SO/MKA-2017/II/000003', '4', '2250000', '2017-02-12', '1', '2017-02-11 14:31:31', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('6', 'KWT/KD/2017/II/000006', 'SO/MKA-2017/II/000002', '4', '7000000', '2017-02-17', '1', '2017-02-17 23:17:42', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('7', 'KWT/KD/2017/II/000007', 'SO/MKA-2017/II/000004', '1', '1000000', '2017-02-18', '1', '2017-02-18 14:21:00', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('8', 'KWT/KD/2017/II/000008', 'SO/MKA-2017/II/000004', '2', '1000000', '2017-02-18', '1', '2017-02-18 17:21:29', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('9', 'KWT/KD/2017/II/000009', 'SO/MKA-2017/II/000004', '3', '1000000', '2017-02-24', '1', '2017-02-18 17:23:18', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('10', 'KWT/KD/2017/II/000010', 'SO/MKA-2017/II/000005', '1', '5000000', '2017-02-25', '1', '2017-02-18 17:37:53', null, null, '6', null, null);

-- ----------------------------
-- Table structure for `t_pencairan_leasing`
-- ----------------------------
DROP TABLE IF EXISTS `t_pencairan_leasing`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing
-- ----------------------------
INSERT INTO `t_pencairan_leasing` VALUES ('1', 'TGH/MKA-REK/2017/000001', '2017-04-03 00:00:00', 'Cipinang', '2017-04-03 00:00:00', 'ABCD', '27050000', '13900000', '13150000', '6', '2017-04-04 08:58:08', '6', '2017-04-04 10:05:49', '1');

-- ----------------------------
-- Table structure for `t_pencairan_leasing_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_pencairan_leasing_detail`;
CREATE TABLE `t_pencairan_leasing_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `id_kwitansi` int(11) DEFAULT NULL,
  `tgl_pencairan` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing_detail
-- ----------------------------
INSERT INTO `t_pencairan_leasing_detail` VALUES ('2', 'TGH/MKA-REK/2017/000001', '2', '2017-04-03 00:00:00', '6', '2017-04-04 09:14:20', '6', '2017-04-04 10:05:49', '1');

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

-- ----------------------------
-- Records of t_penjualan
-- ----------------------------
INSERT INTO `t_penjualan` VALUES ('23', null, 'SO/MKA-2017/II/000001', null, '1234', '2017-02-10', 'JBP1E1380984', 'MH', '15000000', '4', '0', '1', null, '1', null, null, null, '6', null, null, '2017-02-11 13:17:44', null, null);
INSERT INTO `t_penjualan` VALUES ('24', null, 'SO/MKA-2017/II/000002', null, '1234', '2017-02-11', 'JBP1E1384317', 'BK', '16000000', '1', '0', '1', null, '1', null, null, null, '6', null, null, '2017-02-11 14:28:06', null, null);
INSERT INTO `t_penjualan` VALUES ('25', null, 'SO/MKA-2017/II/000003', null, '1234', '2017-02-11', 'JBP1E1384326', 'BK', '16000000', '1', '1', '1', null, '1', null, null, null, '6', null, null, '2017-02-11 14:29:48', null, null);
INSERT INTO `t_penjualan` VALUES ('26', null, 'SO/MKA-2017/II/000004', null, '1234', '2017-02-18', 'JBP1E1380984', 'MH', '15000000', '1', '1', '2', '6', '2', '7', '2017-03-12 00:35:43', '2017-03-12', '6', null, null, '2017-02-18 14:21:00', null, null);
INSERT INTO `t_penjualan` VALUES ('27', null, 'SO/MKA-2017/II/000005', null, '1234', '2017-02-25', 'JBP1E1380986', 'MH', '15000000', '1', '0', '2', '6', '1', null, '2017-03-12 00:37:39', null, '6', null, null, '2017-02-18 17:37:53', null, null);

-- ----------------------------
-- Table structure for `t_rekap_tagihan`
-- ----------------------------
DROP TABLE IF EXISTS `t_rekap_tagihan`;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_rekap_tagihan
-- ----------------------------
INSERT INTO `t_rekap_tagihan` VALUES ('7', 'TGH/MKA-REK/2017/000001', '2017-04-03 00:00:00', '27050000', '0', 'WO', 'Cipinang', '6', '2017-04-04 02:22:19', '6', '2017-04-04 09:13:35', '1', '0', '0');

-- ----------------------------
-- Table structure for `t_rekap_tagihan_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_rekap_tagihan_detail`;
CREATE TABLE `t_rekap_tagihan_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kwitansi` int(11) DEFAULT NULL,
  `no_kwitansi` varchar(100) DEFAULT NULL,
  `tgl_kwitansi` datetime DEFAULT NULL,
  `nomor_tagihan` varchar(100) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_rekap_tagihan_detail
-- ----------------------------
INSERT INTO `t_rekap_tagihan_detail` VALUES ('38', '1', null, null, 'TGH/MKA-REK/2017/000001', '6', '2017-04-04 04:14:47', null, null, '1', '0', '0');
INSERT INTO `t_rekap_tagihan_detail` VALUES ('39', '2', null, null, 'TGH/MKA-REK/2017/000001', '6', '2017-04-04 09:13:23', null, null, '1', '0', '0');

-- ----------------------------
-- Table structure for `t_stnk`
-- ----------------------------
DROP TABLE IF EXISTS `t_stnk`;
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

-- ----------------------------
-- Records of t_stnk
-- ----------------------------
INSERT INTO `t_stnk` VALUES ('1', 'SO/MKA-2017/II/000002', 'SB-2017-02-000001', '2017-02-01', '2017-02-15', '2017-02-01', '2017-05-02', '1', '2017-02-17 23:42:11', '0000-00-00 00:00:00', null, '6', null, null);

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

-- ----------------------------
-- Table structure for `t_stnk_customer`
-- ----------------------------
DROP TABLE IF EXISTS `t_stnk_customer`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_stnk_customer
-- ----------------------------
INSERT INTO `t_stnk_customer` VALUES ('1', '1', '1234', 'Inoy YthXX', 'Jakarta XXX', '2016-12-27', 'P', 'Jl. STM', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '021-31212121', '0877889911369', '2017-02-17', null, null, '6', null, null);

-- ----------------------------
-- Table structure for `t_terima_stnk`
-- ----------------------------
DROP TABLE IF EXISTS `t_terima_stnk`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_terima_stnk
-- ----------------------------
INSERT INTO `t_terima_stnk` VALUES ('1', '1', '1', 'B2145DGD', '45454545455', '5454545454', '2017-03-04', '2017-03-04', '12', '13', '20000', '30000', '-', null, '1', '6', null, null, '2017-03-04 07:00:42', null, null);

-- ----------------------------
-- Table structure for `t_void`
-- ----------------------------
DROP TABLE IF EXISTS `t_void`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_void
-- ----------------------------
INSERT INTO `t_void` VALUES ('1', 'SO/MKA-2017/II/000001', '6', 'barang cacat', '2017-02-11 13:50:48', '6', null, null, '2017-02-11 13:50:48', null, null);
