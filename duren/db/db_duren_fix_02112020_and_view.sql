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

 Date: 02/12/2020 12:43:25
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

-- ----------------------------
-- View structure for view_data_all_user
-- ----------------------------
DROP VIEW IF EXISTS `view_data_all_user`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_all_user` AS select `tb_data_user`.`id_data_user` AS `id_data_user`,`tb_login_user`.`id_user` AS `id_user`,`tb_login_user`.`tanggal_mendaftar` AS `tanggal_mendaftar`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_data_user`.`alamat` AS `alamat`,`tb_data_user`.`negara` AS `negara`,`tb_data_user`.`provinsi` AS `provinsi`,`tb_data_user`.`kabupaten` AS `kabupaten`,`tb_data_user`.`id_kota` AS `id_kota`,`rt_kota`.`kota` AS `kota`,`tb_data_user`.`kecamatan` AS `kecamatan`,`tb_data_user`.`kelurahan` AS `kelurahan`,`tb_data_user`.`kode_pos` AS `kode_pos`,`tb_login_user`.`id_status_user` AS `id_status_user`,`rt_status_user`.`status_user` AS `status_user`,`tb_login_user`.`foto` AS `foto`,`tb_data_user`.`tanggal_lahir` AS `tanggal_lahir`,`tb_data_user`.`id_jenis_kelamin` AS `id_jenis_kelamin`,`rt_jenis_kelamin`.`jenis_kelamin` AS `jenis_kelamin` from ((((`tb_login_user` left join `rt_status_user` on(`rt_status_user`.`id_status_user` = `tb_login_user`.`id_status_user`)) left join `tb_data_user` on(`tb_login_user`.`id_user` = `tb_data_user`.`id_user`)) left join `rt_jenis_kelamin` on(`rt_jenis_kelamin`.`id_jenis_kelamin` = `tb_data_user`.`id_jenis_kelamin`)) left join `rt_kota` on(`tb_data_user`.`id_kota` = `rt_kota`.`id_kota`)) ;

-- ----------------------------
-- View structure for view_data_chat
-- ----------------------------
DROP VIEW IF EXISTS `view_data_chat`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_chat` AS select `tb_chat`.`id_chat` AS `id_chat`,`tb_chat`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_chat`.`waktu_chat` AS `waktu_chat`,`tb_chat`.`teks_chat` AS `teks_chat`,`tb_chat`.`gambar_chat` AS `gambar_chat`,`tb_chat`.`kode_chat` AS `kode_chat`,`tb_chat`.`id_status_chat` AS `id_status_chat`,`rt_status_chat`.`status_chat` AS `status_chat` from ((`tb_chat` left join `rt_status_chat` on(`rt_status_chat`.`id_status_chat` = `tb_chat`.`id_status_chat`)) left join `tb_login_user` on(`tb_login_user`.`id_user` = `tb_chat`.`id_user`)) ;

-- ----------------------------
-- View structure for view_data_detail_lokasi_konsumen
-- ----------------------------
DROP VIEW IF EXISTS `view_data_detail_lokasi_konsumen`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_detail_lokasi_konsumen` AS select `tb_share_peta_lokasi`.`id_share_peta_lokasi_user` AS `id_share_peta_lokasi_user`,`tb_share_peta_lokasi`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_data_user`.`alamat` AS `alamat`,`tb_data_user`.`negara` AS `negara`,`tb_data_user`.`provinsi` AS `provinsi`,`tb_data_user`.`kabupaten` AS `kabupaten`,`tb_data_user`.`kode_pos` AS `kode_pos`,`tb_data_user`.`kecamatan` AS `kecamatan`,`tb_data_user`.`kelurahan` AS `kelurahan`,`tb_data_user`.`id_kota` AS `id_kota`,`rt_kota`.`kota` AS `kota` from (((`tb_share_peta_lokasi` left join `tb_login_user` on(`tb_login_user`.`id_user` = `tb_share_peta_lokasi`.`id_user`)) left join `tb_data_user` on(`tb_data_user`.`id_user` = `tb_login_user`.`id_user`)) left join `rt_kota` on(`tb_data_user`.`id_kota` = `rt_kota`.`id_kota`)) ;

