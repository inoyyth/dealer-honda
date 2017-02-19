/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dealer_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-09-24 10:46:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `status` enum('1','2') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES ('4', 'Director', 'ket director', '1', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('5', 'jkjlkjk', 'lkjlkjl2', '2', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('6', 'kkjhkjh', 'jghjgjgh3', '2', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('7', 'jlkjlkj', 'lkjjyhj4', '2', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('8', 'asfsad', 'tesdfds', '1', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('9', 'sdadsf', 'asdfsdf', '1', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('10', 'vvsdfsfds', 'dsfsafds', '2', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('11', 'sdfsfs', 'sfasdfsadf', '1', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('12', 'trtrtrt', 'fsfsdfds', '2', null, null, null, null, null, null);
INSERT INTO `jabatan` VALUES ('13', 'trtrr', 'sdfdsf', '1', null, null, null, null, null, null);
