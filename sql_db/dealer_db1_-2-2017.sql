/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2017-02-01 00:46:20
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
INSERT INTO `account` VALUES ('6', 'inoy@sportix.com', 'inoy', '1438NoPtjO.oAx.4Q7my7AfD7numbEAwqAXlh53lEvLdg9RRg4mBtJLwie~ujqYMvBgDYwsNOZZyAQpMdaR1BQ--', '909090909', 'supri170845@gmail.com', 'assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg', 'a:27:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:19;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:20;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:21;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:22;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:23;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:24;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:25;a:3:{s:4:\"menu\";s:2:\"55\";s:4:\"slug\";s:13:\"laporan-saldo\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:26;a:3:{s:4:\"menu\";s:2:\"56\";s:4:\"slug\";s:10:\"print-stok\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', null, '6', null, '0000-00-00 00:00:00', '2017-01-29 22:56:09', '0000-00-00 00:00:00', '2017-01-31 21:46:29', '1');
INSERT INTO `account` VALUES ('7', 'sapta@gmail.com', 'Sapta', '3RLAuTeObPK1mua4lWJrpMva5+dHjQON0gxATzzvEeT0EIntE8Wrb88cZfS02jUKP84w7tyxvP1bN0xjpilJbQ==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:9:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:0;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}i:8;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:0;s:3:\"upd\";i:0;s:3:\"del\";i:0;s:3:\"prt\";i:0;}}}', null, '6', null, '0000-00-00 00:00:00', '2016-12-24 11:47:27', '0000-00-00 00:00:00', '2017-01-27 21:55:18', '1');