-- ----------------------------
-- View structure for view_data_history_cart_konsumen
-- ----------------------------
DROP VIEW IF EXISTS `view_data_history_cart_konsumen`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_history_cart_konsumen` AS SELECT
tb_pemesanan.id_pemesanan AS id_pemesanan,
tb_pemesanan.kode_pemesanan AS kode_pemesanan,
tb_pemesanan.waktu_pemesanan AS waktu_pemesanan_detail,
date_format(`tb_pemesanan`.`waktu_pemesanan`,'%e/%c/%Y %H:%i') AS waktu_pemesanan,
tb_pemesanan.id_user AS id_user,
tb_login_user.username AS username,
tb_login_user.nama_lengkap AS nama_lengkap,
tb_login_user.email AS email,
tb_login_user.nomor_hp AS nomor_hp,
tb_data_user.alamat AS alamat,
tb_data_user.negara AS negara,
tb_data_user.provinsi AS provinsi,
tb_data_user.kabupaten AS kabupaten,
tb_data_user.id_kota AS id_kota,
rt_kota.kota AS kota,
tb_data_user.kelurahan AS kelurahan,
tb_data_user.kecamatan AS kecamatan,
tb_data_user.kode_pos AS kode_pos,
tb_pemesanan.pesan_pemesanan AS pesan_pemesanan,
tb_pemesanan.id_proses_pemesanan AS id_proses_pemesanan,
rt_proses_pemesanan.proses_pemesanan AS proses_pemesanan,
tb_pemesanan.id_produk AS id_produk,
tb_produk.nama_produk AS nama_produk,
tb_produk.detail1_produk AS detail1_produk,
tb_produk.id_jenis_produk AS id_jenis_produk,
rt_jenis_produk.jenis_produk AS jenis_produk,
tb_produk.harga AS harga,
tb_produk.gambar1_produk AS gambar1_produk,
tb_pemesanan.jumlah_pemesanan AS jumlah_pemesanan,
tb_pemesanan.ongkos_kirim AS ongkos_kirim,
tb_pemesanan.id_metode_pembayaran AS id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran AS metode_pembayaran,
rt_metode_pembayaran.kode_link_pembayaran AS kode_link_pembayaran,
tb_pemesanan.pesan_bukti_pembayaran AS pesan_bukti_pembayaran,
tb_pemesanan.gambar_bukti_pembayaran AS gambar_bukti_pembayaran,
tb_pemesanan.id_voucher_by_user,
tb_voucher_by_user.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.judul_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku
FROM
(((((((((tb_pemesanan
LEFT JOIN tb_login_user ON (tb_login_user.id_user = tb_pemesanan.id_user))
LEFT JOIN tb_data_user ON (tb_data_user.id_user = tb_login_user.id_user))
LEFT JOIN rt_proses_pemesanan ON (rt_proses_pemesanan.id_proses_pemesanan = tb_pemesanan.id_proses_pemesanan))
LEFT JOIN tb_produk ON (tb_produk.id_produk = tb_pemesanan.id_produk))
LEFT JOIN rt_jenis_produk ON (rt_jenis_produk.id_jenis_produk = tb_produk.id_jenis_produk))))
LEFT JOIN rt_metode_pembayaran ON (rt_metode_pembayaran.id_metode_pembayaran = tb_pemesanan.id_metode_pembayaran))
LEFT JOIN rt_kota ON (tb_data_user.id_kota = rt_kota.id_kota))
LEFT JOIN tb_voucher_by_user ON tb_pemesanan.id_voucher_by_user = tb_voucher_by_user.id_voucher_by_user
LEFT OUTER JOIN tb_voucher ON tb_voucher_by_user.id_voucher = tb_voucher.id_voucher
LEFT OUTER JOIN rt_jenis_voucher ON tb_voucher.judul_voucher = rt_jenis_voucher.id_jenis_voucher
WHERE
tb_pemesanan.id_proses_pemesanan <> 10 ;

-- ----------------------------
-- View structure for view_data_karyawan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_karyawan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_karyawan` AS select `tb_login_user`.`id_user` AS `id_user`,`tb_login_user`.`tanggal_mendaftar` AS `tanggal_mendaftar`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_login_user`.`password` AS `password`,`tb_login_user`.`id_status_user` AS `id_status_user`,`rt_status_user`.`status_user` AS `status_user`,`tb_login_user`.`foto` AS `foto` from (`tb_login_user` left join `rt_status_user` on(`rt_status_user`.`id_status_user` = `tb_login_user`.`id_status_user`)) where `tb_login_user`.`id_status_user` <> 5 ;

-- ----------------------------
-- View structure for view_data_konsumen
-- ----------------------------
DROP VIEW IF EXISTS `view_data_konsumen`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_konsumen` AS select `tb_data_user`.`id_data_user` AS `id_data_user`,`tb_login_user`.`id_user` AS `id_user`,`tb_login_user`.`tanggal_mendaftar` AS `tanggal_mendaftar`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_login_user`.`password` AS `password`,`tb_data_user`.`alamat` AS `alamat`,`tb_data_user`.`negara` AS `negara`,`tb_data_user`.`provinsi` AS `provinsi`,`tb_data_user`.`kabupaten` AS `kabupaten`,`tb_data_user`.`id_kota` AS `id_kota`,`rt_kota`.`kota` AS `kota`,`tb_data_user`.`kecamatan` AS `kecamatan`,`tb_data_user`.`kelurahan` AS `kelurahan`,`tb_data_user`.`kode_pos` AS `kode_pos`,`tb_login_user`.`id_status_user` AS `id_status_user`,`rt_status_user`.`status_user` AS `status_user`,`tb_login_user`.`foto` AS `foto` from (((`tb_login_user` left join `rt_status_user` on(`rt_status_user`.`id_status_user` = `tb_login_user`.`id_status_user`)) left join `tb_data_user` on(`tb_login_user`.`id_user` = `tb_data_user`.`id_user`)) left join `rt_kota` on(`tb_data_user`.`id_kota` = `rt_kota`.`id_kota`)) where `tb_login_user`.`id_status_user` = 5 ;

-- ----------------------------
-- View structure for view_data_login
-- ----------------------------
DROP VIEW IF EXISTS `view_data_login`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_login` AS select `tb_login_user`.`id_user` AS `id_user`,`tb_login_user`.`tanggal_mendaftar` AS `tanggal_mendaftar`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_login_user`.`password` AS `password`,`tb_login_user`.`id_status_user` AS `id_status_user`,`rt_status_user`.`status_user` AS `status_user`,`tb_login_user`.`foto` AS `foto` from (`tb_login_user` left join `rt_status_user` on(`rt_status_user`.`id_status_user` = `tb_login_user`.`id_status_user`)) ;

-- ----------------------------
-- View structure for view_data_notifikasi
-- ----------------------------
DROP VIEW IF EXISTS `view_data_notifikasi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_notifikasi` AS select `tb_notifikasi`.`id_notifikasi` AS `id_notifikasi`,`tb_notifikasi`.`pesan_notifikasi` AS `pesan_notifikasi`,`tb_notifikasi`.`id_status_notifikasi` AS `id_status_notifikasi`,`rt_status_notifikasi`.`status_notifikasi` AS `status_notifikasi`,`tb_notifikasi`.`id_status_baca` AS `id_status_baca`,`rt_status_baca`.`status_baca` AS `status_baca`,`tb_notifikasi`.`id_user_baca` AS `id_user_baca`,`rt_user_baca`.`user_baca` AS `user_baca` from (((`tb_notifikasi` left join `rt_status_notifikasi` on(`tb_notifikasi`.`id_status_notifikasi` = `rt_status_notifikasi`.`id_status_notifikasi`)) left join `rt_status_baca` on(`tb_notifikasi`.`id_status_baca` = `rt_status_baca`.`id_status_baca`)) left join `rt_user_baca` on(`tb_notifikasi`.`id_user_baca` = `rt_user_baca`.`id_user_baca`)) ;

-- ----------------------------
-- View structure for view_data_pemesanan_selesai
-- ----------------------------
DROP VIEW IF EXISTS `view_data_pemesanan_selesai`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_pemesanan_selesai` AS SELECT
tb_pemesanan.id_pemesanan AS id_pemesanan,
tb_pemesanan.kode_pemesanan AS kode_pemesanan,
date_format(`tb_pemesanan`.`waktu_pemesanan`,'%d/%m/%Y %H:%i') AS waktu_pemesanan,
tb_pemesanan.id_user AS id_user,
tb_login_user.username AS username,
tb_login_user.nama_lengkap AS nama_lengkap,
tb_login_user.email AS email,
tb_login_user.nomor_hp AS nomor_hp,
tb_data_user.alamat AS alamat,
tb_data_user.negara AS negara,
tb_data_user.provinsi AS provinsi,
tb_data_user.kabupaten AS kabupaten,
tb_data_user.id_kota AS id_kota,
rt_kota.kota AS kota,
tb_data_user.kecamatan AS kecamatan,
tb_data_user.kelurahan AS kelurahan,
tb_data_user.kode_pos AS kode_pos,
tb_pemesanan.pesan_pemesanan AS pesan_pemesanan,
tb_pemesanan.id_proses_pemesanan AS id_proses_pemesanan,
rt_proses_pemesanan.proses_pemesanan AS proses_pemesanan,
tb_pemesanan.id_produk AS id_produk,
tb_produk.nama_produk AS nama_produk,
tb_produk.detail1_produk AS detail1_produk,
tb_produk.id_jenis_produk AS id_jenis_produk,
rt_jenis_produk.jenis_produk AS jenis_produk,
tb_pemesanan.jumlah_pemesanan AS jumlah_pemesanan,
tb_produk.harga AS harga,
tb_produk.diskon AS diskon,
`tb_produk`.`harga` - `tb_produk`.`diskon` AS harga_setelah_diskon,
tb_pemesanan.total_harga_perproduk AS total_harga_perproduk,
tb_pemesanan.ongkos_kirim AS ongkos_kirim,
tb_pemesanan.total_harga_yang_harus_dibayar AS total_harga_yang_harus_dibayar,
tb_produk.gambar1_produk AS gambar1_produk,
tb_produk.id_satuan_produk AS id_satuan_produk,
rt_satuan_produk.satuan_produk AS satuan_produk,
tb_pemesanan.id_berat_produk AS id_berat_produk,
rt_berat_produk_pemesanan.teks_berat_produk AS teks_berat_produk,
rt_berat_produk_pemesanan.konfersi_berat_produk_perkilogram AS konfersi_berat_produk_perkilogram,
tb_pemesanan.id_metode_pembayaran AS id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran AS metode_pembayaran,
rt_metode_pembayaran.kode_link_pembayaran AS kode_link_pembayaran,
tb_pemesanan.pesan_bukti_pembayaran AS pesan_bukti_pembayaran,
tb_pemesanan.gambar_bukti_pembayaran AS gambar_bukti_pembayaran,
tb_pemesanan.nama_pemilik_rekening AS nama_pemilik_rekening,
date_format(`tb_pemesanan`.`tanggal_transfer`,'%d/%m/%Y') AS tanggal_transfer,
tb_pemesanan.no_rekening AS no_rekening,
tb_pemesanan.bank_asal AS bank_asal,
tb_pemesanan.id_voucher_by_user,
tb_voucher_by_user.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.judul_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku,
tb_voucher_by_user.id_status_voucher,
rt_status_voucher.status_voucher
FROM
(((((((((((tb_pemesanan
LEFT JOIN tb_login_user ON (tb_login_user.id_user = tb_pemesanan.id_user))
LEFT JOIN tb_data_user ON (tb_data_user.id_user = tb_login_user.id_user))
LEFT JOIN rt_proses_pemesanan ON (rt_proses_pemesanan.id_proses_pemesanan = tb_pemesanan.id_proses_pemesanan))
LEFT JOIN tb_produk ON (tb_produk.id_produk = tb_pemesanan.id_produk))
LEFT JOIN rt_jenis_produk ON (rt_jenis_produk.id_jenis_produk = tb_produk.id_jenis_produk))))
LEFT JOIN rt_metode_pembayaran ON (rt_metode_pembayaran.id_metode_pembayaran = tb_pemesanan.id_metode_pembayaran))
LEFT JOIN rt_satuan_produk ON (rt_satuan_produk.id_satuan_produk = tb_produk.id_satuan_produk))
LEFT JOIN rt_berat_produk_pemesanan ON (tb_pemesanan.id_berat_produk = rt_berat_produk_pemesanan.id_berat_produk))
LEFT JOIN rt_kota ON (tb_data_user.id_kota = rt_kota.id_kota))
LEFT JOIN tb_voucher_by_user ON tb_pemesanan.id_voucher_by_user = tb_voucher_by_user.id_voucher_by_user
LEFT OUTER JOIN tb_voucher ON tb_voucher_by_user.id_voucher = tb_voucher.id_voucher
LEFT OUTER JOIN rt_jenis_voucher ON tb_voucher.id_jenis_voucher = rt_jenis_voucher.id_jenis_voucher
LEFT OUTER JOIN rt_status_voucher ON tb_voucher_by_user.id_status_voucher = rt_status_voucher.id_status_voucher
WHERE
tb_pemesanan.id_proses_pemesanan = '7'
GROUP BY
tb_pemesanan.kode_pemesanan ;

