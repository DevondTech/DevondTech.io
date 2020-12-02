/*
 Navicat Premium Data Transfer

 Source Server         : Devond
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : db_duren_fix

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 02/12/2020 12:42:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for next_rt_berat_produk_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `next_rt_berat_produk_pemesanan`;
CREATE TABLE `next_rt_berat_produk_pemesanan`  (
  `id_berat_produk` int(11) NOT NULL AUTO_INCREMENT,
  `teks_berat_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `konfersi_berat_produk_perkilogram` double(255, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_berat_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of next_rt_berat_produk_pemesanan
-- ----------------------------
INSERT INTO `next_rt_berat_produk_pemesanan` VALUES (1, '200 Gram', 0.20);
INSERT INTO `next_rt_berat_produk_pemesanan` VALUES (2, '500 Gram', 0.50);
INSERT INTO `next_rt_berat_produk_pemesanan` VALUES (3, '1000 Gram', 1.00);

-- ----------------------------
-- Table structure for old_tb_data_user
-- ----------------------------
DROP TABLE IF EXISTS `old_tb_data_user`;
CREATE TABLE `old_tb_data_user`  (
  `id_data_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_jenis_kelamin` int(11) NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_kota` int(11) NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of old_tb_data_user
-- ----------------------------
INSERT INTO `old_tb_data_user` VALUES (1, 1, 1, '2018-06-22', 'jalan', 'in', 'ok', 'ok', 1, 'ok', 'oke', 'eko', '485798');
INSERT INTO `old_tb_data_user` VALUES (2, 2, 2, '2017-11-29', 'Jalan', 'Indonesia', 'Banten', 'Tangerang', 1, 'Tangerang Kota', NULL, NULL, '98868');
INSERT INTO `old_tb_data_user` VALUES (3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `old_tb_data_user` VALUES (4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `old_tb_data_user` VALUES (5, 5, 1, '1990-08-06', 'Jalan Ketapang 5 No 48', 'Indonesia', 'Jawa Barat', 'Depok', 3, 'Depok', NULL, NULL, '54673');
INSERT INTO `old_tb_data_user` VALUES (6, 6, 1, '2020-08-06', 'Jalan Jend. Sudirman Timur No 545', 'Indonesia', 'Jawa Barat', 'Bogor', 3, 'Depok', 'Sawangan', 'Kedaung', '43555');
INSERT INTO `old_tb_data_user` VALUES (7, 7, 2, '1990-03-09', 'depok', 'indonesia', 'jawa barat', 'depok', 3, 'depok', 'depok', 'kedaung', '61523');
INSERT INTO `old_tb_data_user` VALUES (8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for old_tb_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `old_tb_pemesanan`;
CREATE TABLE `old_tb_pemesanan`  (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_pemesanan` datetime(0) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `pesan_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_proses_pemesanan` int(11) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `jumlah_pemesanan` decimal(65, 0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `ongkos_kirim` double(100, 0) NULL DEFAULT NULL,
  `id_voucher` int(11) NULL DEFAULT NULL,
  `id_metode_pembayaran` int(11) NULL DEFAULT NULL,
  `pesan_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of old_tb_pemesanan
-- ----------------------------
INSERT INTO `old_tb_pemesanan` VALUES (1, 'DR01', '2020-08-09 15:34:22', 6, '', '', '', '', '', '', NULL, NULL, '', 1, 1, NULL, NULL, NULL, NULL, 2, NULL, NULL);
INSERT INTO `old_tb_pemesanan` VALUES (2, 'DR02', '2020-09-28 14:50:38', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 2, NULL, NULL);

-- ----------------------------
-- Table structure for old_tb_pemesanan_2
-- ----------------------------
DROP TABLE IF EXISTS `old_tb_pemesanan_2`;
CREATE TABLE `old_tb_pemesanan_2`  (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_pemesanan` datetime(0) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `pesan_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_proses_pemesanan` int(11) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `jumlah_pemesanan` decimal(65, 0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `ongkos_kirim` double(100, 0) NULL DEFAULT NULL,
  `id_voucher` int(11) NULL DEFAULT NULL,
  `id_metode_pembayaran` int(11) NULL DEFAULT NULL,
  `pesan_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_harga_perproduk` double(255, 0) NULL DEFAULT NULL,
  `total_harga_yang_harus_dibayar` double(255, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of old_tb_pemesanan_2
-- ----------------------------
INSERT INTO `old_tb_pemesanan_2` VALUES (1, 'DR01', '2020-08-09 15:34:22', 6, '', '', '', '', '', '', NULL, NULL, '', 1, 1, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL);
INSERT INTO `old_tb_pemesanan_2` VALUES (2, 'DR02', '2020-09-28 14:50:38', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for old_tb_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `old_tb_penjualan`;
CREATE TABLE `old_tb_penjualan`  (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penjualan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_penjualan` datetime(0) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `jumlah_penjualan` decimal(65, 0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `total_penjualan` double(255, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of old_tb_penjualan
-- ----------------------------
INSERT INTO `old_tb_penjualan` VALUES (1, 'DR06', '2020-10-07 11:47:33', 2, 23, 2, 3012000);
INSERT INTO `old_tb_penjualan` VALUES (2, 'DR06', '2020-10-07 15:12:41', 1, 38, 1, 6042000);

-- ----------------------------
-- Table structure for rt_berat_produk_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `rt_berat_produk_pemesanan`;
CREATE TABLE `rt_berat_produk_pemesanan`  (
  `id_berat_produk` int(11) NOT NULL AUTO_INCREMENT,
  `teks_berat_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `konfersi_berat_produk_perkilogram` double(255, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_berat_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_berat_produk_pemesanan
-- ----------------------------
INSERT INTO `rt_berat_produk_pemesanan` VALUES (1, '500 Gram', 0.50);

-- ----------------------------
-- Table structure for rt_bintang_penilaian_produk
-- ----------------------------
DROP TABLE IF EXISTS `rt_bintang_penilaian_produk`;
CREATE TABLE `rt_bintang_penilaian_produk`  (
  `id_bintang_penilaian_produk` int(11) NOT NULL AUTO_INCREMENT,
  `bintang_penilaian_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bintang_penilaian_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_bintang_penilaian_produk
-- ----------------------------
INSERT INTO `rt_bintang_penilaian_produk` VALUES (1, '1');
INSERT INTO `rt_bintang_penilaian_produk` VALUES (2, '2');
INSERT INTO `rt_bintang_penilaian_produk` VALUES (3, '3');
INSERT INTO `rt_bintang_penilaian_produk` VALUES (4, '4');
INSERT INTO `rt_bintang_penilaian_produk` VALUES (5, '5');

-- ----------------------------
-- Table structure for rt_jenis_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `rt_jenis_kelamin`;
CREATE TABLE `rt_jenis_kelamin`  (
  `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_kelamin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_jenis_kelamin
-- ----------------------------
INSERT INTO `rt_jenis_kelamin` VALUES (1, 'Pria');
INSERT INTO `rt_jenis_kelamin` VALUES (2, 'Wanita');

-- ----------------------------
-- Table structure for rt_jenis_produk
-- ----------------------------
DROP TABLE IF EXISTS `rt_jenis_produk`;
CREATE TABLE `rt_jenis_produk`  (
  `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_jenis_produk
-- ----------------------------
INSERT INTO `rt_jenis_produk` VALUES (1, 'Durian');
INSERT INTO `rt_jenis_produk` VALUES (2, 'Lain-Lain');

-- ----------------------------
-- Table structure for rt_jenis_voucher
-- ----------------------------
DROP TABLE IF EXISTS `rt_jenis_voucher`;
CREATE TABLE `rt_jenis_voucher`  (
  `id_jenis_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_jenis_voucher
-- ----------------------------
INSERT INTO `rt_jenis_voucher` VALUES (1, 'Voucher Potongan Harga');
INSERT INTO `rt_jenis_voucher` VALUES (2, 'Voucher Potongan Ongkir');

-- ----------------------------
-- Table structure for rt_kota
-- ----------------------------
DROP TABLE IF EXISTS `rt_kota`;
CREATE TABLE `rt_kota`  (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kota`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_kota
-- ----------------------------
INSERT INTO `rt_kota` VALUES (1, 'Bekasi');
INSERT INTO `rt_kota` VALUES (2, 'Bogor');
INSERT INTO `rt_kota` VALUES (3, 'Depok');
INSERT INTO `rt_kota` VALUES (4, 'Jakarta');
INSERT INTO `rt_kota` VALUES (5, 'Tangerang ');
INSERT INTO `rt_kota` VALUES (6, 'Tangerang Selatan');

-- ----------------------------
-- Table structure for rt_metode_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `rt_metode_pembayaran`;
CREATE TABLE `rt_metode_pembayaran`  (
  `id_metode_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_link_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_metode_pembayaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_metode_pembayaran
-- ----------------------------
INSERT INTO `rt_metode_pembayaran` VALUES (1, 'Link Aja', NULL);
INSERT INTO `rt_metode_pembayaran` VALUES (2, 'Transfer Bank', NULL);

-- ----------------------------
-- Table structure for rt_proses_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `rt_proses_pemesanan`;
CREATE TABLE `rt_proses_pemesanan`  (
  `id_proses_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `proses_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_proses_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_proses_pemesanan
-- ----------------------------
INSERT INTO `rt_proses_pemesanan` VALUES (1, 'Pesanan Dibuat');
INSERT INTO `rt_proses_pemesanan` VALUES (2, 'Konfirmasi Checkout');
INSERT INTO `rt_proses_pemesanan` VALUES (3, 'Menunggu Konfirmasi Pembayaran');
INSERT INTO `rt_proses_pemesanan` VALUES (4, 'Pembayaran Dikonfirmasi');
INSERT INTO `rt_proses_pemesanan` VALUES (5, 'Barang Sedang Dikirim');
INSERT INTO `rt_proses_pemesanan` VALUES (6, 'Barang Telah Diterima');
INSERT INTO `rt_proses_pemesanan` VALUES (7, 'Barang Telah Diterima ');
INSERT INTO `rt_proses_pemesanan` VALUES (8, 'Barang Diretur');
INSERT INTO `rt_proses_pemesanan` VALUES (9, 'Barang Telah Diterima');
INSERT INTO `rt_proses_pemesanan` VALUES (10, 'Pesanan Dibatalkan');

-- ----------------------------
-- Table structure for rt_satuan_produk
-- ----------------------------
DROP TABLE IF EXISTS `rt_satuan_produk`;
CREATE TABLE `rt_satuan_produk`  (
  `id_satuan_produk` int(11) NOT NULL AUTO_INCREMENT,
  `satuan_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_satuan_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_satuan_produk
-- ----------------------------
INSERT INTO `rt_satuan_produk` VALUES (1, 'Pack');
INSERT INTO `rt_satuan_produk` VALUES (2, 'Buah');

-- ----------------------------
-- Table structure for rt_status_baca
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_baca`;
CREATE TABLE `rt_status_baca`  (
  `id_status_baca` int(11) NOT NULL AUTO_INCREMENT,
  `status_baca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_baca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_baca
-- ----------------------------
INSERT INTO `rt_status_baca` VALUES (1, 'Belum Dibaca');
INSERT INTO `rt_status_baca` VALUES (2, 'Sudah Dibaca');

-- ----------------------------
-- Table structure for rt_status_chat
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_chat`;
CREATE TABLE `rt_status_chat`  (
  `id_status_chat` int(11) NOT NULL AUTO_INCREMENT,
  `status_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_chat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_chat
-- ----------------------------
INSERT INTO `rt_status_chat` VALUES (1, 'Belum Dibaca');
INSERT INTO `rt_status_chat` VALUES (2, 'Sudah Dibaca');

-- ----------------------------
-- Table structure for rt_status_kirim_voucher
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_kirim_voucher`;
CREATE TABLE `rt_status_kirim_voucher`  (
  `kode_kirim_konsumen` int(11) NOT NULL AUTO_INCREMENT,
  `status_kirim_konsumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_kirim_konsumen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_kirim_voucher
-- ----------------------------
INSERT INTO `rt_status_kirim_voucher` VALUES (1, 'Kode Voucher Belum Dikirim');
INSERT INTO `rt_status_kirim_voucher` VALUES (2, 'Kode Voucher Sudah Dikirim');

-- ----------------------------
-- Table structure for rt_status_notifikasi
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_notifikasi`;
CREATE TABLE `rt_status_notifikasi`  (
  `id_status_notifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `status_notifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_notifikasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_notifikasi
-- ----------------------------
INSERT INTO `rt_status_notifikasi` VALUES (1, 'Pesanan Konsumen Dibuat');
INSERT INTO `rt_status_notifikasi` VALUES (2, 'Pengajuan Konfirmasi Pembayaran');
INSERT INTO `rt_status_notifikasi` VALUES (3, 'Dalam Proses Transaksi');
INSERT INTO `rt_status_notifikasi` VALUES (5, 'Pengajuan Konfirmasi Pengiriman');
INSERT INTO `rt_status_notifikasi` VALUES (6, 'Penilaian Produk');
INSERT INTO `rt_status_notifikasi` VALUES (7, 'Pengajuan Retur Produk');
INSERT INTO `rt_status_notifikasi` VALUES (8, 'Konfirmasi Pengajuan Retur');

-- ----------------------------
-- Table structure for rt_status_produk_dalam_proses
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_produk_dalam_proses`;
CREATE TABLE `rt_status_produk_dalam_proses`  (
  `id_status_produk_dalam_proses` int(11) NOT NULL AUTO_INCREMENT,
  `status_produk_dalam_proses` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_produk_dalam_proses`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_produk_dalam_proses
-- ----------------------------
INSERT INTO `rt_status_produk_dalam_proses` VALUES (1, 'Barang Sudah Dipesan');
INSERT INTO `rt_status_produk_dalam_proses` VALUES (2, 'Barang Batal Dipesan');
INSERT INTO `rt_status_produk_dalam_proses` VALUES (3, 'Barang Dibeli');

-- ----------------------------
-- Table structure for rt_status_retur
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_retur`;
CREATE TABLE `rt_status_retur`  (
  `id_status_retur` int(11) NOT NULL AUTO_INCREMENT,
  `status_retur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_retur`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_retur
-- ----------------------------
INSERT INTO `rt_status_retur` VALUES (1, 'Pengajuan Retur');
INSERT INTO `rt_status_retur` VALUES (2, 'Pengajuan Retur Dibuat');
INSERT INTO `rt_status_retur` VALUES (3, 'Barang Dikirim Kembali');
INSERT INTO `rt_status_retur` VALUES (4, 'Pengajuan Ditolak');

-- ----------------------------
-- Table structure for rt_status_user
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_user`;
CREATE TABLE `rt_status_user`  (
  `id_status_user` int(11) NOT NULL AUTO_INCREMENT,
  `status_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_user
-- ----------------------------
INSERT INTO `rt_status_user` VALUES (1, 'Administrator');
INSERT INTO `rt_status_user` VALUES (5, 'Konsumen');

-- ----------------------------
-- Table structure for rt_status_voucher
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_voucher`;
CREATE TABLE `rt_status_voucher`  (
  `id_status_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `status_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_voucher
-- ----------------------------
INSERT INTO `rt_status_voucher` VALUES (1, 'Belum Terpakai');
INSERT INTO `rt_status_voucher` VALUES (2, 'Terpakai');
INSERT INTO `rt_status_voucher` VALUES (3, 'Tidak Berlaku');

-- ----------------------------
-- Table structure for rt_user_baca
-- ----------------------------
DROP TABLE IF EXISTS `rt_user_baca`;
CREATE TABLE `rt_user_baca`  (
  `id_user_baca` int(11) NOT NULL AUTO_INCREMENT,
  `user_baca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_baca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_user_baca
-- ----------------------------
INSERT INTO `rt_user_baca` VALUES (1, 'Konsumen');
INSERT INTO `rt_user_baca` VALUES (2, 'Admin');

-- ----------------------------
-- Table structure for tb_about_us
-- ----------------------------
DROP TABLE IF EXISTS `tb_about_us`;
CREATE TABLE `tb_about_us`  (
  `id_about_us` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_hp1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_hp2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `number_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pemilik_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_about_us`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_about_us
-- ----------------------------
INSERT INTO `tb_about_us` VALUES (1, 'Jalan Tanah Abang II No. 19, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160', '6281311993939', '', 'admin@kingfruit.co.id', '6540365600', 'PT. Perkebunan Unggul Nusantara');

-- ----------------------------
-- Table structure for tb_chat
-- ----------------------------
DROP TABLE IF EXISTS `tb_chat`;
CREATE TABLE `tb_chat`  (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `waktu_chat` datetime(0) NULL DEFAULT NULL,
  `teks_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_chat` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_chat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_chat
-- ----------------------------
INSERT INTO `tb_chat` VALUES (1, 3, '2020-08-05 14:52:08', 'hai', NULL, '105082020', 2);
INSERT INTO `tb_chat` VALUES (2, 1, '2020-08-05 14:52:55', 'bagaimana ya', NULL, '105082020', 2);

-- ----------------------------
-- Table structure for tb_data_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_data_user`;
CREATE TABLE `tb_data_user`  (
  `id_data_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_jenis_kelamin` int(11) NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_kota` int(11) NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_data_user
-- ----------------------------
INSERT INTO `tb_data_user` VALUES (1, 1, 1, '1992-03-09', 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', 'ok', 1, 'Kedaung', 'Sawangan', '4857');
INSERT INTO `tb_data_user` VALUES (2, 2, 2, '0000-00-00', 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '2', 1, 'Sawangan', 'Kedaung', '4324');
INSERT INTO `tb_data_user` VALUES (3, 3, 1, '2017-11-11', 'Jalan Sehat No 1 ', 'Indonesia', 'Jawa Barat', NULL, 1, 'Sawangan', 'Kedaung', '7341');
INSERT INTO `tb_data_user` VALUES (4, 4, 1, '2020-10-20', 'citralake', 'Indonesia', 'jabar', NULL, 1, 'd', 'f3', '3');
INSERT INTO `tb_data_user` VALUES (5, 5, NULL, NULL, 'CitraLake', 'Indonesia', 'jabar', NULL, 1, 'f', 'f', '123');
INSERT INTO `tb_data_user` VALUES (6, 6, NULL, NULL, 'Ruko CItralake No. A02-06B', 'Indonesia', 'Jawa Barat', NULL, 3, 'Bojongsari', 'Bojongsari', '16512');
INSERT INTO `tb_data_user` VALUES (7, 7, 1, '2020-10-01', 'jl kebagusan wates', 'Indonesia', 'DKI jakarta', NULL, 4, 'jagakarsa', 'jagakarsa', '12620');
INSERT INTO `tb_data_user` VALUES (8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (9, 9, NULL, NULL, 'Jalan Sehat No 1', 'Indonesia', 'Jabar', NULL, 2, 'Bogor', 'Bogor', '84654');
INSERT INTO `tb_data_user` VALUES (10, 10, NULL, NULL, 'Depok', 'Indonesia', 'Jawa Barat', NULL, 3, 'Bojongsari', 'Bjs', '1234');
INSERT INTO `tb_data_user` VALUES (11, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (13, 13, NULL, NULL, 'Jalan sehat no 109', 'Indonesia', 'Jawa Barat', NULL, 1, 'Sawangan', 'Kedaung', '453543543');
INSERT INTO `tb_data_user` VALUES (14, 14, NULL, NULL, 'Tes', 'Indonesia', 'jakarta', NULL, 4, 't', 't', '2536');
INSERT INTO `tb_data_user` VALUES (15, 15, NULL, NULL, 'Alamat', 'Indonesia', 'Jakrta', NULL, 4, 'Tanah Abang', '23', '45484');
INSERT INTO `tb_data_user` VALUES (16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (17, 17, NULL, NULL, 'Jalan Sehat Bahagia No 2', 'Indonesia', 'Jawa Barat', NULL, 3, 'Kedaung', 'Sawangan', '7643');

-- ----------------------------
-- Table structure for tb_faq
-- ----------------------------
DROP TABLE IF EXISTS `tb_faq`;
CREATE TABLE `tb_faq`  (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `faq` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_faq`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_faq
-- ----------------------------
INSERT INTO `tb_faq` VALUES (1, 'Ini jenis apa?\r\nSuper Montong dari King Fruit ini tentunya merupakan jenis Duren Montong yang memiliki rasa yang manis, legit dan creamy.\r\n\r\nBagaimana texture produknya?\r\nSuper Mounting dari King Fruit memiliki tekstur yang creamy.\r\n\r\nBagaimana rasanya?\r\nRasa dari Duren Super MontÃ³n dari King Fruit tentunya manis, legit dan ngangenin.\r\n\r\nBagaimana cara belinya?\r\n1. WhatsApp: +62813 1199 3939\r\n2. Blibli/ Tokpedia/ GoFood: \"KingFruit\"\r\n3. Website: www.kingfruit.co.id\r\n\r\nBagaimana cara Retur?\r\n(Cek syarat dan ketentuan retur produk)');

-- ----------------------------
-- Table structure for tb_inventory
-- ----------------------------
DROP TABLE IF EXISTS `tb_inventory`;
CREATE TABLE `tb_inventory`  (
  `id_inventory` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_inventory` datetime(0) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penambahan_stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_inventory`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_inventory
-- ----------------------------
INSERT INTO `tb_inventory` VALUES (1, '2020-10-23 09:43:04', 1, 'Durian Montong ', '100');
INSERT INTO `tb_inventory` VALUES (2, '2020-10-28 10:22:44', 1, 'Durian Montong', '100');
INSERT INTO `tb_inventory` VALUES (3, '2020-11-12 11:05:16', 2, 'Durian Bawor', '100');

-- ----------------------------
-- Table structure for tb_login_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_login_user`;
CREATE TABLE `tb_login_user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_mendaftar` datetime(0) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_user` int(11) NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_forgot_password` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_login_user
-- ----------------------------
INSERT INTO `tb_login_user` VALUES (1, '2020-08-04 16:52:03', '', 'Admin King Fruit', 'mohamad@gmail.com', '089193743314', '../images/user/2020-11-041IMG_20201031_182217_491.jpg', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1, 'c47907abd2a80492ca9388b05c0e382518ff3960', NULL);
INSERT INTO `tb_login_user` VALUES (2, '2020-10-20 11:25:38', NULL, 'mohamad', 'me.serj.adam@gmail.com', '089632117314', '', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5, 'c47907abd2a80492ca9388b05c0e382518ff3960', 5708);
INSERT INTO `tb_login_user` VALUES (3, '2020-10-21 10:01:52', NULL, 'Alviona', 'alviona@devond.co.id', '08121941997', NULL, 'd8913df37b24c97f28f840114d05bd110dbb2e44', 5, 'c47907abd2a80492ca9388b05c0e382518ff3960', NULL);
INSERT INTO `tb_login_user` VALUES (4, '2020-10-23 17:03:08', NULL, 'marwan', 'marwanwalady@yahoo.com', '085694832243', '', 'd8913df37b24c97f28f840114d05bd110dbb2e44', 5, 'c47907abd2a80492ca9388b05c0e382518ff3960', NULL);
INSERT INTO `tb_login_user` VALUES (5, '2020-10-27 14:27:29', NULL, 'almandyta', 'amandycallista@gmail.com', '081210363838', NULL, 'd8913df37b24c97f28f840114d05bd110dbb2e44', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (6, '2020-10-30 13:42:37', NULL, 'admin', 'anne.cicilia@kingfruit.co.id', '0', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (7, '2020-10-30 13:43:28', NULL, 'admin', 'admin@kingfruit.co.id', '0', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (8, '2020-10-30 14:01:41', NULL, 'admin', 'joko@kingfruit.co.id', '0', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (9, '2020-10-31 01:15:06', NULL, 'mohamad', 'echo_rockers@ymail.com', '08994191773', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (10, '2020-11-11 13:19:34', NULL, 'Abu', 'devond.abu@gmail.com', '085314851298', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (11, '2020-11-11 14:32:24', 'User1', 'User 1', 'user1@gmail.com', '12335', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (12, '2020-11-12 08:23:47', NULL, 'ivie', 'ivie@gmail.com', '12', NULL, '412fc6097e62d5c494b8df37e3805805467d1a2c', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (13, '2020-11-12 08:54:17', NULL, 'eko', 'echorockers@gmail.com', '08967234582', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (14, '2020-11-12 11:16:57', NULL, 'ABu', 'abu.traveland@gmail.com', '08', NULL, 'e3431a8e0adbf96fd140103dc6f63a3f8fa343ab', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (15, '2020-11-12 12:33:40', NULL, 'Abu', 'abu@devond.co.id', '0531485129', NULL, 'e3431a8e0adbf96fd140103dc6f63a3f8fa343ab', 5, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (16, '2020-11-12 13:23:11', 'adminkingfruit', 'Daniel', 'daniel@kingfruit.co.id', '0', NULL, 'd8913df37b24c97f28f840114d05bd110dbb2e44', 1, NULL, NULL);
INSERT INTO `tb_login_user` VALUES (17, '2020-11-18 16:03:59', NULL, 'kingfruit', 'official.kingfruit@gmail.com', '011', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5, NULL, NULL);

-- ----------------------------
-- Table structure for tb_medsos
-- ----------------------------
DROP TABLE IF EXISTS `tb_medsos`;
CREATE TABLE `tb_medsos`  (
  `id_medsos` int(11) NOT NULL AUTO_INCREMENT,
  `nama_medsos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link_medsos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ikon_medsos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_medsos`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_medsos
-- ----------------------------
INSERT INTO `tb_medsos` VALUES (1, 'Facebook', 'https://www.facebook.com/', NULL);
INSERT INTO `tb_medsos` VALUES (2, 'Instagram', 'https://www.instagram.com/kingfruitofficial/', NULL);
INSERT INTO `tb_medsos` VALUES (3, 'WhatsAPP', 'https://api.whatsapp.com/send?phone=6281311993939', NULL);
INSERT INTO `tb_medsos` VALUES (4, 'Twitter', 'https://twitter.com/', NULL);

-- ----------------------------
-- Table structure for tb_notifikasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_notifikasi`;
CREATE TABLE `tb_notifikasi`  (
  `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `pesan_notifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_notifikasi` int(11) NULL DEFAULT NULL,
  `id_status_baca` int(11) NULL DEFAULT NULL,
  `id_user_baca` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `kode_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_notifikasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_notifikasi
-- ----------------------------
INSERT INTO `tb_notifikasi` VALUES (1, 'Pemesanan Barang Atas Nama eko Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (2, 'Pemesanan Barang Atas Nama eko Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (3, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (4, 'Pembayaran Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 2, 2, 2, NULL, 'TEST-DATA-23112020-DR0T5');
INSERT INTO `tb_notifikasi` VALUES (5, 'Pembayaran Anda Dengan Kode Transaksi: TEST-DATA-23112020-DR0T5, Telah Dikonfirmasi', 3, 2, 1, 2, NULL);
INSERT INTO `tb_notifikasi` VALUES (6, 'Pembayaran Barang Dengan Kode Pemesanan TEST-DATA-23112020-DR0T5 Dikonfirmasi. Silahkan Lanjutkan Konfirmasi Pengiriman Barang', 5, 2, 1, NULL, 'TEST-DATA-23112020-DR0T5');
INSERT INTO `tb_notifikasi` VALUES (7, 'Barang Pesanan Anda Dengan Kode Transaksi: TEST-DATA-23112020-DR0T5, Sedang Dalam Proses Pengiriman', 3, 2, 1, 2, NULL);
INSERT INTO `tb_notifikasi` VALUES (8, 'Penjualan Dengan Kode Transaksi: TEST-DATA-23112020-DR0T5, Telah Dikomentari: mantul', 6, 2, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (9, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 2 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (10, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (11, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (12, 'Pembayaran Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 2, 2, 2, NULL, 'TEST-DATA-23112020-DR0T11');
INSERT INTO `tb_notifikasi` VALUES (13, 'Pembayaran Anda Dengan Kode Transaksi: TEST-DATA-23112020-DR0T11, Telah Dikonfirmasi', 3, 2, 1, 2, NULL);
INSERT INTO `tb_notifikasi` VALUES (14, 'Pembayaran Barang Dengan Kode Pemesanan TEST-DATA-23112020-DR0T11 Dikonfirmasi. Silahkan Lanjutkan Konfirmasi Pengiriman Barang', 5, 2, 1, NULL, 'TEST-DATA-23112020-DR0T11');
INSERT INTO `tb_notifikasi` VALUES (15, 'Barang Pesanan Anda Dengan Kode Transaksi: TEST-DATA-23112020-DR0T11, Sedang Dalam Proses Pengiriman', 3, 2, 1, 2, NULL);
INSERT INTO `tb_notifikasi` VALUES (16, 'Penjualan Dengan Kode Transaksi: TEST-DATA-23112020-DR0T11, Telah Dikomentari: mantep', 6, 2, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (17, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (18, 'Pemesanan Barang Atas Nama mohamad Dibuat. Dengan Jumlah Pemesanan 1 Pack', 1, 1, 2, NULL, NULL);
INSERT INTO `tb_notifikasi` VALUES (19, 'Pemesanan Barang Atas Nama eko Dibuat. Dengan Jumlah Pemesanan 2 Pack', 1, 1, 2, NULL, NULL);

-- ----------------------------
-- Table structure for tb_ongkir
-- ----------------------------
DROP TABLE IF EXISTS `tb_ongkir`;
CREATE TABLE `tb_ongkir`  (
  `id_ongkir` int(11) NOT NULL AUTO_INCREMENT,
  `ongkir` double(100, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ongkir`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_ongkir
-- ----------------------------
INSERT INTO `tb_ongkir` VALUES (1, 20000);

-- ----------------------------
-- Table structure for tb_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pemesanan`;
CREATE TABLE `tb_pemesanan`  (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_pemesanan` datetime(0) NULL DEFAULT NULL,
  `waktu_pengiriman` datetime(0) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `pesan_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_proses_pemesanan` int(11) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `jumlah_pemesanan` decimal(65, 0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `ongkos_kirim` double(100, 0) NULL DEFAULT NULL,
  `id_voucher_by_user` int(11) NULL DEFAULT NULL,
  `id_status_voucher` int(11) NULL DEFAULT NULL,
  `id_metode_pembayaran` int(11) NULL DEFAULT NULL,
  `pesan_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pemilik_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_transfer` date NULL DEFAULT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bank_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `receipt_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_harga_perproduk` double(255, 0) NULL DEFAULT NULL,
  `total_harga_yang_harus_dibayar` double(255, 0) NULL DEFAULT NULL,
  `kode_unik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_batas_retur` datetime(0) NULL DEFAULT NULL,
  `waktu_batas_review` datetime(0) NULL DEFAULT NULL,
  `waktu_penerimaan` datetime(0) NULL DEFAULT NULL,
  `waktu_batas_checkout` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pemesanan
-- ----------------------------
INSERT INTO `tb_pemesanan` VALUES (1, 'TEST-DATA-23112020-DR0T1', '2020-11-25 15:36:22', '2020-11-25 14:15:43', 2, NULL, 'Jalan Sehat  No 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Kedaung', 'Sawangan', '76487', 10, 1, 1, 1, 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 159000, 159019, '19', NULL, NULL, NULL, '2020-11-25 15:36:22');
INSERT INTO `tb_pemesanan` VALUES (2, 'TEST-DATA-23112020-DR0T2', '2020-11-25 15:39:16', '2020-11-25 15:38:06', 2, NULL, 'Jalan Sehat  No 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Kedaung', 'Sawangan', '76487', 10, 1, 1, 1, 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 159000, 159047, '47', NULL, NULL, NULL, '2020-11-25 15:36:16');
INSERT INTO `tb_pemesanan` VALUES (3, 'TEST-DATA-23112020-DR0T5', '2020-11-29 15:21:27', '2020-11-29 15:30:46', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 7, 1, 1, 1, 0, NULL, NULL, 2, NULL, 'rr', '2020-11-29', '44444', 'bni', '../images/buktitransfer/2020-11-292duren_voucher_icon-42 (1).png', NULL, NULL, 159000, 159023, '23', '2020-11-29 18:31:03', '2020-11-30 15:31:03', '2020-11-29 15:31:03', '2020-11-29 18:21:27');
INSERT INTO `tb_pemesanan` VALUES (6, 'TEST-DATA-23112020-DR0T4', '2020-11-29 14:54:49', '2020-11-29 14:54:49', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_pemesanan` VALUES (7, 'TEST-DATA-23112020-DR0T7', '2020-11-30 10:04:30', '2020-11-30 08:34:16', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 10, 1, 2, 1, 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 318000, 308032, '32', NULL, NULL, NULL, '2020-11-30 10:06:30');
INSERT INTO `tb_pemesanan` VALUES (8, 'TEST-DATA-23112020-DR0T8', '2020-12-02 08:49:37', '2020-11-30 09:31:29', 13, NULL, 'Jalan sehat no 109', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '453543543', 10, 1, 2, 1, 20000, 19, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 318000, 333005, '5', NULL, NULL, NULL, '2020-12-02 11:49:37');
INSERT INTO `tb_pemesanan` VALUES (9, 'TEST-DATA-23112020-DR0T9', '2020-11-30 14:12:55', '2020-11-30 10:06:47', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 10, 1, 1, 1, 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 159000, 149003, '3', NULL, NULL, NULL, '2020-11-30 10:12:55');
INSERT INTO `tb_pemesanan` VALUES (10, 'TEST-DATA-23112020-DR0T10', '2020-11-30 14:33:16', '2020-11-30 14:33:16', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 2, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_pemesanan` VALUES (11, 'TEST-DATA-23112020-DR0T11', '2020-12-01 11:42:57', '2020-12-01 11:46:53', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 7, 1, 1, 1, 20000, 1, NULL, 2, NULL, 'avi', '2020-11-01', '9826348638274', 'BNI', '../images/buktitransfer/2020-12-012Baruga_Background_crop small.png', NULL, NULL, 159000, 169077, '77', '2020-12-01 14:47:05', '2020-12-02 11:47:05', '2020-12-01 11:47:05', '2020-12-01 14:42:57');
INSERT INTO `tb_pemesanan` VALUES (12, 'TEST-DATA-23112020-DR0T12', '2020-12-01 09:25:28', '2020-12-01 09:25:28', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_pemesanan` VALUES (13, 'TEST-DATA-23112020-DR0T13', '2020-12-01 13:22:33', '2020-12-01 11:49:44', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 10, 1, 1, 1, 20000, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 159000, 174038, '38', NULL, NULL, NULL, '2020-12-01 11:22:33');
INSERT INTO `tb_pemesanan` VALUES (14, 'TEST-DATA-23112020-DR0T14', '2020-12-01 13:24:48', '2020-12-01 13:24:39', 2, NULL, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 2, 1, 1, 1, 20000, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '../images/link-aja.png', NULL, NULL, 159000, 179006, '6', NULL, NULL, NULL, '2020-12-01 19:24:48');

-- ----------------------------
-- Table structure for tb_penilaian_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_penilaian_produk`;
CREATE TABLE `tb_penilaian_produk`  (
  `id_penilaian_produk` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_penilaian_produk` datetime(0) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `id_bintang_penilaian_produk` int(11) NULL DEFAULT NULL,
  `komentar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penilaian_produk
-- ----------------------------
INSERT INTO `tb_penilaian_produk` VALUES (1, '2020-10-07 09:47:07', 1, 1, 5, 'Mantap');
INSERT INTO `tb_penilaian_produk` VALUES (2, '2020-11-29 15:31:11', 2, 1, 5, 'mantul');
INSERT INTO `tb_penilaian_produk` VALUES (3, '2020-12-01 11:47:11', 2, 1, 5, 'mantep');

-- ----------------------------
-- Table structure for tb_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `tb_penjualan`;
CREATE TABLE `tb_penjualan`  (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penjualan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_penjualan` datetime(0) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `jumlah_penjualan` decimal(65, 0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `ongkos_kirim` double(100, 0) NULL DEFAULT NULL,
  `id_voucher` int(11) NULL DEFAULT NULL,
  `id_metode_pembayaran` int(11) NULL DEFAULT NULL,
  `pesan_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pemilik_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_transfer` date NULL DEFAULT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bank_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `receipt_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_harga_perproduk` double(255, 0) NULL DEFAULT NULL,
  `total_penjualan` double(255, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penjualan
-- ----------------------------
INSERT INTO `tb_penjualan` VALUES (1, 'TEST-DATA-23112020-DR0T5', '2020-11-29 15:23:45', 2, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '2', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 1, 1, 1, 0, 2, 2, NULL, 'rr', '2020-11-29', '44444', 'bni', '../images/buktitransfer/2020-11-292duren_voucher_icon-42 (1).png', NULL, NULL, 159000, 159023);
INSERT INTO `tb_penjualan` VALUES (2, 'TEST-DATA-23112020-DR0T11', '2020-12-01 11:43:48', 2, 'Jalan sehat no 1', 'Indonesia', 'Jawa Barat', '2', 'Bekasi', 'Sawangan', 'Kedaung', '4324', 1, 1, 1, 20000, 1, 2, NULL, 'avi', '2020-11-01', '9826348638274', 'BNI', '../images/buktitransfer/2020-12-012Baruga_Background_crop small.png', NULL, NULL, 159000, 169077);

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk`  (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail1_produk` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `detail2_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_produk` int(11) NULL DEFAULT NULL,
  `jumlah_stok` decimal(65, 0) NULL DEFAULT NULL,
  `id_satuan_produk` int(11) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `harga` double(100, 0) NULL DEFAULT NULL,
  `diskon` double(50, 0) NULL DEFAULT NULL,
  `gambar1_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar2_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar3_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar4_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar5_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `spesial_produk` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_produk
-- ----------------------------
INSERT INTO `tb_produk` VALUES (1, 'Super Montong', 'Durian Super Montong \r\nKing Fruit memiliki ketebalan daging yang tebal, dengan ciri khas rasa manis, dengan tekstur lembut nan creamy. Dikemas secara higienis , dilengkapi sarung tangan dan tissue basah yang memudahkan untuk di konsumsi dimana pun dan kapanpun.', '  ', 1, 197, 1, 1, 159000, 0, '2020-10-281duren.png', '2020-10-281duren.png', '2020-10-281duren.png', 'gambar4_produk2020-09-301duren.png', NULL, 1);
INSERT INTO `tb_produk` VALUES (2, 'Durian Bawor', 'Durian', NULL, 1, 100, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tb_produk_dalam_proses
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk_dalam_proses`;
CREATE TABLE `tb_produk_dalam_proses`  (
  `id_produk_dalam_proses` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(11) NULL DEFAULT NULL,
  `id_produk` int(11) NULL DEFAULT NULL,
  `tanggal_checkout` datetime(0) NULL DEFAULT NULL,
  `tanggal_batal_dipesan` datetime(0) NULL DEFAULT NULL,
  `tanggal_dibeli` datetime(0) NULL DEFAULT NULL,
  `id_berat_produk` int(11) NULL DEFAULT NULL,
  `jumlah_pemesanan` decimal(65, 0) NULL DEFAULT NULL,
  `id_status_produk_dalam_proses` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk_dalam_proses`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_produk_dalam_proses
-- ----------------------------
INSERT INTO `tb_produk_dalam_proses` VALUES (1, 1, 1, '2020-11-20 13:46:32', NULL, '2020-11-20 13:50:14', 1, 10, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (2, 2, 1, '2020-11-20 14:00:37', NULL, NULL, 1, 2, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (3, 3, 1, '2020-11-20 15:56:11', NULL, '2020-11-29 15:23:45', 1, 4, 3);
INSERT INTO `tb_produk_dalam_proses` VALUES (4, 4, 1, '2020-11-20 16:11:36', NULL, NULL, 1, 10, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (5, 5, 1, '2020-11-20 16:16:17', NULL, NULL, 1, 6, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (6, 6, 1, '2020-11-20 16:20:57', NULL, NULL, 1, 5, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (7, 7, 1, '2020-11-20 16:23:19', NULL, NULL, 1, 5, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (8, 8, 1, '2020-11-20 21:57:21', NULL, NULL, 1, 1, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (9, 9, 1, '2020-11-22 16:52:12', NULL, '2020-11-22 16:56:22', 1, 6, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (10, 10, 1, '2020-11-23 08:36:49', NULL, NULL, 1, 4, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (11, 11, 1, '2020-11-23 09:13:01', NULL, '2020-12-01 11:43:48', 1, 10, 3);
INSERT INTO `tb_produk_dalam_proses` VALUES (12, 12, 1, '2020-11-23 09:14:48', NULL, NULL, 1, 5, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (13, 13, 1, '2020-11-23 09:15:41', NULL, NULL, 1, 5, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (14, 15, 1, '2020-11-23 13:30:25', NULL, '2020-11-23 13:31:36', 1, 5, 3);
INSERT INTO `tb_produk_dalam_proses` VALUES (15, 1, 1, '2020-11-25 15:36:22', NULL, NULL, 1, 1, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (16, 2, 1, '2020-11-25 15:39:16', NULL, NULL, 1, 1, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (17, 3, 1, '2020-11-29 15:21:27', NULL, '2020-11-29 15:23:45', 1, 1, 3);
INSERT INTO `tb_produk_dalam_proses` VALUES (18, 7, 1, '2020-11-30 10:04:30', NULL, NULL, 1, 2, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (19, 9, 1, '2020-11-30 14:12:55', NULL, NULL, 1, 1, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (20, 11, 1, '2020-12-01 11:42:57', NULL, '2020-12-01 11:43:48', 1, 1, 3);
INSERT INTO `tb_produk_dalam_proses` VALUES (21, 13, 1, '2020-12-01 13:22:33', NULL, NULL, 1, 1, 2);
INSERT INTO `tb_produk_dalam_proses` VALUES (22, 14, 1, '2020-12-01 13:24:48', NULL, NULL, 1, 1, 1);
INSERT INTO `tb_produk_dalam_proses` VALUES (23, 8, 1, '2020-12-02 08:49:37', NULL, NULL, 1, 2, 2);

-- ----------------------------
-- Table structure for tb_retur_pembelian
-- ----------------------------
DROP TABLE IF EXISTS `tb_retur_pembelian`;
CREATE TABLE `tb_retur_pembelian`  (
  `id_retur` int(11) NOT NULL AUTO_INCREMENT,
  `kode_retur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_user_retur` int(11) NULL DEFAULT NULL,
  `id_pemesanan` int(11) NULL DEFAULT NULL,
  `waktu_retur` datetime(0) NULL DEFAULT NULL,
  `pesan_retur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_barang_retur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_retur` int(11) NULL DEFAULT NULL,
  `tanggal_pengiriman_kembali` datetime(0) NULL DEFAULT NULL,
  `admin_nama_pemilik_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_pesan_retur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_tanggal_transfer` date NULL DEFAULT NULL,
  `admin_nomor_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_bank_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_gambar_bukti_transfer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_total_pengembalian_dana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_retur`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_riwayat_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_riwayat_pemesanan`;
CREATE TABLE `tb_riwayat_pemesanan`  (
  `id_riwayat_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(11) NULL DEFAULT NULL,
  `waktu_riwayat_pemesanan` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_riwayat_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_share_peta_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_share_peta_lokasi`;
CREATE TABLE `tb_share_peta_lokasi`  (
  `id_share_peta_lokasi_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `link_share_peta_lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_share_peta_lokasi_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_share_peta_lokasi
-- ----------------------------
INSERT INTO `tb_share_peta_lokasi` VALUES (1, 3, NULL);
INSERT INTO `tb_share_peta_lokasi` VALUES (2, 3, NULL);
INSERT INTO `tb_share_peta_lokasi` VALUES (3, 4, NULL);

-- ----------------------------
-- Table structure for tb_status_pembayaran_cekditbpemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_status_pembayaran_cekditbpemesanan`;
CREATE TABLE `tb_status_pembayaran_cekditbpemesanan`  (
  `id_status_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `status_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_pembayaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_testimoni
-- ----------------------------
DROP TABLE IF EXISTS `tb_testimoni`;
CREATE TABLE `tb_testimoni`  (
  `id_testimoni` int(11) NOT NULL AUTO_INCREMENT,
  `link_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_testimoni`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_testimoni
-- ----------------------------
INSERT INTO `tb_testimoni` VALUES (3, 'bOlccE12vRQ', NULL, 'Nex Carlos');
INSERT INTO `tb_testimoni` VALUES (5, 'kEDY74-m9ZI', NULL, 'Augie Fantinus');
INSERT INTO `tb_testimoni` VALUES (8, 'Ltb7COMeYck', NULL, 'Aming');
INSERT INTO `tb_testimoni` VALUES (10, 'QCYF-woZFGU', NULL, 'Ario Adimas');
INSERT INTO `tb_testimoni` VALUES (11, 'qGy8sJa80vE', NULL, 'Ncess Nabati');
INSERT INTO `tb_testimoni` VALUES (12, 'EgM68xzbSgA', NULL, 'Tike Priatnakusumah');

-- ----------------------------
-- Table structure for tb_testimoni2
-- ----------------------------
DROP TABLE IF EXISTS `tb_testimoni2`;
CREATE TABLE `tb_testimoni2`  (
  `id_testimoni` int(11) NOT NULL AUTO_INCREMENT,
  `link_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_testimoni`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_voucher
-- ----------------------------
DROP TABLE IF EXISTS `tb_voucher`;
CREATE TABLE `tb_voucher`  (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `kode_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_voucher` int(11) NULL DEFAULT NULL,
  `total_voucher` double(100, 0) NULL DEFAULT NULL,
  `waktu_berlaku` datetime(0) NULL DEFAULT NULL,
  `gambar_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_kirim_konsumen` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_voucher
-- ----------------------------
INSERT INTO `tb_voucher` VALUES (1, 'VDRN-1', 'Diskon Awal Bulan', 1, 10000, '2020-12-10 00:00:00', '../images/voucher/potonganharga.png', 2);
INSERT INTO `tb_voucher` VALUES (2, 'VDRN-2', 'Potongan Ongkir', 2, 5000, '2020-12-20 00:00:00', '../images/voucher/gratisongkir.png', 2);

-- ----------------------------
-- Table structure for tb_voucher_by_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_voucher_by_user`;
CREATE TABLE `tb_voucher_by_user`  (
  `id_voucher_by_user` double(100, 0) NOT NULL AUTO_INCREMENT,
  `id_voucher` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_status_voucher` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher_by_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_voucher_by_user
-- ----------------------------
INSERT INTO `tb_voucher_by_user` VALUES (1, 1, 2, 2);
INSERT INTO `tb_voucher_by_user` VALUES (2, 1, 3, 2);
INSERT INTO `tb_voucher_by_user` VALUES (3, 1, 4, 1);
INSERT INTO `tb_voucher_by_user` VALUES (4, 1, 5, 1);
INSERT INTO `tb_voucher_by_user` VALUES (5, 1, 9, 1);
INSERT INTO `tb_voucher_by_user` VALUES (6, 1, 10, 1);
INSERT INTO `tb_voucher_by_user` VALUES (7, 1, 12, 1);
INSERT INTO `tb_voucher_by_user` VALUES (8, 1, 13, 1);
INSERT INTO `tb_voucher_by_user` VALUES (9, 1, 14, 1);
INSERT INTO `tb_voucher_by_user` VALUES (10, 1, 15, 1);
INSERT INTO `tb_voucher_by_user` VALUES (11, 1, 17, 1);
INSERT INTO `tb_voucher_by_user` VALUES (12, 2, 2, 2);
INSERT INTO `tb_voucher_by_user` VALUES (13, 2, 3, 1);
INSERT INTO `tb_voucher_by_user` VALUES (14, 2, 4, 1);
INSERT INTO `tb_voucher_by_user` VALUES (15, 2, 5, 1);
INSERT INTO `tb_voucher_by_user` VALUES (16, 2, 9, 1);
INSERT INTO `tb_voucher_by_user` VALUES (17, 2, 10, 1);
INSERT INTO `tb_voucher_by_user` VALUES (18, 2, 12, 1);
INSERT INTO `tb_voucher_by_user` VALUES (19, 2, 13, 2);
INSERT INTO `tb_voucher_by_user` VALUES (20, 2, 14, 1);
INSERT INTO `tb_voucher_by_user` VALUES (21, 2, 15, 1);
INSERT INTO `tb_voucher_by_user` VALUES (22, 2, 17, 1);

-- ----------------------------
-- Table structure for tb_voucher_copy1
-- ----------------------------
DROP TABLE IF EXISTS `tb_voucher_copy1`;
CREATE TABLE `tb_voucher_copy1`  (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `kode_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_voucher` int(11) NULL DEFAULT NULL,
  `total_voucher` double(100, 0) NULL DEFAULT NULL,
  `waktu_berlaku` datetime(0) NULL DEFAULT NULL,
  `id_status_voucher` int(11) NULL DEFAULT NULL,
  `gambar_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_kirim_konsumen` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_voucher_copy1
-- ----------------------------
INSERT INTO `tb_voucher_copy1` VALUES (1, 'VDRN-1', 'Diskon Awal Bulan', 1, 10000, '2020-12-10 00:00:00', NULL, '../images/voucher/potonganharga.png', 2);
INSERT INTO `tb_voucher_copy1` VALUES (2, 'VDRN-2', 'Potongan Ongkir', 2, 10000, '2020-11-30 23:00:00', NULL, '../images/voucher/gratisongkir.png', 2);

-- ----------------------------
-- Table structure for tb_website_halaman_tampilan_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_halaman_tampilan_detail`;
CREATE TABLE `tb_website_halaman_tampilan_detail`  (
  `id_halaman_tampilan_detail` int(11) NOT NULL AUTO_INCREMENT,
  `judul_halaman_detail_pada_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `teks_halaman_detail_pada_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_halaman_tampilan_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_website_halaman_utama_keunggulan
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_halaman_utama_keunggulan`;
CREATE TABLE `tb_website_halaman_utama_keunggulan`  (
  `id_halaman_utama_keunggulan` int(11) NOT NULL AUTO_INCREMENT,
  `data1_gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data1_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data1_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data2_gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data2_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data2_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data3_gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data3_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data3_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data4_gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data4_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data4_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_halaman_utama_keunggulan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_website_halaman_utama_top
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_halaman_utama_top`;
CREATE TABLE `tb_website_halaman_utama_top`  (
  `id_halaman_utama_top` int(11) NOT NULL AUTO_INCREMENT,
  `top_judul_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `top_detail_teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `top_gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_halaman_utama_top`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_website_menu_header
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_menu_header`;
CREATE TABLE `tb_website_menu_header`  (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
