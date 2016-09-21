/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : assets_scan

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-09-21 15:16:07
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `asset`
-- ----------------------------
DROP TABLE IF EXISTS `asset`;
CREATE TABLE `asset` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `numbering` varchar(64) NOT NULL COMMENT '资产编号',
  `name` varchar(64) NOT NULL COMMENT '资产名称',
  `ip` varchar(64) DEFAULT NULL COMMENT 'ip地址',
  `mask` varchar(32) DEFAULT NULL COMMENT '掩码',
  `hostname` varchar(256) DEFAULT NULL COMMENT '主机名称',
  `macascii` varchar(32) DEFAULT NULL COMMENT 'MAC地址',
  `macvendor` varchar(32) DEFAULT NULL COMMENT 'MAC厂商',
  `os_type` varchar(128) DEFAULT NULL COMMENT '操作系统类型',
  `os_detail` varchar(128) DEFAULT NULL COMMENT '操作系统详情',
  `type` int(11) DEFAULT NULL COMMENT '资产类型',
  `vendor` varchar(256) DEFAULT NULL COMMENT '设备厂商',
  `create_time` date DEFAULT NULL COMMENT '添加时间',
  `zone` int(11) DEFAULT NULL COMMENT '区域',
  `desc` text COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of asset
-- ----------------------------
INSERT INTO `asset` VALUES ('1', '1001011504001 ', '服务器', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('2', '1001011504002 ', '服务器', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows 10', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('3', '1001011504003 ', '服务器', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('4', '1001011504004 ', '服务器', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('6', '1001011504006 ', '员工设备', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('7', '1001011504007 ', '员工设备', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('8', '1001011504008 ', '员工设备', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows Server 2008', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('9', '1001011504009 ', '员工设备', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('10', '1001011504010 ', '员工设备', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('11', '1001011504011 ', '员工设备', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('12', '1001011504012 ', '员工设备', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('13', '1001011504013 ', '员工设备', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('14', '1001011504014 ', '员工设备', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('15', '1001011504015 ', '员工设备', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('16', '1001011504016 ', '员工设备', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('17', '1001011504017 ', '员工设备', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('18', '1001011504018 ', '员工设备', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('19', '1001011504019 ', '员工设备', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('20', '1001011504020 ', '员工设备', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('21', '1001011504021 ', '员工设备', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('22', '1001011504022 ', '员工设备', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Win 7', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('23', '1001011504023 ', '员工设备', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('24', '1001011504024 ', '员工设备', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('25', '1001011504025 ', '员工设备', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('26', '1001011504026 ', '员工设备', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows 10', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('27', '1001011504027 ', '员工设备', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('28', '1001011504028 ', '员工设备', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('29', '1001011504029 ', '员工设备', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows 10', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('30', '1001011504030 ', '员工设备', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('31', '1001011504031 ', '员工设备', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('32', '1001011504032 ', '员工设备', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows 10', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('33', '1001011504033 ', '员工设备', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('34', '1001011504034 ', '员工设备', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('35', '1001011504035 ', '员工设备', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('36', '1001011504036 ', '员工设备', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('37', '1001011504037 ', '员工设备', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('38', '1001011504038 ', '员工设备', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('39', '1001011504039 ', '员工设备', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('40', '1001011504040 ', '员工设备', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('41', '1001011504041 ', '员工设备', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('42', '1001011504042 ', '员工设备', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('43', '1001011504043 ', '员工设备', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('44', '1001011504044 ', '员工设备', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'MAC', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('45', '1001011504045 ', '员工设备', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('46', '1001011504046 ', '', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('47', '1001011504047 ', '', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('48', '1001011504048 ', '', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('49', '1001011504049 ', '', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('50', '1001011504050 ', '', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('51', '1001011504051 ', '', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('52', '1001011504052 ', '', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('53', '1001011504053 ', '', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('54', '1001011504054 ', '', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('55', '1001011504055 ', '', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('56', '1001011504056 ', '', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('57', '1001011504057 ', '', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('58', '1001011504058 ', '', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('59', '1001011504059 ', '', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('60', '1001011504060 ', '', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('61', '1001011504061 ', '', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('62', '1001011504062 ', '', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('63', '1001011504063 ', '', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('64', '1001011504064 ', '', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('65', '1001011504065 ', '', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('66', '1001011504066 ', '', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('67', '1001011504067 ', '', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('68', '1001011504068 ', '', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('69', '1001011504069 ', '', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('70', '1001011504070 ', '', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('71', '1001011504071 ', '', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('72', '1001011504072 ', '', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('73', '1001011504073 ', '', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('74', '1001011504074 ', '', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('75', '1001011504075 ', '', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('76', '1001011504076 ', '', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('77', '1001011504077 ', '', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('78', '1001011504078 ', '', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('79', '1001011504079 ', '', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('80', '1001011504080 ', '', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('81', '1001011504081 ', '', '10.65.64.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '6', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('82', '1001011504082 ', '', '10.65.128.55', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '7', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('83', '1001011504083 ', '', '10.65.1.22', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '8', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('84', '1001011504084 ', '', '10.65.1.23', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '9', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('85', '1001011504085 ', '', '10.65.1.24', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '99', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('86', '1001011504086 ', '', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('87', '1001011504087 ', '', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('88', '1001011504088 ', '', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('89', '1001011504089 ', '', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('90', '1001011504090 ', '', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('91', '1001011504091 ', '', '10.65.1.25', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '1', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('92', '1001011504092 ', '', '10.65.1.26', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '2', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('93', '1001011504093 ', '', '10.65.1.27', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '3', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('94', '1001011504094 ', '', '10.65.1.28', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '4', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('95', '1001011504095 ', '', '10.65.1.29', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '5', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('96', '1001011504096 ', '', '10.65.255.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '1', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('97', '1001011504097 ', '', '10.65.1.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '2', 'Microsoft', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('98', '1001011504098 ', '', '10.65.64.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Unix', 'HP-UNIX', '3', 'HP', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('99', '1001011504099 ', '', '10.65.128.254', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Linux', 'Linux 2.6', '4', 'Linux', '2016-09-06', null, null);
INSERT INTO `asset` VALUES ('100', '1001011504100 ', '', '10.65.1.228', '255.255.0.0', 'bogon', '00:0c:29:18:c7:bc', 'Intel', 'Windows', 'Windows 10', '5', 'Microsoft', '2016-09-06', null, null);

-- ----------------------------
-- Table structure for `asset_type`
-- ----------------------------
DROP TABLE IF EXISTS `asset_type`;
CREATE TABLE `asset_type` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(32) DEFAULT NULL COMMENT '资产类型',
  `desc` text COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of asset_type
-- ----------------------------
INSERT INTO `asset_type` VALUES ('0', '主机', '');
INSERT INTO `asset_type` VALUES ('1', '服务器', '');
INSERT INTO `asset_type` VALUES ('2', '打印机', '');
INSERT INTO `asset_type` VALUES ('3', '传真机', '');
INSERT INTO `asset_type` VALUES ('4', '交换机', '');
INSERT INTO `asset_type` VALUES ('5', '路由器', '');
INSERT INTO `asset_type` VALUES ('6', '防火墙', '');
INSERT INTO `asset_type` VALUES ('7', '集线器', '');
INSERT INTO `asset_type` VALUES ('8', '无线路由器', '');
INSERT INTO `asset_type` VALUES ('99', '未知设备', '');

-- ----------------------------
-- Table structure for `assets_port_service`
-- ----------------------------
DROP TABLE IF EXISTS `assets_port_service`;
CREATE TABLE `assets_port_service` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `port` int(11) DEFAULT NULL COMMENT '端口号',
  `protocol` varchar(32) DEFAULT NULL COMMENT '协议类型',
  `status` varchar(32) DEFAULT NULL COMMENT '端口状态',
  `service` varchar(128) DEFAULT NULL COMMENT '服务名称',
  `version` varchar(256) DEFAULT NULL COMMENT '服务版本',
  `ip` varchar(64) DEFAULT NULL COMMENT 'ip地址',
  `create_time` date DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assets_port_service
-- ----------------------------
INSERT INTO `assets_port_service` VALUES ('1', '22', 'tcp', 'up', 'ssh', 'openssh-2.2', '10.65.1.254', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('2', '80', 'tcp', 'up', 'http', 'apache-3.4', '10.65.1.254', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('3', '443', 'tcp', 'up', 'https', 'apache-3.4', '10.65.1.254', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('4', '22', 'tcp', 'up', 'http', 'openssh-2.2', '10.65.64.25', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('5', '80', 'tcp', 'up', 'http', 'apache-3.4', '10.65.64.25', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('6', '3306', 'tcp', 'up', 'mysql', 'mysql', '10.65.64.25', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('7', '21', 'tcp', 'up', 'ftp', 'ftp', '10.65.64.25', '2016-09-06');
INSERT INTO `assets_port_service` VALUES ('8', '25', 'tcp', 'up', 'telnet', 'telnet', '10.65.1.254', '2016-09-06');

-- ----------------------------
-- Table structure for `topo_config`
-- ----------------------------
DROP TABLE IF EXISTS `topo_config`;
CREATE TABLE `topo_config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(128) DEFAULT NULL COMMENT '名称',
  `core_ip` varchar(32) DEFAULT NULL COMMENT '核心IP',
  `layers` int(11) DEFAULT '8' COMMENT '扫描层级',
  `snmp_port` int(11) DEFAULT '161' COMMENT '扫描端口',
  `snmp_timeout` int(11) DEFAULT '5' COMMENT 'SNMP超时时间(s)',
  `icmp_timeout` int(11) DEFAULT '5' COMMENT 'ICMP超时时间(s)',
  `snmp_read_key` varchar(128) DEFAULT 'public' COMMENT 'SNMP读关键字',
  `snmp_write_key` varchar(128) DEFAULT 'private' COMMENT 'SNMP写关键字',
  `filter_subnet` varchar(128) DEFAULT NULL COMMENT '过滤子网',
  `snmp_default_version` int(1) DEFAULT '2' COMMENT 'SNMP默认版本',
  `snmp_retries` int(1) DEFAULT '1' COMMENT 'SNMP重试次数',
  `max_thread` int(3) DEFAULT NULL COMMENT '最大线程数',
  `start_time` int(11) DEFAULT NULL COMMENT '开始时间',
  `end_time` int(11) DEFAULT NULL COMMENT '结束时间',
  `timeout` int(11) DEFAULT NULL COMMENT '扫描超时时间(s)',
  `scan_result` int(11) DEFAULT NULL COMMENT '扫描结果',
  `synchronize_asset` int(11) NOT NULL DEFAULT '1' COMMENT '是否同步资产数据',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topo_config
-- ----------------------------
INSERT INTO `topo_config` VALUES ('1', 'Facebook内网拓扑图', '10.65.255.254', '8', '161', '5', '5', 'public', 'private', null, '2', '1', null, null, null, '36000', null, '1');

-- ----------------------------
-- Table structure for `topo_relation`
-- ----------------------------
DROP TABLE IF EXISTS `topo_relation`;
CREATE TABLE `topo_relation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ip` varchar(32) DEFAULT NULL COMMENT 'ip地址',
  `layer` int(11) DEFAULT NULL COMMENT '发现层级',
  `asset_type` bigint(20) DEFAULT NULL COMMENT '发现层级',
  `parent_ip` varchar(32) DEFAULT NULL COMMENT '父节点ip地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topo_relation
-- ----------------------------
INSERT INTO `topo_relation` VALUES ('1', '10.65.255.254', '1', '6', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('2', '10.65.1.254', '2', '2', '10.65.255.254');
INSERT INTO `topo_relation` VALUES ('3', '10.65.64.254', '2', '5', '10.65.255.254');
INSERT INTO `topo_relation` VALUES ('4', '10.65.128.254', '2', '4', '10.65.255.254');
INSERT INTO `topo_relation` VALUES ('5', '10.65.0.0', '3', '4', '10.65.255.254');
INSERT INTO `topo_relation` VALUES ('6', '10.65.128.56', '3', '2', '10.65.128.254');
INSERT INTO `topo_relation` VALUES ('7', '10.65.128.55', '3', '2', '10.65.128.254');
INSERT INTO `topo_relation` VALUES ('8', '10.65.0.22', '4', '7', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('9', '10.65.0.23', '4', '8', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('10', '10.65.0.24', '4', '99', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('11', '10.65.128.53', '4', '1', '10.65.128.254');
INSERT INTO `topo_relation` VALUES ('12', '10.65.0.26', '4', '1', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('13', '10.65.0.27', '4', '1', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('14', '10.65.0.28', '4', '0', '10.65.0.0');
INSERT INTO `topo_relation` VALUES ('15', '10.65.0.29', '4', '0', '10.65.0.0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` varchar(32) NOT NULL COMMENT '用户id',
  `user_name` varchar(32) NOT NULL COMMENT '用户名称',
  `user_passwd` varchar(32) NOT NULL COMMENT '用户密码',
  `user_mail` varchar(64) DEFAULT NULL COMMENT '用户邮箱',
  `user_tel` varchar(16) DEFAULT NULL COMMENT '用户电话',
  `user_enable` int(2) DEFAULT NULL COMMENT '是否可用',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'assets', '50b9748289910436bfdd34bda7b1c9d9', 'assetsview@sina.cn', '13312345999', '1');