-- ----------------------------
-- View structure for view_data_penilaian_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_data_penilaian_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_penilaian_produk` AS select `tb_penilaian_produk`.`id_penilaian_produk` AS `id_penilaian_produk`,`tb_penilaian_produk`.`tanggal_penilaian_produk` AS `tanggal_penilaian_produk_detail`,date_format(`tb_penilaian_produk`.`tanggal_penilaian_produk`,'%e/%c/%Y %H:%i') AS `tanggal_penilaian_produk`,`tb_penilaian_produk`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_penilaian_produk`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_penilaian_produk`.`id_bintang_penilaian_produk` AS `id_bintang_penilaian_produk`,`rt_bintang_penilaian_produk`.`bintang_penilaian_produk` AS `bintang_penilaian_produk`,`tb_penilaian_produk`.`komentar` AS `komentar`,`tb_produk`.`detail1_produk` AS `detail1_produk`,`tb_produk`.`detail2_produk` AS `detail2_produk`,`tb_produk`.`harga` AS `harga`,`tb_produk`.`gambar1_produk` AS `gambar1_produk`,`tb_produk`.`gambar2_produk` AS `gambar2_produk`,`tb_produk`.`gambar3_produk` AS `gambar3_produk`,`tb_produk`.`gambar4_produk` AS `gambar4_produk`,`tb_login_user`.`foto` AS `foto` from (((`tb_penilaian_produk` left join `tb_login_user` on(`tb_login_user`.`id_user` = `tb_penilaian_produk`.`id_user`)) left join `tb_produk` on(`tb_produk`.`id_produk` = `tb_penilaian_produk`.`id_produk`)) left join `rt_bintang_penilaian_produk` on(`rt_bintang_penilaian_produk`.`id_bintang_penilaian_produk` = `tb_penilaian_produk`.`id_bintang_penilaian_produk`)) ;

-- ----------------------------
-- View structure for view_data_penjualan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_penjualan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_penjualan` AS SELECT
tb_penjualan.id_penjualan AS id_penjualan,
tb_penjualan.kode_penjualan AS kode_penjualan,
tb_penjualan.waktu_penjualan AS waktu_penjualan_detail,
date_format(`tb_penjualan`.`waktu_penjualan`,'%e/%c/%Y %H:%i') AS waktu_penjualan,
tb_penjualan.id_user AS id_user,
tb_login_user.username AS username,
tb_login_user.nama_lengkap AS nama_lengkap,
tb_login_user.email AS email,
tb_login_user.nomor_hp AS nomor_hp,
tb_login_user.foto AS foto,
tb_penjualan.alamat AS alamat,
tb_penjualan.negara AS negara,
tb_penjualan.provinsi AS provinsi,
tb_penjualan.kabupaten AS kabupaten,
tb_penjualan.kota AS kota,
tb_penjualan.kecamatan AS kecamatan,
tb_penjualan.kelurahan AS kelurahan,
tb_penjualan.kode_pos AS kode_pos,
tb_penjualan.id_produk AS id_produk,
tb_produk.nama_produk AS nama_produk,
tb_produk.id_jenis_produk AS id_jenis_produk,
rt_jenis_produk.jenis_produk AS jenis_produk,
tb_produk.id_satuan_produk AS id_satuan_produk,
rt_satuan_produk.satuan_produk AS satuan_produk,
tb_penjualan.jumlah_penjualan AS jumlah_penjualan,
tb_penjualan.id_berat_produk AS id_berat_produk,
rt_berat_produk_pemesanan.teks_berat_produk AS teks_berat_produk,
rt_berat_produk_pemesanan.konfersi_berat_produk_perkilogram AS konfersi_berat_produk_perkilogram,
tb_penjualan.ongkos_kirim AS ongkos_kirim,
tb_penjualan.id_voucher AS id_voucher,
rt_jenis_voucher.jenis_voucher AS jenis_voucher,
tb_penjualan.id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran,
tb_penjualan.pesan_bukti_pembayaran AS pesan_bukti_pembayaran,
tb_penjualan.nama_pemilik_rekening AS nama_pemilik_rekening,
tb_penjualan.tanggal_transfer AS tanggal_transfer,
tb_penjualan.no_rekening AS no_rekening,
tb_penjualan.bank_asal AS bank_asal,
tb_penjualan.gambar_bukti_pembayaran AS gambar_bukti_pembayaran,
tb_penjualan.total_harga_perproduk AS total_harga_perproduk,
tb_penjualan.total_penjualan AS total_penjualan
FROM
((((((tb_penjualan
LEFT JOIN tb_login_user ON (tb_penjualan.id_user = tb_login_user.id_user))
LEFT JOIN tb_produk ON (tb_penjualan.id_produk = tb_produk.id_produk))
LEFT JOIN rt_jenis_produk ON (tb_produk.id_jenis_produk = rt_jenis_produk.id_jenis_produk))
LEFT JOIN rt_berat_produk_pemesanan ON (tb_penjualan.id_berat_produk = rt_berat_produk_pemesanan.id_berat_produk))
LEFT JOIN rt_jenis_voucher ON (tb_penjualan.id_voucher = rt_jenis_voucher.id_jenis_voucher))
LEFT JOIN rt_satuan_produk ON (tb_produk.id_satuan_produk = rt_satuan_produk.id_satuan_produk))
LEFT JOIN rt_metode_pembayaran ON tb_penjualan.id_metode_pembayaran = rt_metode_pembayaran.id_metode_pembayaran ;

