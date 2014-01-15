/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : failpay

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2014-01-15 17:02:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for balanses
-- ----------------------------
DROP TABLE IF EXISTS `balanses`;
CREATE TABLE `balanses` (
  `id` smallint(6) NOT NULL,
  `user_id` smallint(5) unsigned DEFAULT NULL,
  `total_time` int(10) unsigned DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tariff
-- ----------------------------
DROP TABLE IF EXISTS `tariff`;
CREATE TABLE `tariff` (
  `id` smallint(5) unsigned NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `cost` smallint(5) unsigned DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` smallint(6) DEFAULT NULL,
  `amount_money` smallint(5) unsigned DEFAULT NULL,
  `amount_time` int(10) unsigned DEFAULT NULL,
  `late_date` int(11) DEFAULT NULL,
  `type_id` smallint(5) unsigned DEFAULT NULL,
  `tariff_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for trans_type
-- ----------------------------
DROP TABLE IF EXISTS `trans_type`;
CREATE TABLE `trans_type` (
  `id` smallint(5) unsigned NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pincode` smallint(6) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
