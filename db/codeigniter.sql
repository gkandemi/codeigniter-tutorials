/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : codeigniter

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-11-11 20:01:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for personel
-- ----------------------------
DROP TABLE IF EXISTS `personel`;
CREATE TABLE `personel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `detail` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin5;

-- ----------------------------
-- Records of personel
-- ----------------------------
INSERT INTO `personel` VALUES ('1', 'kablosuzkedi', 'kablosuzkedi kanalinin sahibidir... pogaca bey..');
INSERT INTO `personel` VALUES ('7', ' ilker ismailoglu', 'basarili bir frontend developer');
INSERT INTO `personel` VALUES ('13', 'Can askin', 'basarili bir genc girisimci');
INSERT INTO `personel` VALUES ('14', 'Omer Burak Vural', 'tam bir sistem admini :) ');
INSERT INTO `personel` VALUES ('15', 'Cagdas karabag', 'fularli muhendis');
INSERT INTO `personel` VALUES ('17', 'Tayfun Er', 'Cok Delikanli bir adam!!');
INSERT INTO `personel` VALUES ('18', 'Felakettin', 'Caliskan bir ogrenci');
INSERT INTO `personel` VALUES ('19', 'Tayfun Er', 'Cok Delikanli bir adam!!');
INSERT INTO `personel` VALUES ('20', 'Tayfun Er', 'Cok Delikanli bir adam!!');
INSERT INTO `personel` VALUES ('21', 'Tayfun Er', 'Cok Delikanli bir adam!!');
INSERT INTO `personel` VALUES ('22', 'Tayfun Er', 'Cok Delikanli bir adam!!');
INSERT INTO `personel` VALUES ('23', 'Tayfun Er', 'Cok Delikanli bir adam!!');