-- ----------------------------
-- View structure for view_data_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_data_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_produk` AS select `tb_produk`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_produk`.`detail1_produk` AS `detail1_produk`,`tb_produk`.`detail2_produk` AS `detail2_produk`,`tb_produk`.`id_jenis_produk` AS `id_jenis_produk`,`rt_jenis_produk`.`jenis_produk` AS `jenis_produk`,`tb_produk`.`jumlah_stok` AS `jumlah_stok`,`tb_produk`.`id_satuan_produk` AS `id_satuan_produk`,`rt_satuan_produk`.`satuan_produk` AS `satuan_produk`,`tb_produk`.`harga` AS `harga`,`tb_produk`.`diskon` AS `diskon`,`tb_produk`.`gambar1_produk` AS `gambar1_produk`,`tb_produk`.`gambar2_produk` AS `gambar2_produk`,`tb_produk`.`gambar3_produk` AS `gambar3_produk`,`tb_produk`.`gambar4_produk` AS `gambar4_produk`,`tb_produk`.`gambar5_produk` AS `gambar5_produk`,`tb_produk`.`harga` - `tb_produk`.`diskon` AS `harga_setelah_diskon` from ((`tb_produk` left join `rt_jenis_produk` on(`tb_produk`.`id_jenis_produk` = `rt_jenis_produk`.`id_jenis_produk`)) left join `rt_satuan_produk` on(`tb_produk`.`id_satuan_produk` = `rt_satuan_produk`.`id_satuan_produk`)) order by `tb_produk`.`id_produk` ;

-- ----------------------------
-- View structure for view_data_produk_dalam_proses
-- ----------------------------
DROP VIEW IF EXISTS `view_data_produk_dalam_proses`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_produk_dalam_proses` AS select `tb_produk_dalam_proses`.`id_produk_dalam_proses` AS `id_produk_dalam_proses`,`tb_produk_dalam_proses`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_produk_dalam_proses`.`tanggal_checkout` AS `tanggal_checkout`,`tb_produk_dalam_proses`.`tanggal_batal_dipesan` AS `tanggal_batal_dipesan`,`tb_produk_dalam_proses`.`tanggal_dibeli` AS `tanggal_dibeli`,`tb_produk_dalam_proses`.`id_status_produk_dalam_proses` AS `id_status_produk_dalam_proses`,`rt_status_produk_dalam_proses`.`status_produk_dalam_proses` AS `status_produk_dalam_proses`,`tb_produk_dalam_proses`.`id_berat_produk` AS `id_berat_produk`,`tb_produk_dalam_proses`.`jumlah_pemesanan` AS `jumlah_pemesanan` from ((`tb_produk_dalam_proses` join `tb_produk` on(`tb_produk_dalam_proses`.`id_produk` = `tb_produk`.`id_produk`)) left join `rt_status_produk_dalam_proses` on(`tb_produk_dalam_proses`.`id_status_produk_dalam_proses` = `rt_status_produk_dalam_proses`.`id_status_produk_dalam_proses`)) ;

