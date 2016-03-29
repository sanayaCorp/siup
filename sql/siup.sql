/*
Navicat MySQL Data Transfer

Source Server         : simpatda
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : siup

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2016-03-28 23:15:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_groups`
-- ----------------------------
DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE `admin_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_groups
-- ----------------------------
INSERT INTO `admin_groups` VALUES ('1', 'webmaster', 'Webmaster');
INSERT INTO `admin_groups` VALUES ('2', 'admin', 'Administrator');
INSERT INTO `admin_groups` VALUES ('3', 'manager', 'Manager');
INSERT INTO `admin_groups` VALUES ('4', 'staff', 'Staff');

-- ----------------------------
-- Table structure for `admin_login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `admin_login_attempts`;
CREATE TABLE `admin_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for `admin_users`
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('1', '127.0.0.1', 'webmaster', '$2y$08$/X5gzWjesYi78GqeAv5tA.dVGBVP7C1e1PzqnYCVe5s1qhlDIPPES', null, null, null, null, null, null, '1451900190', '1459181232', '1', 'Webmaster', '');
INSERT INTO `admin_users` VALUES ('2', '127.0.0.1', 'admin', '$2y$08$7Bkco6JXtC3Hu6g9ngLZDuHsFLvT7cyAxiz1FzxlX5vwccvRT7nKW', null, null, null, null, null, null, '1451900228', '1451903990', '1', 'Admin', '');
INSERT INTO `admin_users` VALUES ('3', '127.0.0.1', 'manager', '$2y$08$snzIJdFXvg/rSHe0SndIAuvZyjktkjUxBXkrrGdkPy1K6r5r/dMLa', null, null, null, null, null, null, '1451900430', null, '1', 'Manager', '');
INSERT INTO `admin_users` VALUES ('4', '127.0.0.1', 'staff', '$2y$08$NigAXjN23CRKllqe3KmjYuWXD5iSRPY812SijlhGeKfkrMKde9da6', null, null, null, null, null, null, '1451900439', null, '1', 'Staff', '');

-- ----------------------------
-- Table structure for `admin_users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `admin_users_groups`;
CREATE TABLE `admin_users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_users_groups
-- ----------------------------
INSERT INTO `admin_users_groups` VALUES ('1', '1', '1');
INSERT INTO `admin_users_groups` VALUES ('2', '2', '2');
INSERT INTO `admin_users_groups` VALUES ('3', '3', '3');
INSERT INTO `admin_users_groups` VALUES ('4', '4', '4');

-- ----------------------------
-- Table structure for `api_access`
-- ----------------------------
DROP TABLE IF EXISTS `api_access`;
CREATE TABLE `api_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL DEFAULT '',
  `controller` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_access
-- ----------------------------

-- ----------------------------
-- Table structure for `api_keys`
-- ----------------------------
DROP TABLE IF EXISTS `api_keys`;
CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_keys
-- ----------------------------

-- ----------------------------
-- Table structure for `api_limits`
-- ----------------------------
DROP TABLE IF EXISTS `api_limits`;
CREATE TABLE `api_limits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_limits
-- ----------------------------

-- ----------------------------
-- Table structure for `api_logs`
-- ----------------------------
DROP TABLE IF EXISTS `api_logs`;
CREATE TABLE `api_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_logs
-- ----------------------------

-- ----------------------------
-- Table structure for `demo_blog_categories`
-- ----------------------------
DROP TABLE IF EXISTS `demo_blog_categories`;
CREATE TABLE `demo_blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pos` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of demo_blog_categories
-- ----------------------------
INSERT INTO `demo_blog_categories` VALUES ('1', '1', 'Category 1');
INSERT INTO `demo_blog_categories` VALUES ('2', '2', 'Category 2');
INSERT INTO `demo_blog_categories` VALUES ('3', '3', 'Category 3');

-- ----------------------------
-- Table structure for `demo_blog_posts`
-- ----------------------------
DROP TABLE IF EXISTS `demo_blog_posts`;
CREATE TABLE `demo_blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `author_id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content_brief` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `publish_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('draft','active','hidden') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of demo_blog_posts
-- ----------------------------
INSERT INTO `demo_blog_posts` VALUES ('1', '1', '2', 'Blog Post 1', '', '<p>\r\n	Blog Post 1 Content Brief</p>\r\n', '<p>\r\n	Blog Post 1 Content</p>\r\n', '2015-09-26 00:00:00', 'active');

-- ----------------------------
-- Table structure for `demo_blog_posts_tags`
-- ----------------------------
DROP TABLE IF EXISTS `demo_blog_posts_tags`;
CREATE TABLE `demo_blog_posts_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of demo_blog_posts_tags
-- ----------------------------
INSERT INTO `demo_blog_posts_tags` VALUES ('1', '1', '2');
INSERT INTO `demo_blog_posts_tags` VALUES ('2', '1', '1');
INSERT INTO `demo_blog_posts_tags` VALUES ('3', '1', '3');

-- ----------------------------
-- Table structure for `demo_blog_tags`
-- ----------------------------
DROP TABLE IF EXISTS `demo_blog_tags`;
CREATE TABLE `demo_blog_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of demo_blog_tags
-- ----------------------------
INSERT INTO `demo_blog_tags` VALUES ('1', 'Tag 1');
INSERT INTO `demo_blog_tags` VALUES ('2', 'Tag 2');
INSERT INTO `demo_blog_tags` VALUES ('3', 'Tag 3');

-- ----------------------------
-- Table structure for `demo_cover_photos`
-- ----------------------------
DROP TABLE IF EXISTS `demo_cover_photos`;
CREATE TABLE `demo_cover_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pos` int(11) NOT NULL DEFAULT '0',
  `image_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','hidden') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of demo_cover_photos
-- ----------------------------
INSERT INTO `demo_cover_photos` VALUES ('1', '2', '45296-2.jpg', 'active');
INSERT INTO `demo_cover_photos` VALUES ('2', '1', '2934f-1.jpg', 'active');
INSERT INTO `demo_cover_photos` VALUES ('3', '3', '3717d-3.jpg', 'active');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'members', 'General User');

-- ----------------------------
-- Table structure for `login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for `siup_kemasan`
-- ----------------------------
DROP TABLE IF EXISTS `siup_kemasan`;
CREATE TABLE `siup_kemasan` (
  `id_kemasan` char(3) NOT NULL,
  `desc` varchar(20) DEFAULT NULL,
  `added_by` varchar(100) DEFAULT NULL,
  `changed_by` varchar(100) DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kemasan`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- ----------------------------
-- Records of siup_kemasan
-- ----------------------------

-- ----------------------------
-- Table structure for `siup_order`
-- ----------------------------
DROP TABLE IF EXISTS `siup_order`;
CREATE TABLE `siup_order` (
  `id_order` varchar(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `id_unit` char(2) DEFAULT NULL,
  `id_product` varchar(30) DEFAULT NULL,
  `stver` smallint(1) DEFAULT NULL,
  `stacc` smallint(1) DEFAULT NULL,
  `stpch` smallint(1) DEFAULT NULL,
  `stord` smallint(1) DEFAULT NULL,
  `ket` text,
  `tgl_ver` datetime DEFAULT NULL,
  `tgl_acc` datetime DEFAULT NULL,
  `tgl_pch` datetime DEFAULT NULL,
  `tgl_terima` datetime DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `fk_order_unit` (`id_unit`),
  KEY `fk_order_product` (`id_product`),
  CONSTRAINT `fk_order_product` FOREIGN KEY (`id_product`) REFERENCES `siup_product` (`id_product`) ON UPDATE CASCADE,
  CONSTRAINT `fk_order_unit` FOREIGN KEY (`id_unit`) REFERENCES `siup_unit` (`id_unit`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- ----------------------------
-- Records of siup_order
-- ----------------------------

-- ----------------------------
-- Table structure for `siup_product`
-- ----------------------------
DROP TABLE IF EXISTS `siup_product`;
CREATE TABLE `siup_product` (
  `id_product` varchar(30) NOT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `id_kemasan` char(3) DEFAULT NULL,
  `changed_by` varchar(100) DEFAULT NULL,
  `added_by` varchar(100) DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product`),
  KEY `fk_prod_kemasan` (`id_kemasan`),
  CONSTRAINT `fk_prod_kemasan` FOREIGN KEY (`id_kemasan`) REFERENCES `siup_kemasan` (`id_kemasan`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- ----------------------------
-- Records of siup_product
-- ----------------------------

-- ----------------------------
-- Table structure for `siup_unit`
-- ----------------------------
DROP TABLE IF EXISTS `siup_unit`;
CREATE TABLE `siup_unit` (
  `id_unit` char(2) NOT NULL,
  `desc` varchar(20) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- ----------------------------
-- Records of siup_unit
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '127.0.0.1', 'member', '$2y$08$kkqUE2hrqAJtg.pPnAhvL.1iE7LIujK5LZ61arONLpaBBWh/ek61G', null, 'member@member.com', null, null, null, null, '1451903855', '1451905011', '1', 'Member', 'One', null, null);

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('1', '1', '1');