-- ----------------------------
-- Table structure for `detail_motor_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `detail_motor_keluar`;
CREATE TABLE `detail_motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_motor_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_motor_keluar
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

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
INSERT INTO `menus` VALUES ('35', '3', 'pdi', 'PDI', 'fa fa-circle', 'pdi', '3', '1');
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
INSERT INTO `menus` VALUES ('50', '4', 'cetak_kwitansi_leasing', 'Cetak Kwitansi', 'fa fa-circle', 'cetak-kwitansi-leasing', '1', '1');
INSERT INTO `menus` VALUES ('51', '4', 'rekap_tagihan', 'Rekap Tagihan', 'fa fa-circle', 'rekap-tagihan', '2', '1');
INSERT INTO `menus` VALUES ('52', '4', 'surat_pernyataan', 'Surat Pernyataan', 'fa fa-circle', 'surat-pernyataan', '3', '1');
INSERT INTO `menus` VALUES ('53', '4', 'pencairan_leasing', 'Pencairan Leasing', 'fa fa-circle', 'pencairan-leasing', '4', '1');
INSERT INTO `menus` VALUES ('54', '5', 'laporan', 'Penjualan', 'fa fa-circle', 'laporan-penjualan', '1', '1');
INSERT INTO `menus` VALUES ('55', '5', 'laporan', 'Saldo', 'fa fa-circle', 'laporan-saldo', '2', '1');
INSERT INTO `menus` VALUES ('56', '5', 'laporan', 'Print Stok', 'fa fa-circle', 'print-stok', '3', '1');
INSERT INTO `menus` VALUES ('59', '2', 't_terima_stnk', 'TT STNK & BPKB', 'fa fa-circle', 'terima-stnk', '5', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of motor_keluar
-- ----------------------------
INSERT INTO `motor_keluar` VALUES ('1', 'MKA-SJL/BK/2016/00001', '1', '2', '2016-11-30', '8768686xx', '989776564xx', 'inoyx', 'xxx', '1', '6', '6', null, '2016-11-28 22:26:59', '2016-12-24 22:24:09', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

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
INSERT INTO `penerimaan_aksesoris` VALUES ('76', '0', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('77', '5', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('78', '9', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('79', '7', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('80', '11', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('81', '13', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('82', '15', '1', '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('83', '0', '1', '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
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
INSERT INTO `penerimaan_aksesoris` VALUES ('118', '0', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('119', '5', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('120', '9', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('121', '7', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('122', '11', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('123', '13', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('124', '15', '1', '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('125', '0', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('126', '5', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('127', '9', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('128', '7', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('129', '11', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('130', '13', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('131', '15', '1', '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('132', '1', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('133', '0', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('134', '9', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('135', '7', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('136', '11', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('137', '13', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('138', '15', '1', '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('139', '1', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
INSERT INTO `penerimaan_aksesoris` VALUES ('140', '0', '1', '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', '1', '1', '2', null, null, null, null, null, null);
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
INSERT INTO `penerimaan_motor` VALUES ('1', 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380984', 'JBP112GK383415', 'AFX12U08', 'MH', '2016', '1', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2016-12-27 23:59:52', null);
INSERT INTO `penerimaan_motor` VALUES ('2', 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380986', 'JBP113GK383410', 'AFX12U08', 'MH', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2017-01-29 00:55:00', null);
INSERT INTO `penerimaan_motor` VALUES ('3', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384326', 'JBP110GK386121', 'AFX12U8A', 'BK', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2017-01-29 01:07:01', null);
INSERT INTO `penerimaan_motor` VALUES ('4', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384317', 'JBP11XGK386157', 'AFX12U8A', 'BK', '2016', '2', '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', '6', '6', null, '2016-12-26 22:50:56', '2017-01-29 01:00:10', null);
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
) ENGINE=InnoDB AUTO_INCREMENT=923 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penerimaan_motor_temp
-- ----------------------------
INSERT INTO `penerimaan_motor_temp` VALUES ('7', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFW1E1357044', 'JFW119GK351639', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('8', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFX1E1078614', 'JFX114GK086604', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('9', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1289646', 'JFV110GK290143', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('10', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1288251', 'JFV113GK288922', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('11', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1288191', 'JFV113GK288905', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('12', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1291983', 'JFV110GK292877', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('13', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1289643', 'JFV119GK290500', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('14', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1291937', 'JFV117GK292827', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('15', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFV1E1288663', 'JFV118GK287586', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('16', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1532674', 'KF1118GK535106', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('17', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1532630', 'KF111XGK535088', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('18', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1536495', 'KF1116GK538909', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('19', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1532680', 'KF1117GK535114', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('20', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1536496', 'KF1112GK538910', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('21', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'KF11E1532617', 'KF1119GK535048', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('22', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBG1E1193124', 'JBG111GK196053', 'NF12ACF3', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('23', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBG1E1193162', 'JBG112GK196028', 'NF12ACF3', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('24', 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBK1E1299766', 'JBK112GK301427', 'NFT13C01', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('25', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16022994', 'JBP1E1380975', 'JBP117GK383426', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('26', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16022994', 'KF11E1525215', 'KF1113GK527656', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('27', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16022994', 'KF11E1525216', 'KF1115GK527657', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('28', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JBP1E1380970', 'JBP116GK383420', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('29', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JBP1E1380974', 'JBP11XGK383422', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('30', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JBP1E1384230', 'JBP117GK386133', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('31', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JBP1E1384327', 'JBP113GK386193', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('32', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JFV1E1291954', 'JFV115GK292857', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('33', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JFV1E1296035', 'JFV117GK296750', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('34', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JFV1E1292534', 'JFV110GK292247', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('35', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JFV1E1291886', 'JFV119GK292781', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('36', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'JFV1E1291959', 'JFV111GK292855', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('37', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525202', 'KF1119GK527645', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('38', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525059', 'KF111XGK527640', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('39', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525058', 'KF1113GK527639', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('40', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525916', 'KF1115GK528436', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('41', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525188', 'KF1116GK527621', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('42', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1526153', 'KF1118GK528673', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('43', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525207', 'KF1116GK527649', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('44', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1536442', 'KF1116GK538859', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('45', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1536445', 'KF1111GK538901', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('46', 'B9561UYY', '0000-00-00', 'SJ16030026', 'SO16023000', 'KF11E1525197', 'KF1117GK527630', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('47', 'B9561UYY', '0000-00-00', 'SJ16030027', 'SO16023000', 'JFW1E1333747', 'JFW110GK330436', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('48', 'B9561UYY', '0000-00-00', 'SJ16030027', 'SO16023000', 'JFW1E1348189', 'JFW111GK345267', 'C1CN16M2', 'KC', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('49', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1292090', 'JFV111GK292788', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('50', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1293343', 'JFV112GK293965', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('51', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1298181', 'JFV114GK299184', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('52', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1291562', 'JFV11XGK291624', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('53', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1291801', 'JFV116GK292706', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('54', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1291861', 'JFV111GK292757', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('55', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1298189', 'JFV11XGK299206', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('56', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1291862', 'JFV114GK292753', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('57', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1293530', 'JFV112GK294209', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('58', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1292608', 'JFV115GK293166', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('59', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1298168', 'JFV115GK299193', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('60', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'JFV1E1298169', 'JFV117GK299194', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('61', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1540490', 'KF1116GK543852', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('62', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538339', 'KF1114GK540853', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('63', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538335', 'KF1112GK540849', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('64', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1540070', 'KF1111GK543404', 'K1H2N4LM', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('65', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538336', 'KF1119GK540850', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('66', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538338', 'KF1112GK540852', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('67', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538334', 'KF1110GK540848', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('68', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538481', 'KF1116GK540997', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('69', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538332', 'KF1117GK540846', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('70', 'B9999TST', '0000-00-00', 'SJ16030067', 'SO16023000', 'KF11E1538331', 'KF1115GK540845', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('71', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16022994', 'JFX1E1078780', 'JFX114GK086697', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('72', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16022994', 'JFX1E1078710', 'JFX119GK086632', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('73', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16022994', 'JFX1E1078788', 'JFX111GK086690', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('74', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16022994', 'KC52E1290017', 'KC5212GK292763', 'GL15BCF2', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('75', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16023000', 'JFV1E1293247', 'JFV11XGK293910', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('76', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16023000', 'KF11E1540941', 'KF1119GK542467', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('77', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16023000', 'KF11E1540960', 'KF1110GK542485', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('78', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16023000', 'JBG1E1193122', 'JBG11XGK196049', 'NF12ACF3', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('79', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16030044', 'JFA1E1230460', 'JFA115GK236636', 'NC1D1CF2', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('80', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16030044', 'JFR1E1289736', 'JFR119GK295610', 'X1B2N7L0', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('81', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16030044', 'JFR1E1289664', 'JFR111GK295519', 'X1B2N7L0', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('82', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16030044', 'JFR1E1289737', 'JFR110GK295611', 'X1B2N7L0', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('83', 'B9999TST', '0000-00-00', 'SJ16030104', 'SO16030044', 'JFR1E1289621', 'JFR116GK295581', 'X1B2N7L0', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('84', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16023000', 'JFV1E1297168', 'JFV113GK297183', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('85', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFW1E1363549', 'JFW114GK364248', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('86', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFW1E1363503', 'JFW112GK364197', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('87', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFW1E1363546', 'JFW114GK364251', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('88', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFW1E1363501', 'JFW112GK364202', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('89', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFW1E1360768', 'JFW119GK359515', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('90', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFV1E1300557', 'JFV112GK300512', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('91', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFV1E1293438', 'JFV114GK294146', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('92', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFV1E1297167', 'JFV11XGK297181', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('93', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'KF11E1540994', 'KF1112GK542522', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('94', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235203', 'JFP219GK233515', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('95', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1242170', 'JFP210GK239493', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('96', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235534', 'JFP219GK233840', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('97', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235299', 'JFP214GK233597', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('98', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235300', 'JFP219GK233577', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('99', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235303', 'JFP21XGK233605', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('100', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1235580', 'JFP212GK233906', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('101', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFP2E1242172', 'JFP216GK239501', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('102', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFT1E1065508', 'JFT119GK066292', 'YG2N15L1', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('103', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFT1E1065915', 'JFT115GK066628', 'YG2N15L1', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('104', 'B9475UYT', '0000-00-00', 'SJ16030149', 'SO16030166', 'JFT1E1065510', 'JFT117GK066291', 'YG2N15L1', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('105', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBP1E1382824', 'JBP118GK385329', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('106', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBP1E1380698', 'JBP115GK383330', 'AFX12U08', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('107', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBP1E1384071', 'JBP112GK384886', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('108', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBP1E1379305', 'JBP111GK382367', 'AFX12U8A', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('109', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFW1E1363551', 'JFW110GK364246', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('110', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFW1E1363552', 'JFW117GK364244', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('111', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFW1E1360974', 'JFW110GK359676', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('112', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFX1E1079570', 'JFX113GK087503', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('113', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFV1E1300336', 'JFV110GK301304', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('114', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFV1E1300343', 'JFV112GK301322', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('115', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFV1E1301808', 'JFV112GK302602', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('116', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFV1E1301810', 'JFV114GK302598', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('117', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'KC61E1043392', 'KC6112GK043404', 'GL15C21A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('118', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'KF11E1422799', 'KF1114GK456905', 'K1H2N4L0', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('119', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'KF11E1423029', 'KF111XGK456942', 'K1H2N4L0', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('120', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBK1E1301042', 'JBK118GK303134', 'NFT13C01', 'BB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('121', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBK3E1137546', 'JBK316GK137869', 'NFT13C03', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('122', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JBK3E1139378', 'JBK319GK139566', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('123', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFP2E1237904', 'JFP21XGK236231', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('124', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFP2E1237901', 'JFP218GK236230', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('125', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFP2E1237906', 'JFP213GK236233', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('126', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFP2E1237370', 'JFP218GK236227', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('127', 'B9578OR', '0000-00-00', 'SJ16030219', 'SO16030284', 'JFS2E1062618', 'JFS213GK062229', 'YG2N2LAA', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('128', 'B9066UVT', '0000-00-00', 'SJ16030221', 'SO16030284', 'KC71E1093901', 'KC711XGK095742', 'T5E02RL0', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('129', 'B9066UVT', '0000-00-00', 'SJ16030221', 'SO16030284', 'KC71E1096125', 'KC7116GK095902', 'T5E02RL0', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('130', 'B9578OR', '0000-00-00', 'SJ16030222', 'SO16030284', 'JBK1E1300326', 'JBK11XGK302440', 'NFT13C01', 'BG', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('131', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16022994', 'KC52E1291398', 'KC5219GK293845', 'GL15BCF2', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('132', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030166', 'JFV1E1301975', 'JFV119GK302757', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('133', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFV1E1294036', 'JFV115GK294785', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('134', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFV1E1294037', 'JFV112GK294744', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('135', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFP2E1242152', 'JFP217GK239474', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('136', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFP2E1242156', 'JFP214GK239478', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('137', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFP2E1242112', 'JFP214GK239433', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('138', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFS1E1293314', 'JFS113GK298221', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('139', 'B9727UYY', '0000-00-00', 'SJ16030224', 'SO16030284', 'JFS1E1293313', 'JFS115GK298222', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('141', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JBP1E1379309', 'JBP113GK382354', 'AFX12U8A', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('142', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1364041', 'JFW115GK364579', 'C1CN16M2', 'KC', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('143', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1364473', 'JFW118GK367539', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('144', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1367529', 'JFW113GK361969', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('145', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1366705', 'JFW115GK361343', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('146', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1365757', 'JFW112GK360148', 'C1CN16MS', 'BP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('147', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1365769', 'JFW112GK360165', 'C1CN16MS', 'BP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('148', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFW1E1367375', 'JFW116GK361772', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('149', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFX1E1082579', 'JFX114GK083122', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('150', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFY1E1030868', 'JFY118GK033779', 'D1A2N19M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('151', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFY1E1033222', 'JFY111GK032375', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('152', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFV1E1294078', 'JFV116GK294763', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('153', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFV1E1303065', 'JFV111GK303157', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('154', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'KF11E1467814', 'KF1110GK468095', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('155', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JBK3E1139725', 'JBK312GK139893', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('156', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFP2E1236124', 'JFP216GK234444', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('157', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFR1E1297462', 'JFR114GK302950', 'X1B2N7L0', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('158', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFS1E1281476', 'JFS111GK287038', 'YG02N2L1', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('159', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFS1E1297160', 'JFS111GK298945', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('160', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFS2E1064394', 'JFS213GK062926', 'YG2N2LAA', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('161', 'B9561UYY', '0000-00-00', 'SJ16030268', 'SO16030433', 'JFS2E1064402', 'JFS218GK063005', 'YG2N2LAA', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('162', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JBP1E1383325', 'JBP118GK385959', 'AFX12U08', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('163', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JBP1E1383333', 'JBP111GK385978', 'AFX12U08', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('164', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404404', 'JFU111GK409053', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('165', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404727', 'JFU113GK409507', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('166', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404401', 'JFU113GK409054', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('167', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404740', 'JFU110GK409531', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('168', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404741', 'JFU119GK409527', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('169', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFU1E1404402', 'JFU112GK409045', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('170', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFV1E1305957', 'JFV114GK306666', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('171', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFV1E1305796', 'JFV116GK306698', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('172', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP2E1243351', 'JFP219GK242702', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('173', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP2E1243346', 'JFP211GK242662', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('174', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2361349', 'JFP128GK362498', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('175', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2361494', 'JFP123GK362652', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('176', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2350813', 'JFP123GK370766', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('177', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2350857', 'JFP120GK370806', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('178', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2361346', 'JFP120GK362494', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('179', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2350850', 'JFP123GK370797', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('180', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2361306', 'JFP127GK362461', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('181', 'B9475UYT', '0000-00-00', 'SJ16030281', 'SO16030433', 'JFP1E2350815', 'JFP124GK370761', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('182', 'B9475UYT', '0000-00-00', 'SJ16030282', 'SO16030433', 'KB11E1051052', 'KB1112GK050021', 'Y3B2R17L', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('183', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JBP1E1385773', 'JBP113GK388302', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('184', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFW1E1367476', 'JFW112GK361896', 'C1CN16MS', 'BP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('185', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFX1E1083779', 'JFX118GK084404', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('186', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFX1E1083230', 'JFX114GK083752', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('187', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFX1E1083833', 'JFX117GK084426', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('188', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFX1E1083273', 'JFX116GK083798', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('189', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFY1E1033217', 'JFY117GK032302', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('190', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFY1E1033210', 'JFY112GK032305', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('191', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'KC52E1291094', 'KC521XGK293689', 'GL15BCF2', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('192', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'KF11E1540968', 'KF111XGK542493', 'K1H2N4LM', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('193', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JBK3E1139906', 'JBK315GK139936', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('194', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JBK3E1139845', 'JBK317GK140005', 'NFT13C03', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('195', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245387', 'JFP215GK245192', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('196', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245382', 'JFP21XGK245186', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('197', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245046', 'JFP219GK244871', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('198', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245047', 'JFP210GK244872', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('199', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1242062', 'JFP21XGK239386', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('200', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1239977', 'JFP212GK238281', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('201', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245372', 'JFP215GK245175', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('202', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1239934', 'JFP213GK238239', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('203', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP2E1245008', 'JFP215GK244835', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('204', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFP1E2357025', 'JFP126GK359597', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('205', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'JFR1E1293414', 'JFR116GK300889', 'X1B2N7L0', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('206', 'B9510UT', '0000-00-00', 'SJ16030353', 'SO16030566', 'KB11E1053157', 'KB111XGK052227', 'Y3B2R17L', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('207', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1412375', 'JFU110GK415443', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('208', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1408095', 'JFU113GK413279', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('209', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1407883', 'JFU115GK411078', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('210', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1412379', 'JFU110GK415457', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('211', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1412335', 'JFU119GK415411', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('212', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFU1E1408094', 'JFU111GK413281', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('213', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307027', 'JFV119GK307425', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('214', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1295089', 'JFV115GK295306', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('215', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1295086', 'JFV11XGK295303', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('216', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307285', 'JFV110GK308169', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('217', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1295088', 'JFV111GK295304', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('218', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307288', 'JFV111GK308195', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('219', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307286', 'JFV111GK308164', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('220', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307022', 'JFV116GK307429', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('221', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307081', 'JFV119GK307473', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('222', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307086', 'JFV119GK307490', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('223', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFV1E1307281', 'JFV113GK308165', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('224', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFP1E2380551', 'JFP121GK386531', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('225', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFP1E2374468', 'JFP122GK386473', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('226', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFP1E2380514', 'JFP129GK386485', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('227', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFP1E2374032', 'JFP123GK386501', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('228', 'B9475UYT', '0000-00-00', 'SJ16030358', 'SO16030566', 'JFP1E2374467', 'JFP120GK386472', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('229', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1409629', 'JFU111GK414057', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('230', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1412390', 'JFU117GK415469', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('231', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1408045', 'JFU111GK413216', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('232', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1409663', 'JFU113GK414710', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('233', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1412392', 'JFU115GK415468', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('234', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1409004', 'JFU116GK413907', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('235', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1412391', 'JFU118GK415481', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('236', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1412559', 'JFU118GK415528', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('237', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1408044', 'JFU113GK413220', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('238', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFU1E1412396', 'JFU119GK415473', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('239', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1307295', 'JFV113GK308201', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('240', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1298695', 'JFV114GK299721', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('241', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1298863', 'JFV111GK299904', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('242', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1307013', 'JFV110GK307698', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('243', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1307293', 'JFV110GK308205', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('244', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1298867', 'JFV11XGK299898', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('245', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1298706', 'JFV110GK299733', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('246', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1307290', 'JFV116GK308189', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('247', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1298707', 'JFV111GK299725', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('248', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFV1E1306482', 'JFV117GK307195', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('249', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFP1E2360135', 'JFP128GK363666', 'X1B2N4LO', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('250', 'B9999TST', '0000-00-00', 'SJ16030416', 'SO16030566', 'JFP1E2372554', 'JFP126GK364072', 'X1B2N4LO', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('251', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1368147', 'JFW119GK368831', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('252', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1369252', 'JFW113GK370185', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('253', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1368156', 'JFW116GK368818', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('254', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1368155', 'JFW113GK368825', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('255', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1368999', 'JFW115GK370074', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('256', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1370717', 'JFW113GK366170', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('257', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1370898', 'JFW114GK366792', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('258', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFW1E1371123', 'JFW115GK366641', 'C1CN16MS', 'BP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('259', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFX1E1083957', 'JFX116GK084563', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('260', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFX1E1086889', 'JFX111GK091002', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('261', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFY1E1029816', 'JFY113GK032135', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('262', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'KC52E1291097', 'KC5218GK293688', 'GL15BCF2', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('263', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'KC82E1019482', 'KC8210GK020374', 'H5C2R2MA', 'XM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('264', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JBG1E1193572', 'JBG112GK196448', 'NF12ACF3', 'BB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('265', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JBK3E1140152', 'JBK312GK140249', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('266', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFP2E1242083', 'JFP215GK239408', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('267', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFP1E2368637', 'JFP125GK382739', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('268', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'JFP1E2368581', 'JFP125GK382725', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('269', 'B9475UYT', '0000-00-00', 'SJ16030431', 'SO16030685', 'KB11E1052853', 'KB1115GK053852', 'Y3B2R17L', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('270', 'B9475UYT', '0000-00-00', 'SJ16030433', 'SO16030685', 'JFS1E1297038', 'JFS119GK298966', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('271', 'B9475UYT', '0000-00-00', 'SJ16030434', 'SO16030685', 'JFU1E1412315', 'JFU111GK415404', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('272', 'B9475UYT', '0000-00-00', 'SJ16030434', 'SO16030685', 'JFU1E1412289', 'JFU119GK415408', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('273', 'B9475UYT', '0000-00-00', 'SJ16030434', 'SO16030685', 'JFU1E1412351', 'JFU113GK415419', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('274', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030566', 'JFV1E1307042', 'JFV115GK307440', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('275', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030566', 'JFV1E1307308', 'JFV115GK308197', 'EF02N12M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('276', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030566', 'JFV1E1307018', 'JFV114GK307414', 'EF02N12M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('277', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFU1E1408795', 'JFU116GK414359', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('278', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFU1E1408792', 'JFU112GK414357', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('279', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFU1E1408793', 'JFU112GK414360', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('280', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFV1E1298731', 'JFV110GK299750', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('281', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFV1E1295056', 'JFV113GK295899', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('282', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP2E1245354', 'JFP213GK245174', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('283', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2357084', 'JFP122GK359595', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('284', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2357165', 'JFP127GK359611', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('285', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2357032', 'JFP127GK359558', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('286', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2368538', 'JFP127GK382645', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('287', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2368533', 'JFP126GK382653', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('288', 'B9578OR', '0000-00-00', 'SJ16030472', 'SO16030685', 'JFP1E2368576', 'JFP122GK382729', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('289', 'B9578OR', '0000-00-00', 'SJ16030473', 'SO16030685', 'JBP1E1384039', 'JBP116GK384857', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('290', 'B9578OR', '0000-00-00', 'SJ16030473', 'SO16030685', 'JFP2E1245025', 'JFP21XGK244801', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('291', 'B9578OR', '0000-00-00', 'SJ16030473', 'SO16030685', 'JFP1E2365561', 'JFP123GK377667', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('292', 'B9578OR', '0000-00-00', 'SJ16030473', 'SO16030685', 'JFP1E2365711', 'JFP127GK377638', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('293', 'B9578OR', '0000-00-00', 'SJ16030473', 'SO16030685', 'JFR1E1297457', 'JFR117GK302943', 'X1B2N7L0', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('294', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JBP1E1385639', 'JBP116GK388004', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('295', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFW1E1378907', 'JFW115GK378093', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('296', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFX1E1085356', 'JFX111GK088973', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('297', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFX1E1086968', 'JFX111GK091033', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('298', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1414014', 'JFU117GK419411', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('299', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1411582', 'JFU114GK412657', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('300', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1414865', 'JFU112GK420482', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('301', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1411881', 'JFU112GK412981', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('302', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1414861', 'JFU116GK420470', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('303', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFU1E1411888', 'JFU112GK412995', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('304', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'KC82E1019852', 'KC8214GK020829', 'H5C2R2MA', 'XM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('305', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JBK3E1140248', 'JBK31XGK140242', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('306', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JBK3E1140191', 'JBK310GK140279', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('307', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFP2E1245540', 'JFP215GK245337', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('308', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFP2E1245303', 'JFP218GK245123', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('309', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFP2E1245052', 'JFP219GK244885', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('310', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFR1E1293571', 'JFR118GK301025', 'X1B2N7L0', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('311', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'KB11E1052412', 'KB1114GK053521', 'Y3B2R17L', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('312', 'B9510UT', '0000-00-00', 'SJ16030510', 'SO16030844', 'JFS1E1297165', 'JFS117GK298934', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('313', 'B9510UT', '0000-00-00', 'SJ16030511', 'SO16030844', 'JFP1E2348516', 'JFP127GK346597', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('314', 'B9510UT', '0000-00-00', 'SJ16030511', 'SO16030844', 'JFP1E2358787', 'JFP120GK360289', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('315', 'B9510UT', '0000-00-00', 'SJ16030511', 'SO16030844', 'JFP1E2348517', 'JFP129GK346598', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('316', 'B9510UT', '0000-00-00', 'SJ16030511', 'SO16030844', 'JFP1E2358786', 'JFP12XGK360302', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('317', 'B9510UT', '0000-00-00', 'SJ16030511', 'SO16030970', 'KF11E1422879', 'KF1111GK456778', 'K1H2N4L0', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('318', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030566', 'JFV1E1301765', 'JFV113GK302544', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('319', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348480', 'JFP124GK346587', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('320', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2357224', 'JFP121GK359734', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('321', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348446', 'JFP125GK346551', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('322', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358797', 'JFP129GK360307', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('323', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358308', 'JFP122GK359810', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('324', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2355400', 'JFP126GK346879', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('325', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358386', 'JFP127GK359916', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('326', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348515', 'JFP125GK346596', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('327', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358390', 'JFP125GK359915', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('328', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2355393', 'JFP12XGK346870', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('329', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348481', 'JFP127GK346583', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('330', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348447', 'JFP127GK346552', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('331', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358389', 'JFP121GK359913', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('332', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2348449', 'JFP121GK346546', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('333', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358402', 'JFP129GK359920', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('334', 'B9475UYT', '0000-00-00', 'SJ16030539', 'SO16030844', 'JFP1E2358783', 'JFP12XGK360297', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('336', 'B9475UYT', '0000-00-00', 'SJ16030541', 'SO16030844', 'JFV1E1302674', 'JFV111GK303594', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('337', 'B9475UYT', '0000-00-00', 'SJ16030541', 'SO16030844', 'JFV1E1302570', 'JFV11XGK303514', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('338', 'B9475UYT', '0000-00-00', 'SJ16030541', 'SO16030844', 'JFV1E1302670', 'JFV118GK303592', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('339', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JBP1E1378705', 'JBP111GK381087', 'AFX12U08', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('340', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JBP1E1387667', 'JBP111GK389092', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('341', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1372751', 'JFW119GK373821', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('342', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1372536', 'JFW116GK370357', 'C1CN16M2', 'KC', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('343', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1372716', 'JFW116GK373596', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('344', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378466', 'JFW118GK377391', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('345', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378699', 'JFW11XGK377893', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('346', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378608', 'JFW115GK377588', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('347', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378474', 'JFW118GK377424', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('348', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378548', 'JFW113GK377475', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('349', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378546', 'JFW111GK377474', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('350', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFW1E1378700', 'JFW114GK378053', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('351', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFX1E1085486', 'JFX119GK089014', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('352', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFX1E1084780', 'JFX114GK088272', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('353', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFY1E1025111', 'JFY114GK028322', 'D1A2N19M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('354', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFX1E1086962', 'JFX110GK091038', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('355', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFY1E1033305', 'JFY111GK032425', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('356', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JBK3E1140755', 'JBK310GK140721', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('357', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JBK3E1140649', 'JBK316GK140853', 'NFT13C03', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('358', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFP1E2392755', 'JFP124GK413642', 'X1B2N4LO', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('359', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFP1E2392613', 'JFP123GK413521', 'X1B2N4LO', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('360', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFP1E2393098', 'JFP128GK413997', 'X1B2N4LO', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('361', 'B9951UIS', '0000-00-00', 'SJ16030593', 'SO16031039', 'JFS1E1281485', 'JFS118GK287019', 'YG02N2L1', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('362', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFU1E1416375', 'JFU113GK417462', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('363', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFU1E1418843', 'JFU113GK422483', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('364', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFV1E1302660', 'JFV115GK303582', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('365', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JBK1E1302727', 'JBK114GK305298', 'NFT13C01', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('366', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP2E1249333', 'JFP218GK249639', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('367', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP2E1249501', 'JFP210GK249814', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('368', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2358626', 'JFP121GK360141', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('369', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2391034', 'JFP120GK408812', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('370', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2358721', 'JFP122GK360214', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('371', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2357112', 'JFP123GK359640', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('372', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2358809', 'JFP127GK360323', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('373', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFP1E2391035', 'JFP127GK408824', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('374', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFR1E1298703', 'JFR119GK303768', 'X1B2N7L0', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('375', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFR1E1295904', 'JFR11XGK301396', 'X1B2N7L0', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('376', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'KB11E1054074', 'KB1119GK055054', 'Y3B2R17L', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('377', 'B9558UYY', '0000-00-00', 'SJ16030602', 'SO16031039', 'JFS1E1297139', 'JFS113GK298896', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('378', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031039', 'JFW1E1379532', 'JFW11XGK378445', 'C1CN16MS', 'HP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('379', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1372823', 'JFW115GK373895', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('380', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1378784', 'JFW116GK377874', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('381', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1380156', 'JFW112GK378875', 'C1CN16MS', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('382', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1378870', 'JFW112GK378035', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('383', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1378738', 'JFW114GK377839', 'C1CN16MS', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('384', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFW1E1380672', 'JFW115GK379342', 'C1CN16MS', 'BP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('385', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFX1E1086943', 'JFX119GK091068', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('386', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFV1E1305526', 'JFV113GK306853', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('387', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFV1E1305815', 'JFV111GK306933', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('388', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'KC82E1021588', 'KC8219GK022656', 'H5C2R2MA', 'XM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('389', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'KC82E1021450', 'KC8210GK022691', 'H5C2R2MA', 'XM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('390', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'KB11E1054132', 'KB111XGK055208', 'Y3B2R17L', 'MP', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('391', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031154', 'JFS1E1281520', 'JFS118GK287151', 'YG02N2L1', 'PH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('392', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1551232', 'KF1117GK548106', 'K1H2N14S', 'BL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('393', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1552294', 'KF1118GK549183', 'K1H2N14S', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('394', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1556395', 'KF1117GK553337', 'K1H2N14S', 'BW', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('395', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1552086', 'KF1114GK548970', 'K1H2N14S', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('396', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1551229', 'KF1111GK548103', 'K1H2N14S', 'BL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('397', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1551619', 'KF1114GK548628', 'K1H2N14S', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('398', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1551642', 'KF1112GK548529', 'K1H2N14S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('399', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1550970', 'KF1117GK548350', 'K1H2N14S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('400', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1556205', 'KF1119GK553341', 'K1H2N14S', 'BW', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('401', 'B9561UYY', '0000-00-00', 'SJ16030645', 'SO16031228', 'KF11E1554969', 'KF1115GK551859', 'K1H2N14S', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('402', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFX1E1091659', 'JFX115GK090354', 'D1A2N18M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('403', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFY1E1033803', 'JFY117GK033000', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('404', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFU1E1419953', 'JFU115GK423036', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('405', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFU1E1416776', 'JFU113GK417901', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('406', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFU1E1419955', 'JFU110GK423056', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('407', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFU1E1416823', 'JFU115GK417933', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('408', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JBK3E1140850', 'JBK31XGK140984', 'NFT13C03', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('409', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP2E1249328', 'JFP215GK249632', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('410', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP2E1246668', 'JFP210GK246976', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('411', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP2E1250951', 'JFP218GK251326', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('412', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2392765', 'JFP129GK424166', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('413', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2392716', 'JFP127GK424182', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('414', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2368889', 'JFP129GK385174', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('415', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2393102', 'JFP123GK424146', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('416', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2368884', 'JFP128GK385165', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('417', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2368779', 'JFP129GK385210', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('418', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2392766', 'JFP122GK424171', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('419', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2392715', 'JFP129GK424183', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('420', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2368883', 'JFP125GK385186', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('421', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFP1E2368942', 'JFP126GK385116', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('422', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFR1E1292650', 'JFR111GK300119', 'X1B2N7L0', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('423', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFR1E1292690', 'JFR112GK300159', 'X1B2N7L0', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('424', 'B9558UYY', '0000-00-00', 'SJ16030658', 'SO16031154', 'JFS1E1297135', 'JFS119GK298885', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('425', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JBP1E1389253', 'JBP116GK389671', 'AFX12U08', 'MH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('426', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JBP1E1386524', 'JBP11XGK390502', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('427', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JBP1E1379357', 'JBP11XGK382321', 'AFX12U8A', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('428', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFW1E1372860', 'JFW114GK374021', 'C1CN16M2', 'MS', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('429', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFX1E1091157', 'JFX117GK089710', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('430', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFX1E1091088', 'JFX117GK089609', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('431', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFX1E1091660', 'JFX114GK090362', 'D1A2N18M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('432', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFY1E1030510', 'JFY119GK033306', 'D1A2N19M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('433', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFX1E1088233', 'JFX112GK092434', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('434', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFY1E1033869', 'JFY115GK032993', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('435', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFU1E1419963', 'JFU11XGK423047', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('436', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFU1E1416958', 'JFU114GK418054', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('437', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFV1E1306609', 'JFV112GK307816', 'EF02N12M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('438', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP2E1251012', 'JFP215GK251333', 'X1B2N4LA', 'PB', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('439', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP2E1249362', 'JFP214GK249668', 'X1B2N4LA', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('440', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP2E1246885', 'JFP210GK247187', 'X1B2N4LA', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('441', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2391935', 'JFP121GK409676', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('442', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2391833', 'JFP129GK409571', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('443', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2391930', 'JFP122GK409671', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('444', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2391835', 'JFP122GK409573', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('445', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2391831', 'JFP120GK409569', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('446', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFP1E2370698', 'JFP121GK409709', 'X1B2N4LO', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('447', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFR1E1292652', 'JFR118GK300120', 'X1B2N7L0', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('448', 'B9474UYT', '0000-00-00', 'SJ16030720', 'SO16031324', 'JFR1E1298723', 'JFR112GK303787', 'X1B2N7L0', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('449', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031154', 'JFU1E1416867', 'JFU115GK418094', 'EF02N11S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('450', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031154', 'JFU1E1419961', 'JFU111GK423051', 'EF02N11S', 'WL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('451', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1558316', 'KF1113GK556185', 'K1H2N14S', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('452', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1556475', 'KF1118GK553377', 'K1H2N14S', 'BW', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('453', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1556485', 'KF1110GK553390', 'K1H2N14S', 'BW', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('454', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1560457', 'KF1110GK557343', 'K1H2N14S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('455', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1552286', 'KF1115GK549173', 'K1H2N14S', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('456', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1552867', 'KF1111GK550577', 'K1H2N14S', 'BL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('457', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1552918', 'KF1113GK550709', 'K1H2N14S', 'BL', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('458', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1558317', 'KF1115GK556186', 'K1H2N14S', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('459', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1560458', 'KF1112GK557344', 'K1H2N14S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('460', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1553579', 'KF1114GK549455', 'K1H2N14S', 'WR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('461', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1556477', 'KF1118GK553380', 'K1H2N14S', 'BW', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('462', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'KF11E1560461', 'KF1118GK557347', 'K1H2N14S', 'BR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('463', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373772', 'JFP127GK385741', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('464', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373728', 'JFP125GK385771', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('465', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373773', 'JFP120GK385743', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('466', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373727', 'JFP123GK385719', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('467', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2369365', 'JFP129GK385367', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('468', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373724', 'JFP124GK385714', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('469', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFP1E2373721', 'JFP123GK385798', 'X1B2N4LO', 'PM', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('470', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFS1E1297106', 'JFS117GK298898', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('471', 'B9510UT', '0000-00-00', 'SJ16030726', 'SO16031324', 'JFS1E1297173', 'JFS117GK298920', 'YG2N2L1A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('472', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JBP1E1386582', 'JBP111GK390355', 'AFX12U8A', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('473', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JBP1E1384125', 'JBP111GK386032', 'AFX12U8A', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('474', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFW1E1374110', 'JFW119GK375200', 'C1CN16M2', 'KC', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('475', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFW1E1373998', 'JFW118GK375012', 'C1CN16M2', 'HF', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('476', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFW1E1374190', 'JFW11XGK375173', 'C1CN16M2', 'KC', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('477', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFX1E1091606', 'JFX117GK090372', 'D1A2N18M', 'RD', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('478', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFX1E1086009', 'JFX116GK090900', 'D1A2N18M', 'BK', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('479', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFX1E1091645', 'JFX114GK090345', 'D1A2N18M', 'WH', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('480', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFX1E1088697', 'JFX11XGK092892', 'D1A2N8MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('481', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFY1E1034154', 'JFY11XGK039261', 'D1A2N9MA', 'GR', '2016', '2', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('482', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFU1E1416757', 'JFU115GK417835', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('483', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFU1E1422176', 'JFU11XGK423288', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('484', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFV1E1307258', 'JFV119GK308137', 'EF02N12M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('485', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'KF11E1567833', 'KF1115GK564708', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('486', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'KF11E1565567', 'KF1119GK558958', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('487', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'KF11E1565556', 'KF1110GK558945', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('488', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'KF11E1567865', 'KF1113GK564738', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('489', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JBG1E1193513', 'JBG111GK196442', 'NF12ACF3', 'BB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('490', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFP2E1251030', 'JFP219GK251352', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('491', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFP2E1246619', 'JFP218GK246921', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('492', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFP2E1252928', 'JFP213GK253338', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('493', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFR1E1304870', 'JFR116GK310970', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('494', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFR1E1292694', 'JFR116GK300164', 'X1B2N7L0', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('495', 'B9999TST', '0000-00-00', 'SJ16030802', 'SO16031451', 'JFS1E1297102', 'JFS114GK298907', 'YG2N2L1A', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('496', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1552606', 'KF1111GK550319', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('497', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1562302', 'KF1113GK561158', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('498', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1554126', 'KF1116GK550039', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('499', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1562403', 'KF1119GK561259', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('500', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1561284', 'KF1110GK561120', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('501', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'KF11E1562405', 'KF1117GK561261', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('502', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2374640', 'JFP12XGK365404', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('503', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2374849', 'JFP12XGK365371', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('504', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2414800', 'JFP12XGK424791', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('505', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2414840', 'JFP127GK424795', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('506', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2374804', 'JFP129GK365331', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('507', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2414801', 'JFP127GK424781', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('508', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2414675', 'JFP121GK424730', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('509', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2374844', 'JFP129GK365376', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('510', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2374806', 'JFP123GK365308', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('511', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFP1E2414802', 'JFP124GK424785', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('512', 'B9554QG', '0000-00-00', 'SJ16030804', 'SO16031451', 'JFR1E1304822', 'JFR111GK310973', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('513', 'B9554QG', '0000-00-00', 'SJ16030806', 'SO16031451', 'JBP1E1389438', 'JBP117GK392174', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('514', 'B9554QG', '0000-00-00', 'SJ16030806', 'SO16031451', 'JBP1E1389630', 'JBP117GK392045', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('515', 'B9554QG', '0000-00-00', 'SJ16030806', 'SO16031451', 'JFW1E1372896', 'JFW119GK374077', 'C1CN16M2', 'MS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('516', 'B9554QG', '0000-00-00', 'SJ16030806', 'SO16031451', 'JFW1E1373942', 'JFW118GK374975', 'C1CN16M2', 'MS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('517', 'B9066UVT', '0000-00-00', 'SJ16030815', 'SO16031451', 'KC71E1096401', 'KC711XGK097331', 'T5E02RL0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('518', 'B9562UYY', '0000-00-00', 'SJ16030870', 'SO16031451', 'JFW1E1374108', 'JFW116GK375106', 'C1CN16M2', 'KC', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('519', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBP1E1389453', 'JBP113GK389871', 'AFX12U08', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('520', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBP1E1386360', 'JBP110GK390332', 'AFX12U8A', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('521', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBP1E1384123', 'JBP114GK386042', 'AFX12U8A', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('522', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFW1E1382265', 'JFW11XGK381278', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('523', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFW1E1382263', 'JFW111GK381279', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('524', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFW1E1389707', 'JFW115GK382645', 'C1CN16MS', 'BP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('525', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFW1E1382256', 'JFW110GK381287', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('526', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFW1E1389626', 'JFW113GK382627', 'C1CN16MS', 'BP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('527', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFX1E1089313', 'JFX115GK093528', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('528', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFY1E1034109', 'JFY116GK039208', 'D1A2N9MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('529', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFU1E1426616', 'JFU113GK428199', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('530', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFU1E1417385', 'JFU114GK418488', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('531', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFU1E1426651', 'JFU112GK428243', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('532', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFU1E1417371', 'JFU110GK418472', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('533', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'KF11E1572231', 'KF1116GK569142', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('534', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'KF11E1565526', 'KF1118GK558918', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('535', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBG1E1193551', 'JBG112GK196451', 'NF12ACF3', 'BB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('536', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBK3E1141317', 'JBK310GK141335', 'NFT13C03', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('537', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JBK3E1140781', 'JBK310GK141125', 'NFT13C03', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('538', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFP1E2402631', 'JFP123GK402762', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('539', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFP1E2402638', 'JFP129GK402765', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('540', 'B9562UYY', '0000-00-00', 'SJ16030871', 'SO16031617', 'JFR1E1292685', 'JFR111GK300153', 'X1B2N7L0', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('541', 'B9562UYY', '0000-00-00', 'SJ16030872', 'SO16031451', 'JFW1E1382657', 'JFW115GK375372', 'C1CN16M2', 'MS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('542', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JBP1E1390023', 'JBP11XGK392511', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('543', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFU1E1417376', 'JFU111GK418478', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('544', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFV1E1258186', 'JFV119GK259733', 'EF02N12M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('545', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1569366', 'KF1114GK566241', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('546', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1568705', 'KF111XGK565580', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('547', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1576376', 'KF1111GK573275', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('548', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1576340', 'KF1115GK573201', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('549', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1569792', 'KF1110GK566673', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('550', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1572267', 'KF1116GK569173', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('551', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1574818', 'KF1113GK571706', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('552', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'KF11E1569796', 'KF1118GK566677', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('553', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP2E1253891', 'JFP219GK254087', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('554', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP2E1253061', 'JFP213GK253470', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('555', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2393817', 'JFP126GK387805', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('556', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2402470', 'JFP128GK402580', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('557', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2393721', 'JFP126GK387710', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('558', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2427518', 'JFP12XGK402807', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('559', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2427511', 'JFP129GK402815', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('560', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2393620', 'JFP126GK387593', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('561', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFP1E2393760', 'JFP127GK387764', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('562', 'B9578OR', '0000-00-00', 'SJ16030888', 'SO16031617', 'JFR1E1304835', 'JFR111GK310956', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('563', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JBP1E1389935', 'JBP112GK392597', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('564', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JBP1E1390050', 'JBP116GK392537', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('565', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFX1E1089674', 'JFX111GK093851', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('566', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFX1E1089631', 'JFX118GK093832', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('567', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFY1E1034303', 'JFY112GK039500', 'D1A2N9MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('568', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFU1E1427766', 'JFU117GK429369', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('569', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFU1E1427762', 'JFU116GK429377', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('570', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JBG1E1193595', 'JBG11XGK196441', 'NF12ACF3', 'BB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('571', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP2E1252689', 'JFP217GK253102', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('572', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP2E1247913', 'JFP216GK248229', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('573', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP2E1253357', 'JFP211GK253676', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('574', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2395485', 'JFP121GK395469', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('575', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2421696', 'JFP127GK425719', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('576', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2394967', 'JFP126GK388971', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('577', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2395501', 'JFP12XGK395485', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('578', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2421724', 'JFP124GK425712', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('579', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2395502', 'JFP121GK395486', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('580', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2421697', 'JFP125GK425749', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('581', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFP1E2421695', 'JFP123GK425717', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('582', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFR1E1292681', 'JFR11XGK300149', 'X1B2N7L0', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('583', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFR1E1296754', 'JFR115GK302228', 'X1B2N7L0', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('584', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFR1E1298696', 'JFR118GK303762', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('585', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFR1E1298694', 'JFR114GK303760', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('586', 'B9679UYU', '0000-00-00', 'SJ16030940', 'SO16031800', 'JFS1E1281148', 'JFS11XGK287121', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('587', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'JFU1E1427784', 'JFU111GK428881', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('588', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'KF11E1575595', 'KF1116GK572476', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('589', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'KF11E1575594', 'KF1114GK572475', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('590', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'JBK3E1140849', 'JBK319GK141186', 'NFT13C03', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('591', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'JFP2E1247672', 'JFP211GK247988', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('592', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031617', 'JFP1E2395497', 'JFP124GK395482', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('593', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFU1E1427785', 'JFU11XGK428877', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('594', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFU1E1427780', 'JFU113GK428882', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('595', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1576322', 'KF1113GK573228', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('596', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1569336', 'KF111XGK566213', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('597', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1569812', 'KF1116GK566693', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('598', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1572253', 'KF1113GK569163', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('599', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1568375', 'KF1113GK565257', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('600', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'KF11E1572778', 'KF1116GK569674', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('601', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFP1E2414658', 'JFP128GK424952', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('602', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFP1E2414950', 'JFP122GK424963', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('603', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFP1E2414952', 'JFP123GK424969', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('604', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFP1E2414954', 'JFP121GK424971', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('605', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031800', 'JFS2E1064778', 'JFS216GK063312', 'YG2N2LAA', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('606', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031886', 'KC81E1085997', 'KC8112GK085972', 'H5C2R2M1', 'BS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('607', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031886', 'KC81E1086053', 'KC8111GK086692', 'H5C2R2M1', 'RS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('608', 'B9951UIS', '0000-00-00', 'SJ16030955', 'SO16031886', 'KC81E1085794', 'KC8112GK086541', 'H5C2R2M1', 'BS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('609', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1569402', 'KF1117GK566279', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('610', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1572750', 'KF1112GK569641', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('611', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1573907', 'KF1117GK570817', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('612', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1575960', 'KF1112GK572846', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('613', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1576834', 'KF1114GK573741', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('614', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1568376', 'KF1115GK565258', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('615', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1576835', 'KF1115GK573778', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('616', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1569390', 'KF1112GK566268', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('617', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1573930', 'KF1114GK570841', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('618', 'B9739UYY', '0000-00-00', 'SJ16030963', 'SO16031800', 'KF11E1576837', 'KF111XGK573744', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('619', 'B9739UYY', '0000-00-00', 'SJ16030964', 'SO16031886', 'KC81E1086019', 'KC8119GK086651', 'H5C2R2M1', 'RS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('620', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JBP1E1390390', 'JBP113GK392866', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('621', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JBP1E1390194', 'JBP114GK392844', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('622', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFX1E1085891', 'JFX114GK089941', 'D1A2N18M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('623', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFX1E1090421', 'JFX115GK095232', 'D1A2N18M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('624', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFX1E1089916', 'JFX110GK094103', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('625', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JBG1E1193598', 'JBG114GK196404', 'NF12ACF3', 'BB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('626', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP2E1252990', 'JFP21XGK253398', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('627', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP2E1251048', 'JFP214GK251372', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('628', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP2E1253371', 'JFP216GK253690', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('629', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP2E1247950', 'JFP21XGK248265', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('630', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP2E1247957', 'JFP215GK248271', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('631', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP1E2428794', 'JFP124GK417366', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('632', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP1E2382191', 'JFP121GK399912', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('633', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP1E2382041', 'JFP127GK399736', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('634', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFP1E2390001', 'JFP120GK412990', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('635', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFR1E1298616', 'JFR112GK303692', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('636', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFS1E1281421', 'JFS116GK285947', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('637', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFS1E1281110', 'JFS110GK285913', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('638', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032019', 'JFS2E1065299', 'JFS213GK063851', 'YG2N2LAA', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('639', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032122', 'JFW1E1396737', 'JFW111GK385848', 'C1CN16MS', 'BP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('640', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032122', 'JFW1E1392334', 'JFW113GK385432', 'C1CN16MS', 'MP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('641', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032122', 'JFV1E1311923', 'JFV118GK310882', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('642', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032122', 'JBK1E1304248', 'JBK115GK306542', 'NFT13C01', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('643', 'B9578OR', '0000-00-00', 'SJ16031023', 'SO16032122', 'JBK1E1304247', 'JBK114GK306547', 'NFT13C01', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('644', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'JFW1E1385029', 'JFW116GK390222', 'C1CN16M2', 'LS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('645', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'JFU1E1428004', 'JFU118GK429218', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('646', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'JFU1E1427975', 'JFU117GK429212', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('647', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'JFU1E1428022', 'JFU118GK429235', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('648', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'JFU1E1428021', 'JFU116GK429234', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('649', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1575589', 'KF1115GK572470', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('650', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1565057', 'KF1114GK567597', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('651', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1572516', 'KF1111GK569422', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('652', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1572362', 'KF1114GK569270', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('653', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1578004', 'KF1116GK576317', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('654', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1577285', 'KF1112GK578212', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('655', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1576298', 'KF1119GK573203', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('656', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1572552', 'KF1110GK569444', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('657', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032019', 'KF11E1577935', 'KF1115GK576244', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('658', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFW1E1397377', 'JFW117GK386387', 'C1CN16MS', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('659', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1311872', 'JFV118GK310865', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('660', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1315522', 'JFV114GK313990', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('661', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1311825', 'JFV118GK310817', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('662', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1315081', 'JFV113GK313978', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('663', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1310239', 'JFV112GK309114', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('664', 'B9577OR', '0000-00-00', 'SJ16031029', 'SO16032122', 'JFV1E1310319', 'JFV111GK309217', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('665', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JBP1E1390881', 'JBP118GK393320', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('666', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JBP1E1390830', 'JBP11XGK393299', 'AFX12U08', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('667', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JBP1E1390833', 'JBP111GK393241', 'AFX12U08', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('668', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFW1E1385591', 'JFW119GK390506', 'C1CN16M2', 'KC', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('669', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFW1E1385279', 'JFW116GK389989', 'C1CN16M2', 'HF', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('670', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFX1E1085835', 'JFX11XGK089958', 'D1A2N18M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('671', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFX1E1092181', 'JFX112GK095723', 'D1A2N18M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('672', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFX1E1090722', 'JFX116GK095515', 'D1A2N18M', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('673', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFY1E1031599', 'JFY117GK034468', 'D1A2N19M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('674', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFX1E1089908', 'JFX110GK094134', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('675', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'KC82E1022067', 'KC821XGK023105', 'H5C2R2MA', 'XM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('676', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP2E1253379', 'JFP219GK253702', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('677', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP2E1247685', 'JFP212GK248003', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('678', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2421835', 'JFP122GK425935', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('679', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2429091', 'JFP122GK417365', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('680', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2400702', 'JFP123GK400817', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('681', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2421985', 'JFP122GK425918', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('682', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2400703', 'JFP12XGK400815', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('683', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2401092', 'JFP124GK401197', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('684', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2421836', 'JFP12XGK428002', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('685', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFP1E2428444', 'JFP127GK416650', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('686', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFR1E1300048', 'JFR113GK305127', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('687', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFS1E1281400', 'JFS117GK285925', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('688', 'B9562UYY', '0000-00-00', 'SJ16031090', 'SO16032242', 'JFS2E1064955', 'JFS215GK063544', 'YG2N2LAA', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('689', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1428967', 'JFU11XGK430404', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('690', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1431178', 'JFU11XGK432685', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('691', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1428972', 'JFU115GK430374', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('692', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1429098', 'JFU118GK430482', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('693', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1428950', 'JFU114GK430320', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('694', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'JFU1E1429099', 'JFU11XGK430483', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('695', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1572472', 'KF1110GK569377', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('696', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1580161', 'KF1110GK579455', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('697', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1570399', 'KF1113GK567297', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('698', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1581408', 'KF1116GK580867', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('699', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1575751', 'KF1118GK572639', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('700', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032019', 'KF11E1572473', 'KF1111GK569386', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('701', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032122', 'JFV1E1310349', 'JFV111GK309220', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('702', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032122', 'JFV1E1319197', 'JFV111GK318189', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('703', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'JFU1E1431085', 'JFU112GK432597', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('704', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'JFU1E1431083', 'JFU114GK432598', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('705', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'KF11E1575420', 'KF1114GK572623', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('706', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'KF11E1581464', 'KF1116GK580853', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('707', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'KF11E1581482', 'KF111XGK580886', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('708', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'KF11E1580146', 'KF1115GK580875', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('709', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'KF11E1575728', 'KF1111GK572630', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('710', 'B9475UYT', '0000-00-00', 'SJ16031102', 'SO16032242', 'JFP1E2401070', 'JFP123GK401174', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('711', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFX1E1085842', 'JFX118GK089974', 'D1A2N18M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('712', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFX1E1090614', 'JFX116GK095417', 'D1A2N18M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('713', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFX1E1094682', 'JFX113GK094869', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('714', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFU1E1428906', 'JFU116GK430304', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('715', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFU1E1431086', 'JFU119GK432595', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('716', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFU1E1428901', 'JFU118GK430305', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('717', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFU1E1431246', 'JFU117GK432739', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('718', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFU1E1431087', 'JFU113GK432592', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('719', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'KF11E1567902', 'KF1112GK567307', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('720', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP2E1253409', 'JFP214GK253736', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('721', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP2E1247635', 'JFP219GK247964', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('722', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP2E1253789', 'JFP216GK254404', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('723', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP2E1253787', 'JFP216GK254399', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('724', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2391400', 'JFP126GK409138', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('725', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2428729', 'JFP120GK416943', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('726', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2391385', 'JFP124GK409123', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('727', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2391316', 'JFP127GK409052', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('728', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2428724', 'JFP123GK416953', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('729', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFP1E2428762', 'JFP129GK416973', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('730', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFR1E1300054', 'JFR119GK305200', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('731', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFS1E1281164', 'JFS116GK285897', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('732', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032394', 'JFS1E1281302', 'JFS11XGK287166', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('733', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032452', 'JFW1E1400851', 'JFW118GK388049', 'C1CN16MS', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('734', 'B9561UYY', '0000-00-00', 'SJ16031152', 'SO16032452', 'JFW1E1398549', 'JFW114GK387691', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('735', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'JFU1E1430138', 'JFU116GK431503', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('736', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'JFU1E1428830', 'JFU117GK430358', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('737', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'JFU1E1428863', 'JFU117GK430313', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('738', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1582788', 'KF1110GK581691', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('739', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1582969', 'KF1111GK581859', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('740', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1576062', 'KF1111GK572949', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('741', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1582964', 'KF1114GK581855', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('742', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1576050', 'KF1115GK572937', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('743', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1582787', 'KF1115GK581671', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('744', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'KF11E1582970', 'KF1118GK581860', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('745', 'B9789UDC', '0000-00-00', 'SJ16031163', 'SO16032242', 'JFP1E2402093', 'JFP126GK402206', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('746', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032242', 'JFU1E1428939', 'JFU115GK430309', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('747', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032242', 'JFP1E2402090', 'JFP120GK402203', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('748', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1576491', 'KF1116GK573398', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('749', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1584721', 'KF1118GK583608', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('750', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1576494', 'KF1110GK573400', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('751', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1576490', 'KF1114GK573397', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('752', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1576190', 'KF1110GK573087', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('753', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1584784', 'KF1114GK583699', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('754', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'KF11E1584777', 'KF1112GK583667', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('755', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'JFP1E2408965', 'JFP126GK423704', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('756', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'JFP1E2408969', 'JFP125GK423709', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('757', 'B9791UDC', '0000-00-00', 'SJ16031164', 'SO16032394', 'JFP1E2409016', 'JFP12XGK423754', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('758', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1583001', 'KF1114GK581886', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('759', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1582959', 'KF1115GK581850', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('760', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1582958', 'KF1119GK581849', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('761', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1576067', 'KF1117GK572955', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('762', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1576061', 'KF111XGK572948', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('763', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1582955', 'KF1113GK581846', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('764', 'B9999TST', '0000-00-00', 'SJ16031204', 'SO16032394', 'KF11E1576029', 'KF1114GK572914', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('765', 'B9999TST', '0000-00-00', 'SJ16031205', 'SO16032242', 'KF11E1587539', 'KF1116GK586443', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('766', 'B9999TST', '0000-00-00', 'SJ16031205', 'SO16032394', 'JFX1E1090569', 'JFX115GK095361', 'D1A2N18M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('767', 'B9999TST', '0000-00-00', 'SJ16031205', 'SO16032394', 'KF11E1587581', 'KF1110GK586485', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('768', 'B9999TST', '0000-00-00', 'SJ16031205', 'SO16032394', 'KF11E1587540', 'KF1118GK586444', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('769', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFW1E1386501', 'JFW117GK391413', 'C1CN16M2', 'KC', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('770', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFW1E1387494', 'JFW118GK392487', 'C1CN16M2', 'LS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('771', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFW1E1386486', 'JFW116GK391550', 'C1CN16M2', 'HF', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('772', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFW1E1385530', 'JFW117GK390536', 'C1CN16M2', 'KC', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('773', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFX1E1094732', 'JFX111GK094983', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('774', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFX1E1094780', 'JFX110GK094974', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('775', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFU1E1431026', 'JFU111GK432624', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('776', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFU1E1429036', 'JFU117GK430411', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('777', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFU1E1430390', 'JFU115GK431783', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('778', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KC61E1043752', 'KC6112GK043788', 'GL15C21A', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('779', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KF11E1584737', 'KF1114GK583623', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('780', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KF11E1584732', 'KF1112GK583619', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('781', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KF11E1578489', 'KF1113GK576792', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('782', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KF11E1574352', 'KF1116GK571263', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('783', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'JFR1E1302084', 'JFR111GK307152', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('784', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032500', 'KB11E1055097', 'KB1112GK056577', 'Y3B2R17L', 'MP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('785', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'JFW1E1396945', 'JFW113GK385947', 'C1CN16MS', 'BP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('786', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'JFW1E1401476', 'JFW110GK388515', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('787', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'JFW1E1397715', 'JFW110GK386747', 'C1CN16MS', 'BP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('788', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'JFW1E1400918', 'JFW117GK388415', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('789', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'JFW1E1400993', 'JFW110GK388496', 'C1CN16MS', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('790', 'B9951UIS', '0000-00-00', 'SJ16031212', 'SO16032573', 'KC82E1015907', 'KC8210GK019760', 'H5C2R2MB', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('791', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1319368', 'JFV111GK318290', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('792', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1310295', 'JFV110GK309189', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('793', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1310298', 'JFV113GK309185', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('794', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1319327', 'JFV111GK318239', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('795', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1319367', 'JFV115GK318289', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('796', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1312991', 'JFV110GK312092', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('797', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1312990', 'JFV112GK312093', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('798', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1312996', 'JFV113GK312085', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('799', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032500', 'JFV1E1310392', 'JFV118GK309294', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('800', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032621', 'JBM2E1005793', 'JBM217GK006785', 'AFP12W08', 'BY', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('801', 'B9999TST', '0000-00-00', 'SJ16031223', 'SO16032621', 'JBM2E1005763', 'JBM211GK006751', 'AFP12W08', 'BY', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('802', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032394', 'KF11E1586308', 'KF1111GK585216', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('803', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1313943', 'JFV119GK313273', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('804', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1316224', 'JFV114GK315240', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('805', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1311755', 'JFV113GK310756', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('806', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1324507', 'JFV118GK321199', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('807', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1324562', 'JFV117GK321257', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('808', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'JFV1E1316258', 'JFV112GK315205', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('809', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'KF11E1584991', 'KF1118GK585357', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('810', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'KF11E1586500', 'KF1113GK585394', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('811', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'KF11E1587590', 'KF1111GK586494', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('812', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032500', 'KF11E1587554', 'KF1118GK586458', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('813', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'JFV1E1316025', 'JFV114GK315223', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('814', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KC82E1022444', 'KC8218GK023426', 'H5C2R2MA', 'XM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('815', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1584269', 'KF1111GK583157', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('816', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1586441', 'KF1115GK585347', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('817', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1586658', 'KF1115GK585574', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('818', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1586346', 'KF1116GK585244', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('819', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1587556', 'KF1116GK586460', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('820', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1578492', 'KF1119GK576795', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('821', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'KF11E1578490', 'KF1115GK576793', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('822', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'JFR1E1312347', 'JFR117GK321041', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('823', 'B9999TST', '0000-00-00', 'SJ16031300', 'SO16032682', 'JFR1E1306255', 'JFR114GK311955', 'X1B2N7L0', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('824', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JBP1E1391247', 'JBP11XGK393741', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('825', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFW1E1387536', 'JFW11XGK392524', 'C1CN16M2', 'MS', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('826', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFW1E1403029', 'JFW117GK394120', 'C1CN16MS', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('827', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFW1E1402468', 'JFW113GK388928', 'C1CN16MS', 'HP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('828', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFX1E1090559', 'JFX112GK095348', 'D1A2N18M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('829', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFY1E1031939', 'JFY115GK034954', 'D1A2N19M', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('830', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFY1E1031807', 'JFY112GK034801', 'D1A2N19M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('831', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFX1E1095012', 'JFX117GK100236', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('832', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFU1E1430729', 'JFU112GK432423', 'EF02N11S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('833', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFU1E1436059', 'JFU11XGK438034', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('834', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFV1E1311052', 'JFV112GK310084', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('835', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFV1E1324402', 'JFV118GK321283', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('836', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'KF11E1586556', 'KF1113GK585556', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('837', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'KF11E1581755', 'KF1114GK579653', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('838', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JBK3E1139095', 'JBK315GK139449', 'NFT13C03', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('839', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFP1E2405955', 'JFP120GK414108', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('840', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFP1E2423073', 'JFP124GK446267', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('841', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFP1E2423427', 'JFP125GK443491', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('842', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFR1E1296732', 'JFR119GK302250', 'X1B2N7L0', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('843', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFR1E1302046', 'JFR111GK307118', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('844', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'KB11E1055404', 'KB1111GK057025', 'Y3B2R17L', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('845', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFS1E1281096', 'JFS116GK287150', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('846', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFS2E1065367', 'JFS210GK063905', 'YG2N2LAA', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('847', 'B9577OR', '0000-00-00', 'SJ16031359', 'SO16032682', 'JFS2E1065235', 'JFS210GK063807', 'YG2N2LAA', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('848', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFW1E1388344', 'JFW114GK397394', 'C1CN16M2', 'KC', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('849', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFX1E1093321', 'JFX119GK096237', 'D1A2N18M', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('850', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFX1E1093375', 'JFX114GK096274', 'D1A2N18M', 'WH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('851', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFX1E1095232', 'JFX114GK100517', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('852', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFX1E1095373', 'JFX116GK100499', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('853', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFU1E1436033', 'JFU119GK438011', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('854', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFU1E1436035', 'JFU11XGK438003', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('855', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFU1E1436038', 'JFU110GK437698', 'EF02N11S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('856', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1314927', 'JFV113GK313589', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('857', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1325492', 'JFV116GK322285', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('858', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1316203', 'JFV11XGK315176', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('859', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1314926', 'JFV118GK313586', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('860', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1316188', 'JFV110GK315168', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('861', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFV1E1325491', 'JFV11XGK322290', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('862', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'KF11E1582206', 'KF1111GK581215', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('863', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'KF11E1581808', 'KF1113GK579708', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('864', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'KF11E1582313', 'KF1118GK581213', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('865', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFP2E1254125', 'JFP219GK254140', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('866', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFP1E2434668', 'JFP120GK446685', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('867', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFP1E2398946', 'JFP12XGK411751', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('868', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'JFP1E2432276', 'JFP125GK446293', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('869', 'B9562UYY', '0000-00-00', 'SJ16031364', 'SO16032895', 'KB11E1055371', 'KB1110GK056934', 'Y3B2R17L', 'MP', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('870', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'KF11E1586064', 'KF1110GK584963', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('871', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'KF11E1586348', 'KF111XGK585246', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('872', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'KF11E1586664', 'KF1114GK585579', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('873', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'KF11E1586668', 'KF1118GK585584', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('874', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'KF11E1581806', 'KF111XGK579706', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('875', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279959', 'JFS112GK285590', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('876', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279852', 'JFS114GK285798', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('877', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279957', 'JFS119GK285585', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('878', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279913', 'JFS118GK285562', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('879', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279958', 'JFS114GK285591', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('880', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279816', 'JFS110GK285779', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('881', 'B9789UDC', '0000-00-00', 'SJ16031409', 'SO16032895', 'JFS1E1279586', 'JFS112GK285735', 'YG02N2L1', 'PH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('882', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16032682', 'KF11E1560268', 'KF1117GK557145', 'K1H2N14S', 'BW', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('883', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16032895', 'JFR1E1316860', 'JFR119GK298667', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('884', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16032895', 'JFR1E1311547', 'JFR11XGK320353', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('885', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16032895', 'JFR1E1274151', 'JFR112GK279300', 'X1B2N7L0', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('886', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBP1E1391331', 'JBP118GK393950', 'AFX12U08', 'MH', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('887', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBP1E1392079', 'JBP114GK394013', 'AFX12U8A', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('888', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFX1E1092721', 'JFX11XGK096344', 'D1A2N18M', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('889', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFX1E1095722', 'JFX118GK100911', 'D1A2N8MA', 'GR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('890', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBK1E1305555', 'JBK114GK307505', 'NFT13C01', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('891', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBK1E1305690', 'JBK112GK307924', 'NFT13C01', 'BB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('892', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBK1E1305658', 'JBK118GK307751', 'NFT13C01', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('893', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JBK2E1096520', 'JBK219GK096963', 'NFT13C02', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('894', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP2E1252420', 'JFP216GK252734', 'X1B2N4LA', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('895', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP2E1254111', 'JFP217GK254153', 'X1B2N4LA', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('896', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP2E1258956', 'JFP218GK259295', 'X1B2N4LA', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('897', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2428118', 'JFP128GK416415', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('898', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2426685', 'JFP122GK441858', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('899', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2426681', 'JFP125GK441854', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('900', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2435183', 'JFP127GK453116', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('901', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2426718', 'JFP122GK441889', 'X1B2N4LO', 'PB', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('902', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFP1E2435200', 'JFP126GK453186', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('903', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFR1E1302125', 'JFR110GK307188', 'X1B2N7L0', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('904', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFR1E1298096', 'JFR11XGK303181', 'X1B2N7L0', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('905', 'B9888JJ', '0000-00-00', 'SJ16031454', 'SO16033021', 'JFR1E1297963', 'JFR113GK317374', 'X1B2N7L0', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('906', 'B9577OR', '0000-00-00', 'SJ16031463', 'SO16033021', 'KC82E1022820', 'KC8213GK023799', 'H5C2R2MA', 'XM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('907', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1319252', 'JFV112GK318329', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('908', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1326986', 'JFV112GK323921', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('909', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1319269', 'JFV116GK318382', 'EF02N12S', 'BG', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('910', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1326981', 'JFV111GK323912', 'EF02N12S', 'RD', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('911', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1315811', 'JFV11XGK314366', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('912', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFV1E1315812', 'JFV111GK314370', 'EF02N12S', 'WL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('913', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1581811', 'KF1113GK579711', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('914', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1586297', 'KF1118GK585200', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('915', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1586207', 'KF1113GK585105', 'K1H2N14S', 'BR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('916', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1585785', 'KF1119GK584962', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('917', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1589867', 'KF1113GK588778', 'K1H2N14S', 'BL', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('918', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1586319', 'KF1115GK585266', 'K1H2N14S', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('919', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'KF11E1581659', 'KF111XGK579558', 'K1H2N14S', 'WR', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('920', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFP1E2431182', 'JFP123GK420498', 'X1B2N4LO', 'BK', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('921', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFP1E2427790', 'JFP125GK416159', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);
INSERT INTO `penerimaan_motor_temp` VALUES ('922', 'B9474UYT', '0000-00-00', 'SJ16031464', 'SO16033021', 'JFP1E2427988', 'JFP121GK416076', 'X1B2N4LO', 'PM', '2016', '1', null, '20161226225028-excel_penerimaan_motor.xlsx', null, '6', null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_harga_motor
-- ----------------------------
INSERT INTO `t_harga_motor` VALUES ('1', 'SO/MKA-2016/XII/000001', 'Kredit', 'Inoy YTh', 'WO', '4000000', '200000', '3800000', '1000000', '2800000', '1', '200000', '1', '2016-12-27 23:59:52', '2016-12-30 23:49:22', null, '6', '6', null);
INSERT INTO `t_harga_motor` VALUES ('14', 'SO/MKA-2017/I/000002', 'Cash', 'Inoy', '', '15000000', '200000', '14800000', '14800000', '0', '2', '0', '1', '2017-01-29 00:55:00', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('15', 'SO/MKA-2017/I/000015', 'Kredit', 'Inoy', 'WO', '500000', '0', '500000', '500000', '0', '2', '0', '1', '2017-01-29 00:56:54', null, null, '6', null, null);
INSERT INTO `t_harga_motor` VALUES ('17', 'SO/MKA-2017/I/000016', 'Cash', 'Inoy', '', '16000000', '0', '16000000', '5000000', '11000000', '2', '100000', '1', '2017-01-29 01:07:01', null, null, '6', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_kwitansi_diskon
-- ----------------------------
INSERT INTO `t_kwitansi_diskon` VALUES ('5', 'KWT/KDS-2016-XII-000001', 'SO/MKA-2016/XI/000001', '1000000', '1', '2016-12-12 16:18:49', null, null, '6', null, null);
INSERT INTO `t_kwitansi_diskon` VALUES ('6', 'KWT/KDS-2016-XII-000006', 'SO/MKA-2016/XI/000001', '1000000', '1', '2016-12-12 17:36:19', null, null, '6', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_kwitansi_fee
-- ----------------------------
INSERT INTO `t_kwitansi_fee` VALUES ('7', 'KWT/KF-2016-XII-000001', 'SO/MKA-2016/XI/000001', '500000', '1', '2016-12-12 18:39:55', null, null, '6', null, null);

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
  `m_status` int(5) DEFAULT NULL,
  `sys_create_user` varchar(10) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_kwitansi_leasing
-- ----------------------------
INSERT INTO `t_kwitansi_leasing` VALUES ('25', 'KWT/MKA/FIF/I/000001', 'SO/MKA-2016/XII/000001', '4000000', '11000000', '0', '0', '1', '6', '2017-01-16 18:51:25');
INSERT INTO `t_kwitansi_leasing` VALUES ('26', 'KWT/MKA/FIF/I/000026', 'SO/MKA-2016/XII/000001', '4000000', '11000000', '5000', '50000', '1', '6', '2017-01-21 08:30:04');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pdi
-- ----------------------------
INSERT INTO `t_pdi` VALUES ('1', 'PDI-2017/I/000001', 'SO/MKA-2016/XII/000001', 'SJ-2017/I/000001', '2017-01-22', 'Yusuf', '1', '2017-01-25', '2', '6', '1', '2017-01-04', '2017-01-22', null, '6', '6', null);

-- ----------------------------
-- Table structure for `t_pdi_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_pdi_detail`;
CREATE TABLE `t_pdi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdi_id` int(11) DEFAULT NULL,
  `aksesoris_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pdi_detail
-- ----------------------------
INSERT INTO `t_pdi_detail` VALUES ('50', '1', '1');
INSERT INTO `t_pdi_detail` VALUES ('51', '1', '5');
INSERT INTO `t_pdi_detail` VALUES ('52', '1', '9');
INSERT INTO `t_pdi_detail` VALUES ('53', '1', '7');
INSERT INTO `t_pdi_detail` VALUES ('54', '1', '11');
INSERT INTO `t_pdi_detail` VALUES ('55', '1', '13');
INSERT INTO `t_pdi_detail` VALUES ('56', '1', '15');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------
INSERT INTO `t_pembayaran` VALUES ('16', 'KWT/KD/2017/I/000001', 'SO/MKA-2016/XII/000001', '2', '2000000', '2017-01-28', '1', '2017-01-04 00:25:29', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('26', 'KWT/KD/2017/I/000017', 'SO/MKA-2017/I/000002', '4', '14800000', '2017-01-29', '1', '2017-01-29 00:55:00', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('27', 'KWT/KD/2017/I/000027', 'SO/MKA-2017/I/000015', '4', '500000', '2017-01-29', '1', '2017-01-29 00:56:54', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('29', 'KWT/KD/2017/I/000028', 'SO/MKA-2017/I/000016', '1', '5000000', '2017-01-29', '1', '2017-01-29 01:07:01', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('30', 'KWT/KD/2017/I/000030', 'SO/MKA-2017/I/000016', '2', '3000000', '2017-01-29', '1', '2017-01-29 23:36:57', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('31', 'KWT/KD/2017/I/000031', 'SO/MKA-2017/I/000016', '3', '4000000', '2017-01-31', '1', '2017-01-29 23:37:26', null, null, '6', null, null);
INSERT INTO `t_pembayaran` VALUES ('33', 'KWT/KD/2017/I/000032', 'SO/MKA-2017/I/000016', '4', '4000000', '2017-01-30', '1', '2017-01-30 00:58:20', null, null, '6', null, null);

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
  `m_status` enum('1','2','3','4') DEFAULT NULL COMMENT '1=>active,2=>not active,3=>deleted,4=>void',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noso` (`noso`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_penjualan
-- ----------------------------
INSERT INTO `t_penjualan` VALUES ('1', null, 'SO/MKA-2016/XII/000001', null, '1234', '2016-12-27', 'JBP1E1380984', 'MH', '15000000', '1', '6', '6', null, '2016-12-27 23:59:52', '2016-12-30 23:49:22', null);
INSERT INTO `t_penjualan` VALUES ('14', null, 'SO/MKA-2017/I/000002', null, '1234', '2017-01-29', 'JBP1E1380986', 'MH', '15000000', '1', '6', null, null, '2017-01-29 00:55:00', null, null);
INSERT INTO `t_penjualan` VALUES ('15', null, 'SO/MKA-2017/I/000015', null, '1234', '2017-01-29', 'JBP1E1384326', 'BK', '16000000', '1', '6', null, null, '2017-01-29 00:56:54', null, null);
INSERT INTO `t_penjualan` VALUES ('17', null, 'SO/MKA-2017/I/000016', null, '1234', '2017-01-29', 'JBP1E1384326', 'BK', '16000000', '1', '6', null, null, '2017-01-29 01:07:01', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_stnk
-- ----------------------------
INSERT INTO `t_stnk` VALUES ('8', 'SO/MKA-2016/XII/000002', 'SB-2017-01-000001', '2017-01-20', '2017-02-03', '2017-01-20', '2017-04-20', '1', '2017-01-20 23:36:18', '2017-01-21 00:24:07', '2017-01-21 00:27:44', '6', '6', '6');
INSERT INTO `t_stnk` VALUES ('9', 'SO/MKA-2016/XII/000001', 'SB-2017-01-000009', '2017-01-18', '2017-02-01', '2017-01-27', '2017-04-27', '1', '2017-01-21 00:24:38', '0000-00-00 00:00:00', null, '6', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_stnk_bpkb
-- ----------------------------
INSERT INTO `t_stnk_bpkb` VALUES ('1', 'SB-2016-12-000001', 'SO/MKA-2016/XI/000001', '2016-12-19', '2016-12-20', '2017-01-02', '0000-00-00', '1234', '1', '2016-12-19', '0000-00-00', '0000-00-00', '6', null, null);
INSERT INTO `t_stnk_bpkb` VALUES ('2', '1	SB-2016-12-000001	SO/MK', null, null, null, null, null, null, null, null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_stnk_customer
-- ----------------------------
INSERT INTO `t_stnk_customer` VALUES ('9', '8', '1234', 'Inoy YthXX', 'Jakarta XXX', '2016-12-27', 'P', 'Jl. STM', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '021-31212121', '0877889911369', '2017-01-20', '2017-01-21', null, '6', '6', null);
INSERT INTO `t_stnk_customer` VALUES ('10', '9', '1234', 'Inoy Ganteng', 'Jakarta ajah', '2016-12-27', 'P', 'Jl. STM', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '021-31212121', '0877889911369', '2017-01-21', null, null, '6', null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_terima_stnk
-- ----------------------------
INSERT INTO `t_terima_stnk` VALUES ('2', '9', '3', 'B1234ASU', '0216464664', '5464646405', '2017-01-22', '2017-01-22', 'BON 123', 'BON 321', '30000', '50000', 'untuk biaya ongkos bensin', null, '1', '6', '6', '6', '2017-01-21 19:10:18', '2017-01-21 19:45:35', '2017-01-21 19:46:55');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_void
-- ----------------------------