-- ----------------------------
-- View structure for view_data_retur_all
-- ----------------------------
DROP VIEW IF EXISTS `view_data_retur_all`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_retur_all` AS select `tb_retur_pembelian`.`id_retur` AS `id_retur`,`tb_retur_pembelian`.`kode_retur` AS `kode_retur`,`tb_retur_pembelian`.`id_user_retur` AS `id_user_retur`,`tb_retur_pembelian`.`id_pemesanan` AS `id_pemesanan`,`tb_retur_pembelian`.`waktu_retur` AS `waktu_retur_detail`,date_format(`tb_retur_pembelian`.`waktu_retur`,'%e/%c/%Y %H:%i') AS `waktu_retur`,`tb_retur_pembelian`.`pesan_retur` AS `pesan_retur`,`tb_retur_pembelian`.`gambar_barang_retur` AS `gambar_barang_retur`,`tb_pemesanan`.`kode_pemesanan` AS `kode_pemesanan`,`tb_pemesanan`.`waktu_pemesanan` AS `waktu_pemesanan`,`tb_pemesanan`.`id_user` AS `id_user`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_pemesanan`.`nama_pemilik_rekening` AS `nama_pemilik_rekening`,`tb_pemesanan`.`tanggal_transfer` AS `tanggal_transfer`,`tb_pemesanan`.`no_rekening` AS `no_rekening`,`tb_pemesanan`.`bank_asal` AS `bank_asal`,`tb_pemesanan`.`gambar_bukti_pembayaran` AS `gambar_bukti_pembayaran`,`tb_pemesanan`.`total_harga_yang_harus_dibayar` AS `total_harga_yang_harus_dibayar`,`tb_retur_pembelian`.`id_status_retur` AS `id_status_retur`,`rt_status_retur`.`status_retur` AS `status_retur`,`tb_retur_pembelian`.`admin_pesan_retur` AS `admin_pesan_retur`,`tb_retur_pembelian`.`admin_tanggal_transfer` AS `admin_tanggal_transfer`,`tb_retur_pembelian`.`admin_nomor_rekening` AS `admin_nomor_rekening`,`tb_retur_pembelian`.`admin_bank_asal` AS `admin_bank_asal`,`tb_retur_pembelian`.`admin_gambar_bukti_transfer` AS `admin_gambar_bukti_transfer`,`tb_retur_pembelian`.`admin_total_pengembalian_dana` AS `admin_total_pengembalian_dana`,`tb_pemesanan`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_produk`.`detail1_produk` AS `detail1_produk`,`tb_produk`.`detail2_produk` AS `detail2_produk`,`tb_produk`.`id_jenis_produk` AS `id_jenis_produk`,`rt_jenis_produk`.`jenis_produk` AS `jenis_produk`,`tb_pemesanan`.`jumlah_pemesanan` AS `jumlah_pemesanan`,`rt_satuan_produk`.`satuan_produk` AS `satuan_produk`,`tb_pemesanan`.`id_berat_produk` AS `id_berat_produk`,`rt_berat_produk_pemesanan`.`teks_berat_produk` AS `teks_berat_produk`,`rt_berat_produk_pemesanan`.`konfersi_berat_produk_perkilogram` AS `konfersi_berat_produk_perkilogram`,`tb_produk`.`id_satuan_produk` AS `id_satuan_produk` from (((((((`tb_retur_pembelian` join `tb_pemesanan` on(`tb_retur_pembelian`.`id_pemesanan` = `tb_pemesanan`.`id_pemesanan`)) join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) join `rt_status_retur` on(`tb_retur_pembelian`.`id_status_retur` = `rt_status_retur`.`id_status_retur`)) left join `tb_produk` on(`tb_pemesanan`.`id_produk` = `tb_produk`.`id_produk`)) left join `rt_jenis_produk` on(`tb_produk`.`id_jenis_produk` = `rt_jenis_produk`.`id_jenis_produk`)) left join `rt_berat_produk_pemesanan` on(`tb_pemesanan`.`id_berat_produk` = `rt_berat_produk_pemesanan`.`id_berat_produk`)) join `rt_satuan_produk` on(`tb_produk`.`id_satuan_produk` = `rt_satuan_produk`.`id_satuan_produk`)) ;

-- ----------------------------
-- View structure for view_data_semua_pesanan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_semua_pesanan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_semua_pesanan` AS SELECT
tb_pemesanan.id_pemesanan AS id_pemesanan,
tb_pemesanan.kode_pemesanan AS kode_pemesanan,
date_format(`tb_pemesanan`.`waktu_pemesanan`,'%d/%m/%Y %H:%i') AS waktu_pemesanan,
tb_pemesanan.waktu_pemesanan AS waktu_pemesanan_old,
tb_pemesanan.waktu_pengiriman AS waktu_pengiriman,
tb_pemesanan.id_user AS id_user,
tb_login_user.username AS username,
tb_login_user.nama_lengkap AS nama_lengkap,
tb_login_user.email AS email,
tb_login_user.nomor_hp AS nomor_hp,
tb_data_user.negara AS negara,
tb_data_user.provinsi AS provinsi,
tb_data_user.kabupaten AS kabupaten,
tb_data_user.alamat AS alamat,
tb_data_user.id_kota AS id_kota,
rt_kota.kota AS kota,
tb_data_user.kecamatan AS kecamatan,
tb_data_user.kelurahan AS kelurahan,
tb_data_user.kode_pos AS kode_pos,
tb_pemesanan.pesan_pemesanan AS pesan_pemesanan,
tb_pemesanan.id_proses_pemesanan AS id_proses_pemesanan,
rt_proses_pemesanan.proses_pemesanan AS proses_pemesanan,
tb_pemesanan.id_produk AS id_produk,
tb_produk.nama_produk AS nama_produk,
tb_produk.detail1_produk AS detail1_produk,
tb_produk.id_jenis_produk AS id_jenis_produk,
rt_jenis_produk.jenis_produk AS jenis_produk,
tb_pemesanan.jumlah_pemesanan AS jumlah_pemesanan,
tb_produk.harga AS harga,
tb_produk.diskon AS diskon,
`tb_produk`.`harga` - `tb_produk`.`diskon` AS harga_setelah_diskon,
tb_pemesanan.total_harga_perproduk AS total_harga_perproduk,
tb_pemesanan.ongkos_kirim AS ongkos_kirim,
tb_pemesanan.total_harga_yang_harus_dibayar AS total_harga_yang_harus_dibayar,
tb_produk.gambar1_produk AS gambar1_produk,
tb_produk.id_satuan_produk AS id_satuan_produk,
rt_satuan_produk.satuan_produk AS satuan_produk,
tb_pemesanan.id_berat_produk AS id_berat_produk,
rt_berat_produk_pemesanan.teks_berat_produk AS teks_berat_produk,
rt_berat_produk_pemesanan.konfersi_berat_produk_perkilogram AS konfersi_berat_produk_perkilogram,
tb_pemesanan.id_metode_pembayaran AS id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran AS metode_pembayaran,
tb_pemesanan.receipt_number,
tb_pemesanan.ref_num,
rt_metode_pembayaran.kode_link_pembayaran AS kode_link_pembayaran,
tb_pemesanan.pesan_bukti_pembayaran AS pesan_bukti_pembayaran,
tb_pemesanan.gambar_bukti_pembayaran AS gambar_bukti_pembayaran,
tb_pemesanan.nama_pemilik_rekening AS nama_pemilik_rekening,
date_format(`tb_pemesanan`.`tanggal_transfer`,'%d/%m/%Y') AS tanggal_transfer,
tb_pemesanan.no_rekening AS no_rekening,
tb_pemesanan.bank_asal AS bank_asal,
tb_pemesanan.kode_unik AS kode_unik,
tb_pemesanan.waktu_batas_retur AS waktu_batas_retur,
tb_pemesanan.waktu_batas_review AS waktu_batas_review,
tb_pemesanan.waktu_penerimaan AS waktu_penerimaan,
tb_pemesanan.waktu_batas_checkout AS waktu_batas_checkout,
tb_pemesanan.id_voucher_by_user,
tb_voucher_by_user.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.judul_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku,
tb_voucher_by_user.id_status_voucher,
rt_status_voucher.status_voucher
FROM
(((((((((((tb_pemesanan
LEFT JOIN tb_login_user ON (tb_login_user.id_user = tb_pemesanan.id_user))
LEFT JOIN tb_data_user ON (tb_data_user.id_user = tb_login_user.id_user))
LEFT JOIN rt_proses_pemesanan ON (rt_proses_pemesanan.id_proses_pemesanan = tb_pemesanan.id_proses_pemesanan))
LEFT JOIN tb_produk ON (tb_produk.id_produk = tb_pemesanan.id_produk))
LEFT JOIN rt_jenis_produk ON (rt_jenis_produk.id_jenis_produk = tb_produk.id_jenis_produk)))
LEFT JOIN rt_metode_pembayaran ON (rt_metode_pembayaran.id_metode_pembayaran = tb_pemesanan.id_metode_pembayaran))
LEFT JOIN rt_satuan_produk ON (rt_satuan_produk.id_satuan_produk = tb_produk.id_satuan_produk))
LEFT JOIN rt_berat_produk_pemesanan ON (tb_pemesanan.id_berat_produk = rt_berat_produk_pemesanan.id_berat_produk))
LEFT JOIN rt_kota ON (tb_data_user.id_kota = rt_kota.id_kota)))
LEFT JOIN tb_voucher_by_user ON tb_pemesanan.id_voucher_by_user = tb_voucher_by_user.id_voucher_by_user
LEFT OUTER JOIN tb_voucher ON tb_voucher_by_user.id_voucher = tb_voucher.id_voucher
LEFT OUTER JOIN rt_jenis_voucher ON tb_voucher.id_jenis_voucher = rt_jenis_voucher.id_jenis_voucher
LEFT OUTER JOIN rt_status_voucher ON tb_voucher_by_user.id_status_voucher = rt_status_voucher.id_status_voucher
WHERE
tb_pemesanan.id_proses_pemesanan <> 10
GROUP BY
tb_pemesanan.kode_pemesanan
ORDER BY
id_pemesanan ASC ;

