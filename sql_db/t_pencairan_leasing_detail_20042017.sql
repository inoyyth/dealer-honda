/*
Navicat MySQL Data Transfer

Source Server         : localGW
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-04-20 10:14:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_pencairan_leasing_detail`
-- ----------------------------
DROP TABLE IF EXISTS `t_pencairan_leasing_detail`;
CREATE TABLE `t_pencairan_leasing_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `id_kwitansi` int(11) DEFAULT NULL,
  `no_bukti_potongan` varchar(25) DEFAULT NULL,
  `tgl_pencairan` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pencairan_leasing_detail
-- ----------------------------
INSERT INTO `t_pencairan_leasing_detail` VALUES ('5', 'TGH/MKA-REK/2017/000001', '1', '123AB', '2017-05-05', '6', '2017-04-09 01:55:38', '6', '2017-04-20 23:59:32', '1');
