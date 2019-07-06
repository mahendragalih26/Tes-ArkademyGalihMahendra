/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : biodata

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 06/07/2019 17:20:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hobi
-- ----------------------------
DROP TABLE IF EXISTS `hobi`;
CREATE TABLE `hobi`  (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_category` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hobi
-- ----------------------------
INSERT INTO `hobi` VALUES (1, 'Koleksi Tas', 1);
INSERT INTO `hobi` VALUES (2, 'InstaStory', 2);

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Shopping');
INSERT INTO `kategori` VALUES (2, 'Media Sosial');

-- ----------------------------
-- Table structure for nama
-- ----------------------------
DROP TABLE IF EXISTS `nama`;
CREATE TABLE `nama`  (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_hobby` int(11) NULL DEFAULT NULL,
  `id_category` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nama
-- ----------------------------
INSERT INTO `nama` VALUES (1, 'Novi', 1, 1);
INSERT INTO `nama` VALUES (2, 'Vita', 2, 2);

SET FOREIGN_KEY_CHECKS = 1;