-- ----------------------------
-- View structure for view_data_tampil_produk_spesial_halaman_utama
-- ----------------------------
DROP VIEW IF EXISTS `view_data_tampil_produk_spesial_halaman_utama`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_tampil_produk_spesial_halaman_utama` AS select `tb_penilaian_produk`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`rt_bintang_penilaian_produk`.`bintang_penilaian_produk` AS `bintang_penilaian_produk`,`tb_produk`.`detail1_produk` AS `detail1_produk`,`tb_produk`.`detail2_produk` AS `detail2_produk`,`tb_produk`.`harga` AS `harga`,`tb_produk`.`diskon` AS `diskon`,`tb_produk`.`harga` - `tb_produk`.`diskon` AS `harga_setelah_diskon`,`tb_produk`.`gambar1_produk` AS `gambar1_produk`,`tb_produk`.`gambar2_produk` AS `gambar2_produk`,`tb_produk`.`gambar3_produk` AS `gambar3_produk`,`tb_produk`.`gambar4_produk` AS `gambar4_produk`,`tb_produk`.`id_jenis_produk` AS `id_jenis_produk`,`rt_jenis_produk`.`jenis_produk` AS `jenis_produk`,`tb_produk`.`jumlah_stok` AS `jumlah_stok`,`tb_produk`.`id_satuan_produk` AS `id_satuan_produk`,`rt_satuan_produk`.`satuan_produk` AS `satuan_produk`,`tb_produk`.`gambar5_produk` AS `gambar5_produk`,`tb_produk`.`spesial_produk` AS `spesial_produk`,avg(`rt_bintang_penilaian_produk`.`bintang_penilaian_produk`) AS `rata_rata_bintang_penilaian`,avg(`rt_bintang_penilaian_produk`.`bintang_penilaian_produk`) / 5 * 100 AS `persentase_penilaian`,`tb_produk`.`id_berat_produk` AS `id_berat_produk`,`rt_berat_produk_pemesanan`.`teks_berat_produk` AS `teks_berat_produk`,`rt_berat_produk_pemesanan`.`konfersi_berat_produk_perkilogram` AS `konfersi_berat_produk_perkilogram` from (((((`tb_penilaian_produk` left join `tb_produk` on(`tb_produk`.`id_produk` = `tb_penilaian_produk`.`id_produk`)) left join `rt_bintang_penilaian_produk` on(`rt_bintang_penilaian_produk`.`id_bintang_penilaian_produk` = `tb_penilaian_produk`.`id_bintang_penilaian_produk`)) left join `rt_jenis_produk` on(`rt_jenis_produk`.`id_jenis_produk` = `tb_produk`.`id_jenis_produk`)) join `rt_satuan_produk` on(`rt_satuan_produk`.`id_satuan_produk` = `tb_produk`.`id_satuan_produk`)) join `rt_berat_produk_pemesanan` on(`tb_produk`.`id_berat_produk` = `rt_berat_produk_pemesanan`.`id_berat_produk`)) where `tb_produk`.`spesial_produk` = 1 ;

-- ----------------------------
-- View structure for view_data_voucher
-- ----------------------------
DROP VIEW IF EXISTS `view_data_voucher`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_voucher` AS SELECT
tb_voucher.id_voucher AS id_voucher,
tb_voucher.kode_voucher AS kode_voucher,
tb_voucher.id_jenis_voucher AS id_jenis_voucher,
tb_voucher.judul_voucher AS judul_voucher,
rt_jenis_voucher.jenis_voucher AS jenis_voucher,
tb_voucher.total_voucher AS total_voucher,
tb_voucher.waktu_berlaku AS waktu_berlaku_detail,
date_format(`tb_voucher`.`waktu_berlaku`,'%e/%c/%Y %H:%i') AS waktu_berlaku,
tb_voucher.gambar_voucher AS gambar_voucher,
tb_voucher.kode_kirim_konsumen,
rt_status_kirim_voucher.status_kirim_konsumen
FROM
(tb_voucher
LEFT JOIN rt_jenis_voucher ON (rt_jenis_voucher.id_jenis_voucher = tb_voucher.id_jenis_voucher))
left JOIN rt_status_kirim_voucher ON tb_voucher.kode_kirim_konsumen = rt_status_kirim_voucher.kode_kirim_konsumen ;

