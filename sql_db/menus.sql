/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-10-09 18:11:30
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
