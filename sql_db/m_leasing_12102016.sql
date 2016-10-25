/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-10-12 07:36:55
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `status_leasing` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`kd_leasing`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_leasing
-- ----------------------------
INSERT INTO `m_leasing` VALUES ('1', 'LSN-0001', 'WOW FINANCE', 'JL. Jagakarasa No.56 Jakarta Selatan', '021888998933', 'womfinance@gmail.com', '1', '2', '1', '1', null, '2016-10-12 07:08:43', '2016-10-12 07:14:18', null);
