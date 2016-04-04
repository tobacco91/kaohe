/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : homework

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-01-08 00:12:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for informations
-- ----------------------------
DROP TABLE IF EXISTS `informations`;
CREATE TABLE `informations` (
  `inumber` int(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `calls` int(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  PRIMARY KEY (`inumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of informations
-- ----------------------------
INSERT INTO `informations` VALUES ('2015210510', '张三', '110', '重邮女寝>_<~');
INSERT INTO `informations` VALUES ('2015210511', '李四', '120', '重邮女寝>_<~');
INSERT INTO `informations` VALUES ('2015210512', '嫦娥', '114', '重邮女寝>_<~');
INSERT INTO `informations` VALUES ('2015210513', '后羿', '10086', '重邮女寝>_<~(没错他在女寝)');

-- ----------------------------
-- Table structure for web
-- ----------------------------
DROP TABLE IF EXISTS `web`;
CREATE TABLE `web` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(400) NOT NULL,
  `fullpath` varchar(400) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web
-- ----------------------------
INSERT INTO `web` VALUES ('10', '王', '222');
INSERT INTO `web` VALUES ('11', '杜', '11');
INSERT INTO `web` VALUES ('12', '李', '22222');
INSERT INTO `web` VALUES ('13', '陈海', '111');
INSERT INTO `web` VALUES ('14', '张', '11');
