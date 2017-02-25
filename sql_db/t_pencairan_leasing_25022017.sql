/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-02-25 08:59:28
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `total_penagihan` double DEFAULT NULL,
  `total_pencairan` double DEFAULT NULL,
  `sisa_tagihan` double DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing_detail
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_rekap_tagihan
-- ----------------------------
INSERT INTO `t_rekap_tagihan` VALUES ('1', 'TGH/MKA-REK/2017/000001', '2017-02-16 00:00:00', '11400000', '11500000', 'WO', 'Rawamangun', '6', '2017-02-16 14:52:18', '6', '2017-02-25 05:18:19', '1', '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_rekap_tagihan_detail
-- ----------------------------
INSERT INTO `t_rekap_tagihan_detail` VALUES ('1', '2', null, null, 'TGH/MKA-REK/2017/000001', '6', '2017-02-16 14:52:18', '6', '2017-02-25 05:18:19', '1', '1', '0');
INSERT INTO `t_rekap_tagihan_detail` VALUES ('2', '3', null, null, 'TGH/MKA-REK/2017/000001', '6', '2017-02-16 14:52:18', '6', '2017-02-25 05:18:19', '1', '0', '0');