-- ----------------------------
-- View structure for view_data_voucher_by_user
-- ----------------------------
DROP VIEW IF EXISTS `view_data_voucher_by_user`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_voucher_by_user` AS SELECT
tb_voucher_by_user.id_voucher_by_user AS id_voucher_by_user,
tb_voucher_by_user.id_voucher AS id_voucher,
tb_voucher.kode_voucher AS kode_voucher,
tb_voucher.judul_voucher AS judul_voucher,
tb_voucher.id_jenis_voucher AS id_jenis_voucher,
rt_jenis_voucher.jenis_voucher AS jenis_voucher,
tb_voucher.total_voucher AS total_voucher,
tb_voucher.waktu_berlaku AS waktu_berlaku_detail,
date_format(`tb_voucher`.`waktu_berlaku`,'%e/%c/%Y %H:%i') AS waktu_berlaku,
tb_voucher_by_user.id_status_voucher AS id_status_voucher,
rt_status_voucher.status_voucher AS status_voucher,
tb_voucher.gambar_voucher AS gambar_voucher,
tb_voucher_by_user.id_user AS id_user
FROM
(((tb_voucher_by_user
JOIN tb_voucher ON (tb_voucher_by_user.id_voucher = tb_voucher.id_voucher))
JOIN rt_status_voucher ON (tb_voucher_by_user.id_status_voucher = rt_status_voucher.id_status_voucher))
JOIN rt_jenis_voucher ON (tb_voucher.id_jenis_voucher = rt_jenis_voucher.id_jenis_voucher))
WHERE
tb_voucher_by_user.id_status_voucher = 1 ;

-- ----------------------------
-- View structure for view_detail_data_produk_dalam_proses
-- ----------------------------
DROP VIEW IF EXISTS `view_detail_data_produk_dalam_proses`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_detail_data_produk_dalam_proses` AS select `tb_produk_dalam_proses`.`id_produk_dalam_proses` AS `id_produk_dalam_proses`,`tb_produk_dalam_proses`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_produk_dalam_proses`.`tanggal_checkout` AS `tanggal_checkout`,`tb_produk_dalam_proses`.`tanggal_batal_dipesan` AS `tanggal_batal_dipesan`,`tb_produk_dalam_proses`.`tanggal_dibeli` AS `tanggal_dibeli`,`tb_produk_dalam_proses`.`id_status_produk_dalam_proses` AS `id_status_produk_dalam_proses`,`rt_status_produk_dalam_proses`.`status_produk_dalam_proses` AS `status_produk_dalam_proses`,`tb_produk_dalam_proses`.`id_berat_produk` AS `id_berat_produk`,`tb_produk_dalam_proses`.`jumlah_pemesanan` AS `jumlah_pemesanan`,`tb_produk`.`id_satuan_produk` AS `id_satuan_produk`,`rt_satuan_produk`.`satuan_produk` AS `satuan_produk` from (((`tb_produk_dalam_proses` join `tb_produk` on(`tb_produk_dalam_proses`.`id_produk` = `tb_produk`.`id_produk`)) left join `rt_status_produk_dalam_proses` on(`tb_produk_dalam_proses`.`id_status_produk_dalam_proses` = `rt_status_produk_dalam_proses`.`id_status_produk_dalam_proses`)) join `rt_satuan_produk` on(`tb_produk`.`id_satuan_produk` = `rt_satuan_produk`.`id_satuan_produk`)) ;

-- ----------------------------
-- View structure for view_detail_pengajuan_retur_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_detail_pengajuan_retur_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_detail_pengajuan_retur_produk` AS select `tb_retur_pembelian`.`id_retur` AS `id_retur`,`tb_retur_pembelian`.`kode_retur` AS `kode_retur`,`tb_retur_pembelian`.`id_user_retur` AS `id_user_retur`,`tb_retur_pembelian`.`id_pemesanan` AS `id_pemesanan`,`tb_retur_pembelian`.`waktu_retur` AS `waktu_retur_detail`,date_format(`tb_retur_pembelian`.`waktu_retur`,'%e/%c/%Y %H:%i') AS `waktu_retur`,`tb_retur_pembelian`.`pesan_retur` AS `pesan_retur`,`tb_retur_pembelian`.`gambar_barang_retur` AS `gambar_barang_retur`,`tb_pemesanan`.`kode_pemesanan` AS `kode_pemesanan`,`tb_pemesanan`.`waktu_pemesanan` AS `waktu_pemesanan`,`tb_pemesanan`.`id_user` AS `id_user`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_pemesanan`.`nama_pemilik_rekening` AS `nama_pemilik_rekening`,`tb_pemesanan`.`tanggal_transfer` AS `tanggal_transfer`,`tb_pemesanan`.`no_rekening` AS `no_rekening`,`tb_pemesanan`.`bank_asal` AS `bank_asal`,`tb_pemesanan`.`gambar_bukti_pembayaran` AS `gambar_bukti_pembayaran`,`tb_pemesanan`.`total_harga_yang_harus_dibayar` AS `total_harga_yang_harus_dibayar`,`tb_retur_pembelian`.`id_status_retur` AS `id_status_retur`,`rt_status_retur`.`status_retur` AS `status_retur`,`tb_retur_pembelian`.`admin_pesan_retur` AS `admin_pesan_retur`,`tb_retur_pembelian`.`admin_tanggal_transfer` AS `admin_tanggal_transfer`,`tb_retur_pembelian`.`admin_nomor_rekening` AS `admin_nomor_rekening`,`tb_retur_pembelian`.`admin_bank_asal` AS `admin_bank_asal`,`tb_retur_pembelian`.`admin_gambar_bukti_transfer` AS `admin_gambar_bukti_transfer`,`tb_retur_pembelian`.`admin_total_pengembalian_dana` AS `admin_total_pengembalian_dana`,`tb_pemesanan`.`id_produk` AS `id_produk`,`tb_produk`.`nama_produk` AS `nama_produk`,`tb_produk`.`detail1_produk` AS `detail1_produk`,`tb_produk`.`detail2_produk` AS `detail2_produk`,`tb_produk`.`id_jenis_produk` AS `id_jenis_produk`,`rt_jenis_produk`.`jenis_produk` AS `jenis_produk`,`tb_pemesanan`.`jumlah_pemesanan` AS `jumlah_pemesanan`,`rt_satuan_produk`.`satuan_produk` AS `satuan_produk`,`tb_pemesanan`.`id_berat_produk` AS `id_berat_produk`,`rt_berat_produk_pemesanan`.`teks_berat_produk` AS `teks_berat_produk`,`rt_berat_produk_pemesanan`.`konfersi_berat_produk_perkilogram` AS `konfersi_berat_produk_perkilogram`,`tb_produk`.`id_satuan_produk` AS `id_satuan_produk` from (((((((`tb_retur_pembelian` join `tb_pemesanan` on(`tb_retur_pembelian`.`id_pemesanan` = `tb_pemesanan`.`id_pemesanan`)) join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) join `rt_status_retur` on(`tb_retur_pembelian`.`id_status_retur` = `rt_status_retur`.`id_status_retur`)) left join `tb_produk` on(`tb_pemesanan`.`id_produk` = `tb_produk`.`id_produk`)) left join `rt_jenis_produk` on(`tb_produk`.`id_jenis_produk` = `rt_jenis_produk`.`id_jenis_produk`)) left join `rt_berat_produk_pemesanan` on(`tb_pemesanan`.`id_berat_produk` = `rt_berat_produk_pemesanan`.`id_berat_produk`)) join `rt_satuan_produk` on(`tb_produk`.`id_satuan_produk` = `rt_satuan_produk`.`id_satuan_produk`)) where `tb_retur_pembelian`.`id_status_retur` = '2' ;

-- ----------------------------
-- View structure for view_notification_process
-- ----------------------------
DROP VIEW IF EXISTS `view_notification_process`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_notification_process` AS select `tb_notifikasi`.`id_notifikasi` AS `id_notifikasi`,`tb_notifikasi`.`pesan_notifikasi` AS `pesan_notifikasi`,`tb_notifikasi`.`id_status_notifikasi` AS `id_status_notifikasi`,`tb_notifikasi`.`id_status_baca` AS `id_status_baca`,`tb_notifikasi`.`id_user_baca` AS `id_user_baca`,`tb_notifikasi`.`id_user` AS `id_user`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email` from (`tb_notifikasi` left join `tb_login_user` on(`tb_notifikasi`.`id_user` = `tb_login_user`.`id_user`)) where `tb_notifikasi`.`id_status_notifikasi` = 3 ;

-- ----------------------------
-- View structure for view_notification_retur
-- ----------------------------
DROP VIEW IF EXISTS `view_notification_retur`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_notification_retur` AS select `tb_notifikasi`.`id_notifikasi` AS `id_notifikasi`,`tb_notifikasi`.`pesan_notifikasi` AS `pesan_notifikasi`,`tb_notifikasi`.`id_status_notifikasi` AS `id_status_notifikasi`,`tb_notifikasi`.`id_status_baca` AS `id_status_baca`,`tb_notifikasi`.`id_user_baca` AS `id_user_baca`,`tb_notifikasi`.`id_user` AS `id_user`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`email` AS `email` from (`tb_notifikasi` left join `tb_login_user` on(`tb_notifikasi`.`id_user` = `tb_login_user`.`id_user`)) where `tb_notifikasi`.`id_status_notifikasi` = 7 ;

-- ----------------------------
-- View structure for view_pemesanan_barang_dikirim
-- ----------------------------
DROP VIEW IF EXISTS `view_pemesanan_barang_dikirim`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_pemesanan_barang_dikirim` AS select `tb_pemesanan`.`id_pemesanan` AS `id_pemesanan`,`tb_pemesanan`.`kode_pemesanan` AS `kode_pemesanan`,`tb_pemesanan`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_pemesanan`.`id_proses_pemesanan` AS `id_proses_pemesanan`,concat(`tb_pemesanan`.`alamat`,', ',`tb_pemesanan`.`kelurahan`,', ',`tb_pemesanan`.`kecamatan`,', ',`tb_pemesanan`.`kota`,', ',`tb_pemesanan`.`kabupaten`,', ',`tb_pemesanan`.`provinsi`,' - ',`tb_pemesanan`.`negara`,', ',' Kode POS :',' ',`tb_pemesanan`.`kode_pos`) AS `alamat`,`rt_proses_pemesanan`.`proses_pemesanan` AS `proses_pemesanan` from ((`tb_pemesanan` join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) join `rt_proses_pemesanan` on(`rt_proses_pemesanan`.`id_proses_pemesanan` = `tb_pemesanan`.`id_proses_pemesanan`)) where `tb_pemesanan`.`id_proses_pemesanan` = '9' ;

