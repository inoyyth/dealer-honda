/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-04-07 09:37:26
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `menus` VALUES ('54', '5', 'laporan', 'Penjualan', 'fa fa-circle', 'laporan-penjualan', '1', '1');
INSERT INTO `menus` VALUES ('55', '5', 'laporan', 'Saldo', 'fa fa-circle', 'laporan-saldo', '2', '1');
INSERT INTO `menus` VALUES ('56', '5', 'laporan', 'Print Stok', 'fa fa-circle', 'print-stok', '3', '1');
INSERT INTO `menus` VALUES ('59', '2', 't_terima_stnk', 'TT STNK & BPKB', 'fa fa-circle', 'terima-stnk', '5', '1');
INSERT INTO `menus` VALUES ('60', '1', 'md_owner_info', 'Owner Setting', 'fa fa-circle', 'owner', '10', '1');
