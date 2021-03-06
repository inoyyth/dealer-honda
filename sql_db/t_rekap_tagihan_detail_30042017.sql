/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-04-30 16:09:45
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `price_list` float DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_rekap_tagihan_detail
-- ----------------------------
INSERT INTO `t_rekap_tagihan_detail` VALUES ('38', '1', null, null, 'TGH/MKA-REK/2017/000001', null, '6', '2017-04-04 04:14:47', null, null, '1', '0', '0');
INSERT INTO `t_rekap_tagihan_detail` VALUES ('40', '2', null, null, 'TGH/MKA-REK/2017/000002', null, '6', '2017-05-01 03:53:31', null, null, '1', '0', '0');