-- ----------------------------
-- View structure for view_pemesanan_konfirmasi_pembayaran_admin
-- ----------------------------
DROP VIEW IF EXISTS `view_pemesanan_konfirmasi_pembayaran_admin`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_pemesanan_konfirmasi_pembayaran_admin` AS select `tb_pemesanan`.`id_pemesanan` AS `id_pemesanan`,`tb_pemesanan`.`kode_pemesanan` AS `kode_pemesanan`,`tb_pemesanan`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_pemesanan`.`id_proses_pemesanan` AS `id_proses_pemesanan`,`tb_pemesanan`.`tanggal_transfer` AS `tanggal_transfer` from (`tb_pemesanan` join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) where `tb_pemesanan`.`id_proses_pemesanan` = '3' ;

-- ----------------------------
-- View structure for view_pemesanan_konfirmasi_pengiriman_admin
-- ----------------------------
DROP VIEW IF EXISTS `view_pemesanan_konfirmasi_pengiriman_admin`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_pemesanan_konfirmasi_pengiriman_admin` AS select `tb_pemesanan`.`id_pemesanan` AS `id_pemesanan`,`tb_pemesanan`.`kode_pemesanan` AS `kode_pemesanan`,`tb_pemesanan`.`id_user` AS `id_user`,`tb_login_user`.`username` AS `username`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_pemesanan`.`id_proses_pemesanan` AS `id_proses_pemesanan`,`tb_pemesanan`.`tanggal_transfer` AS `tanggal_transfer` from (`tb_pemesanan` join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) where `tb_pemesanan`.`id_proses_pemesanan` = '4' ;

-- ----------------------------
-- View structure for view_pengajuan_retur_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_pengajuan_retur_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_pengajuan_retur_produk` AS select `tb_retur_pembelian`.`id_retur` AS `id_retur`,`tb_retur_pembelian`.`kode_retur` AS `kode_retur`,`tb_login_user`.`nama_lengkap` AS `nama_lengkap`,`tb_login_user`.`nomor_hp` AS `nomor_hp`,`tb_retur_pembelian`.`id_status_retur` AS `id_status_retur` from ((`tb_retur_pembelian` join `tb_pemesanan` on(`tb_retur_pembelian`.`id_pemesanan` = `tb_pemesanan`.`id_pemesanan`)) join `tb_login_user` on(`tb_pemesanan`.`id_user` = `tb_login_user`.`id_user`)) where `tb_retur_pembelian`.`id_status_retur` = '2' ;

-- ----------------------------
-- View structure for view_root1_retur_pembelian
-- ----------------------------
DROP VIEW IF EXISTS `view_root1_retur_pembelian`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_root1_retur_pembelian` AS select `tb_retur_pembelian`.`id_retur` AS `id_retur`,`tb_retur_pembelian`.`kode_retur` AS `kode_retur`,`tb_retur_pembelian`.`id_pemesanan` AS `id_pemesanan`,`tb_retur_pembelian`.`waktu_retur` AS `waktu_retur`,`tb_retur_pembelian`.`pesan_retur` AS `pesan_retur`,`tb_retur_pembelian`.`gambar_barang_retur` AS `gambar_barang_retur`,`view_data_semua_pesanan`.`kode_pemesanan` AS `kode_pemesanan`,`view_data_semua_pesanan`.`waktu_pemesanan` AS `waktu_pemesanan`,`view_data_semua_pesanan`.`id_user` AS `id_user`,`view_data_semua_pesanan`.`username` AS `username`,`view_data_semua_pesanan`.`nama_lengkap` AS `nama_lengkap`,`view_data_semua_pesanan`.`email` AS `email`,`view_data_semua_pesanan`.`nomor_hp` AS `nomor_hp`,`view_data_semua_pesanan`.`alamat` AS `alamat`,`view_data_semua_pesanan`.`negara` AS `negara`,`view_data_semua_pesanan`.`provinsi` AS `provinsi`,`view_data_semua_pesanan`.`kabupaten` AS `kabupaten`,`view_data_semua_pesanan`.`id_kota` AS `id_kota`,`view_data_semua_pesanan`.`kota` AS `kota`,`view_data_semua_pesanan`.`kecamatan` AS `kecamatan`,`view_data_semua_pesanan`.`kelurahan` AS `kelurahan`,`view_data_semua_pesanan`.`kode_pos` AS `kode_pos`,`view_data_semua_pesanan`.`pesan_pemesanan` AS `pesan_pemesanan`,`view_data_semua_pesanan`.`id_proses_pemesanan` AS `id_proses_pemesanan`,`view_data_semua_pesanan`.`proses_pemesanan` AS `proses_pemesanan`,`view_data_semua_pesanan`.`id_produk` AS `id_produk`,`view_data_semua_pesanan`.`nama_produk` AS `nama_produk`,`view_data_semua_pesanan`.`detail1_produk` AS `detail1_produk`,`view_data_semua_pesanan`.`id_jenis_produk` AS `id_jenis_produk`,`view_data_semua_pesanan`.`jenis_produk` AS `jenis_produk`,`view_data_semua_pesanan`.`jumlah_pemesanan` AS `jumlah_pemesanan`,`view_data_semua_pesanan`.`harga` AS `harga`,`view_data_semua_pesanan`.`diskon` AS `diskon`,`view_data_semua_pesanan`.`harga_setelah_diskon` AS `harga_setelah_diskon`,`view_data_semua_pesanan`.`total_harga_perproduk` AS `total_harga_perproduk`,`view_data_semua_pesanan`.`ongkos_kirim` AS `ongkos_kirim`,`view_data_semua_pesanan`.`total_harga_yang_harus_dibayar` AS `total_harga_yang_harus_dibayar`,`view_data_semua_pesanan`.`gambar1_produk` AS `gambar1_produk`,`view_data_semua_pesanan`.`id_satuan_produk` AS `id_satuan_produk`,`view_data_semua_pesanan`.`satuan_produk` AS `satuan_produk`,`view_data_semua_pesanan`.`id_berat_produk` AS `id_berat_produk`,`view_data_semua_pesanan`.`teks_berat_produk` AS `teks_berat_produk`,`view_data_semua_pesanan`.`konfersi_berat_produk_perkilogram` AS `konfersi_berat_produk_perkilogram`,`view_data_semua_pesanan`.`id_voucher` AS `id_voucher`,`view_data_semua_pesanan`.`kode_voucher` AS `kode_voucher`,`view_data_semua_pesanan`.`total_voucher` AS `total_voucher`,`view_data_semua_pesanan`.`waktu_berlaku` AS `waktu_berlaku`,`view_data_semua_pesanan`.`id_metode_pembayaran` AS `id_metode_pembayaran`,`view_data_semua_pesanan`.`metode_pembayaran` AS `metode_pembayaran`,`view_data_semua_pesanan`.`kode_link_pembayaran` AS `kode_link_pembayaran`,`view_data_semua_pesanan`.`pesan_bukti_pembayaran` AS `pesan_bukti_pembayaran`,`view_data_semua_pesanan`.`gambar_bukti_pembayaran` AS `gambar_bukti_pembayaran`,`view_data_semua_pesanan`.`nama_pemilik_rekening` AS `nama_pemilik_rekening`,`view_data_semua_pesanan`.`tanggal_transfer` AS `tanggal_transfer`,`view_data_semua_pesanan`.`no_rekening` AS `no_rekening`,`view_data_semua_pesanan`.`bank_asal` AS `bank_asal` from (`tb_retur_pembelian` join `view_data_semua_pesanan` on(`tb_retur_pembelian`.`id_pemesanan` = `view_data_semua_pesanan`.`id_pemesanan`)) ;

SET FOREIGN_KEY_CHECKS = 1;
