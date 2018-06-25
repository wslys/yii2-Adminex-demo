/*
 Navicat MySQL Data Transfer

 Source Server         : MySQL-local
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : authority_db

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 22/06/2018 18:33:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_groups
-- ----------------------------
DROP TABLE IF EXISTS `account_groups`;
CREATE TABLE `account_groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NULL DEFAULT NULL,
  `group_id` int(11) NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for action_groups
-- ----------------------------
DROP TABLE IF EXISTS `action_groups`;
CREATE TABLE `action_groups`  (
  `id` int(11) NOT NULL,
  `action_id` int(11) NULL DEFAULT NULL,
  `group_id` int(11) NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for actions
-- ----------------------------
DROP TABLE IF EXISTS `actions`;
CREATE TABLE `actions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lable` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lable` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '资源名称',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '资源 URL',
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '菜单图标',
  `type` int(11) NULL DEFAULT NULL COMMENT '类型 1：菜单， 2：按钮/链接',
  `sort` int(11) NULL DEFAULT NULL COMMENT '排序',
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '备注',
  `parent_id` int(11) NULL DEFAULT NULL COMMENT '父菜单ID， 一级菜单未0',
  `permission` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '授权（如：role:create）',
  `create_user` int(11) NULL DEFAULT NULL COMMENT '创建用户',
  `update_user` int(11) NULL DEFAULT NULL COMMENT '修改用户',
  `create_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'Dashboard', 'Dashboard', 'fa fa-home', 1, 1, 'Dashboard', 0, 'create', 1, 1, '2018-06-03 00:00:00', '2018-06-03 00:00:00');
INSERT INTO `menus` VALUES (2, '仪表盘', '/site/index', 'fa fa-home', 1, 1, '仪表盘', 1, 'role:create', 1, 1, '2018-06-03 00:00:00', '2018-06-03 00:00:00');
INSERT INTO `menus` VALUES (3, 'Layouts', '/layout-tmp', 'fa fa-laptop', 1, 2, 'Layouts 布局', 0, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (4, 'Blank Page', '/layout-tmp/blank-page', '', 1, 1, 'Blank Page', 3, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (5, 'Boxed Page', '/layout-tmp/boxed-page', '', 1, 2, 'Boxed Page', 3, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (6, 'Sidebar Collapsed', '/layout-tmp/sidebar-collapsed', '', 1, 3, 'Sidebar Collapsed', 3, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (7, 'Horizontal Menu', '/layout-tmp/horizontal-menu', '', 1, 4, 'Horizontal Menu', 3, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (8, 'UI Elements', 'ui-elements', 'fa fa-book', 1, 3, 'UI Elements', 0, 'role:create', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (9, 'General', '/ui-elements/general', '', 1, 1, 'General', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (10, 'Buttons', '/ui-elements/buttons', '', 1, 2, 'Buttons', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (11, 'Tabs & Accordions', '/ui-elements/tabs-accordions', '', 1, 3, 'ButtonsTabs & Accordions', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (12, 'Typography', '/ui-elements/typography', '', 1, 4, 'Typography', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (13, 'Slider', '/ui-elements/slider', '', 1, 5, 'Slider', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (14, 'Panels', '/ui-elements/panels', '', 1, 6, 'Panels', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (15, 'Widgets', '/ui-elements/widgets', '', 1, 7, 'Widgets', 8, '', 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (16, 'Fontawesome', '/fontawesome', 'fa fa-bullhorn', 1, 4, 'Fontawesome', 0, 'role:create', 1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apply_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1528879349);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1528879352);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', NULL, 'bw8sjjWwoRVxtiUPv_kiswyF4XPhshAz', '$2y$13$WlGctEdegWq3p/lW5Egqie2zJAUHcpD1va9P04YpfK30kIcG27VA2', 'SqP6F4COsUSAeH4HnGZU70fG5XTfBhEJ_timestamp', 'admin@126.com', 10, 1504856421, 1504856421);
INSERT INTO `user` VALUES (2, 'dddddddddddddddddddddddddddddddd', NULL, 'V7iHepAQEmmWFmWNkcZzPpj3GQy_Rct4', '$2y$13$bteTRPknXEkbSQDJnWRMkuQpBnthTYL1e2TERDLYX1/Yp22q81Ws.', 'yRVzJdbK-9oE1cWpcRRpZ75pPseIcivh_1528884888', NULL, 10, 1528884888, 1528884888);
INSERT INTO `user` VALUES (5, 'wsl_one', NULL, 'NO2cvC5Z9PgY5m3Vbc5pUG_dHMsifmRA', '$2y$13$YD.XKtP99PMkmwtrX7RYReUOf6SPuRgcpEcKRvvrsj9.9GPziZNB2', 'rQwl3YySScBL_6Qz4uBGTXgVYeZwDpGT_1528884953', NULL, 10, 1528884953, 1528884953);
INSERT INTO `user` VALUES (7, 'YouTube', NULL, 'U30Ixz1C8uaYbtykqtWXjn6rg74vXJpB', '$2y$13$pGERgNAEI35nT.cFTv2Cke/VYSKarZYEZpIvo.s63hiyXtuSaSUa2', '-EJwE9cHAl2phWkMJksdPKtq9e-m8TDN_1528940587', 'wsl@163.com', 10, 1528940587, 1528940587);

-- ----------------------------
-- Table structure for user_menus
-- ----------------------------
DROP TABLE IF EXISTS `user_menus`;
CREATE TABLE `user_menus`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `menu_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menus
-- ----------------------------
INSERT INTO `user_menus` VALUES (1, 1, 1);
INSERT INTO `user_menus` VALUES (2, 1, 2);
INSERT INTO `user_menus` VALUES (3, 1, 3);
INSERT INTO `user_menus` VALUES (4, 1, 4);
INSERT INTO `user_menus` VALUES (5, 1, 5);
INSERT INTO `user_menus` VALUES (6, 1, 6);
INSERT INTO `user_menus` VALUES (7, 1, 7);
INSERT INTO `user_menus` VALUES (8, 1, 8);
INSERT INTO `user_menus` VALUES (9, 1, 9);
INSERT INTO `user_menus` VALUES (10, 1, 10);
INSERT INTO `user_menus` VALUES (11, 1, 11);
INSERT INTO `user_menus` VALUES (12, 1, 12);
INSERT INTO `user_menus` VALUES (13, 1, 13);
INSERT INTO `user_menus` VALUES (14, 1, 14);
INSERT INTO `user_menus` VALUES (15, 1, 15);
INSERT INTO `user_menus` VALUES (16, 1, 16);

SET FOREIGN_KEY_CHECKS = 1;
