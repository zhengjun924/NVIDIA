/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : 127.0.0.1:3306
 Source Schema         : nvidia

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 15/07/2018 20:08:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for num
-- ----------------------------
DROP TABLE IF EXISTS `num`;
CREATE TABLE `num`  (
  `mid` int(4) NOT NULL AUTO_INCREMENT,
  `invite_num` char(6) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price_num` char(6) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`mid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of num
-- ----------------------------
INSERT INTO `num` VALUES (1, '123456', NULL);
INSERT INTO `num` VALUES (2, '345678', NULL);
INSERT INTO `num` VALUES (3, '456789', NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pass` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sex` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '男',
  `age` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `job` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pro` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `company` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `joinmeet` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '是',
  `know` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mainjob` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `area` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `des` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `engineer` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `buy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `get` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `edu` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `eat` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `study` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `type` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` char(4) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `company_num` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `receipt` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '否',
  `way` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '否',
  `first_day` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `second_day` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (30, '郑君', 'zhengjun', 'e10adc3949ba59abbe56e057f20f883e', '男', '25', '总裁', '18612881244', 'zhengjun@qq.com', '江苏', '苏州市', '黑马程序员', '江苏苏州市京顺路99号', '是', '大会广告', '执行管理者', '3D打印，算法与数值技术', '汽车', '否', '否，但我可以影响决策', '你好', '博士', '普通西餐', '否', '普通观众票', '￥580', '行业用户', '', '是', '是', 'undefined undefined,undefined undefined', 'undefined undefined,undefined undefined,undefined undefined');

-- ----------------------------
-- Table structure for worker
-- ----------------------------
DROP TABLE IF EXISTS `worker`;
CREATE TABLE `worker`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `depart` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `duty` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of worker
-- ----------------------------
INSERT INTO `worker` VALUES (1, '郑', '+0086-18612881244', 'zhengjun@qq.com', '后勤', '场地维护');
INSERT INTO `worker` VALUES (2, '郑', '+0086-12345678900', 'zhengjun@qq.com', '后勤', '安保');
INSERT INTO `worker` VALUES (3, '郑', '+0086-1861288124', 'zhengjun@qq.com', '后勤', '场地维护');
INSERT INTO `worker` VALUES (4, '郑', '+0086-79855222222', 'leng@qq.com', '后勤', '场地维护');
INSERT INTO `worker` VALUES (5, '郑', '+0086-12345678900', 'zhengjun@qq.com', '后勤', '场地维护');
INSERT INTO `worker` VALUES (6, '郑', '+0086-79855222222', 'zhengjun123@qq.com', '后勤', '销售顾问');
INSERT INTO `worker` VALUES (7, '郑', '+0086-12345678900', '1233@ww.com', 'csdcs', '销售顾问');
INSERT INTO `worker` VALUES (8, '郑', '+0086-18612881244', 'zhengjun@qq.com', '后勤', '销售顾问');
INSERT INTO `worker` VALUES (9, '郑君', '+0086-18612881244', 'zhengjun@qq.com', '后勤', '请选择/Please Select');

SET FOREIGN_KEY_CHECKS = 1;
