/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-04-05 19:42:31
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `t_pencairan_leasing` VALUES ('1', 'TGH/MKA-REK/2017/000001', '2017-04-03 00:00:00', 'Cipinang', '2017-04-03 00:00:00', 'ABCD', '27050000', '13900000', '13150000', '6', '2017-04-04 08:58:08', '6', '2017-04-06 09:38:59', '1');

-- ----------------------------
-- Table structure for `t_pencairan_leasing_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_pencairan_leasing_detail`;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing_detail
-- ----------------------------
INSERT INTO `t_pencairan_leasing_detail` VALUES ('4', 'TGH/MKA-REK/2017/000001', '2', '2017-04-04', '6', '2017-04-04 12:22:38', '6', '2017-04-06 09:38:59', '1');

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
