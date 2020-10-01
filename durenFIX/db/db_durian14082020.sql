/*
 Navicat Premium Data Transfer

 Source Server         : Devond
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : db_durian

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 14/08/2020 17:05:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rt_bintang_penilaian_produk
-- ----------------------------
DROP TABLE IF EXISTS `rt_bintang_penilaian_produk`;
CREATE TABLE `rt_bintang_penilaian_produk`  (
  `id_bintang_penilaian_produk` int(100) NOT NULL AUTO_INCREMENT,
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
  `id_jenis_kelamin` int(100) NOT NULL AUTO_INCREMENT,
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
  `id_jenis_produk` int(100) NOT NULL AUTO_INCREMENT,
  `jenis_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_jenis_produk
-- ----------------------------
INSERT INTO `rt_jenis_produk` VALUES (1, 'Durian');

-- ----------------------------
-- Table structure for rt_jenis_voucher
-- ----------------------------
DROP TABLE IF EXISTS `rt_jenis_voucher`;
CREATE TABLE `rt_jenis_voucher`  (
  `id_jenis_voucher` int(100) NOT NULL AUTO_INCREMENT,
  `jenis_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_jenis_voucher
-- ----------------------------
INSERT INTO `rt_jenis_voucher` VALUES (1, 'Voucher Porongan Harga');
INSERT INTO `rt_jenis_voucher` VALUES (2, 'Voucher Potongan Ongkir 50%');
INSERT INTO `rt_jenis_voucher` VALUES (3, 'Voucher Gratis Ongkir');

-- ----------------------------
-- Table structure for rt_metode_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `rt_metode_pembayaran`;
CREATE TABLE `rt_metode_pembayaran`  (
  `id_metode_pembayaran` int(100) NOT NULL AUTO_INCREMENT,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_link_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_metode_pembayaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_metode_pembayaran
-- ----------------------------
INSERT INTO `rt_metode_pembayaran` VALUES (1, 'COD', NULL);
INSERT INTO `rt_metode_pembayaran` VALUES (2, 'Transfer Bank', NULL);

-- ----------------------------
-- Table structure for rt_proses_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `rt_proses_pemesanan`;
CREATE TABLE `rt_proses_pemesanan`  (
  `id_proses_pemesanan` int(100) NOT NULL AUTO_INCREMENT,
  `proses_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_proses_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_proses_pemesanan
-- ----------------------------
INSERT INTO `rt_proses_pemesanan` VALUES (1, 'Pesanan Dibuat');
INSERT INTO `rt_proses_pemesanan` VALUES (2, 'Pembayaran Dikonfirmasi');
INSERT INTO `rt_proses_pemesanan` VALUES (3, 'Pesanan Dikirimkan');
INSERT INTO `rt_proses_pemesanan` VALUES (4, 'Pesanan Diterima');
INSERT INTO `rt_proses_pemesanan` VALUES (5, 'Pesanan Dinilai');

-- ----------------------------
-- Table structure for rt_satuan_produk
-- ----------------------------
DROP TABLE IF EXISTS `rt_satuan_produk`;
CREATE TABLE `rt_satuan_produk`  (
  `id_satuan_produk` int(100) NOT NULL AUTO_INCREMENT,
  `satuan_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_satuan_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_satuan_produk
-- ----------------------------
INSERT INTO `rt_satuan_produk` VALUES (1, 'Kg');
INSERT INTO `rt_satuan_produk` VALUES (2, 'Buah');

-- ----------------------------
-- Table structure for rt_status_chat
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_chat`;
CREATE TABLE `rt_status_chat`  (
  `id_status_chat` int(100) NOT NULL AUTO_INCREMENT,
  `status_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_chat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_chat
-- ----------------------------
INSERT INTO `rt_status_chat` VALUES (1, 'Belum Dibaca');
INSERT INTO `rt_status_chat` VALUES (2, 'Sudah Dibaca');

-- ----------------------------
-- Table structure for rt_status_user
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_user`;
CREATE TABLE `rt_status_user`  (
  `id_status_user` int(100) NOT NULL AUTO_INCREMENT,
  `status_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rt_status_user
-- ----------------------------
INSERT INTO `rt_status_user` VALUES (1, 'Administrator');
INSERT INTO `rt_status_user` VALUES (2, 'Manager');
INSERT INTO `rt_status_user` VALUES (3, 'Kasir');
INSERT INTO `rt_status_user` VALUES (4, 'Staf');
INSERT INTO `rt_status_user` VALUES (5, 'Konsumen');

-- ----------------------------
-- Table structure for rt_status_voucher
-- ----------------------------
DROP TABLE IF EXISTS `rt_status_voucher`;
CREATE TABLE `rt_status_voucher`  (
  `id_status_voucher` int(100) NOT NULL AUTO_INCREMENT,
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
-- Table structure for tb_chat
-- ----------------------------
DROP TABLE IF EXISTS `tb_chat`;
CREATE TABLE `tb_chat`  (
  `id_chat` int(100) NOT NULL AUTO_INCREMENT,
  `id_user` int(100) NULL DEFAULT NULL,
  `waktu_chat` datetime(0) NULL DEFAULT NULL,
  `teks_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_chat` int(100) NULL DEFAULT NULL,
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
  `id_data_user` int(100) NOT NULL AUTO_INCREMENT,
  `id_user` int(100) NULL DEFAULT NULL,
  `id_jenis_kelamin` int(100) NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_data_user
-- ----------------------------
INSERT INTO `tb_data_user` VALUES (1, 1, 1, '1992-09-03', 'Jalan Ketapang 5 No 66', 'Indonesia', 'Jawa Tengah', 'Banyumas', 'Purwokerto', '53145');
INSERT INTO `tb_data_user` VALUES (2, 2, 2, '2017-11-29', 'Jalan', 'Indonesia', 'Banten', 'Tangerang', 'Tangerang Kota', '98868');
INSERT INTO `tb_data_user` VALUES (3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_data_user` VALUES (7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tb_login_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_login_user`;
CREATE TABLE `tb_login_user`  (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `tanggal_mendaftar` datetime(0) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_user` int(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_login_user
-- ----------------------------
INSERT INTO `tb_login_user` VALUES (1, '2020-08-04 16:52:03', 'a', 'Mohamad Eko Prasetyo', 'me.mohamad@gaul.com', '08994190773', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1);
INSERT INTO `tb_login_user` VALUES (2, '2020-08-05 16:52:54', 'nara', 'nara', 'nara@gmail.com', '089523674526', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 1);
INSERT INTO `tb_login_user` VALUES (3, '2020-08-05 16:55:09', 'wuri', 'wuri', 'wuri@gmail.com', '-', NULL, 'cf4a13712a5718ff17994949cc9333cb', 2);
INSERT INTO `tb_login_user` VALUES (4, '2020-08-05 16:55:47', 'adam', 'serj adam', 'me.adam@gmail.com', '-', NULL, '1d7c2923c1684726dc23d2901c4d8157', 5);
INSERT INTO `tb_login_user` VALUES (5, '2020-08-11 09:09:40', 'Andi34', 'andi', 'devond.linkaja@gmail.com', '0896635247', NULL, '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', 5);
INSERT INTO `tb_login_user` VALUES (6, '2020-08-11 20:16:58', 'anisa', 'anisa', 'anisa@gmail.com', '999', NULL, '2674d96eb8fc8f5d20bc622798dc966823c1cd18', 5);
INSERT INTO `tb_login_user` VALUES (7, '2020-08-14 15:28:35', 'Lina123', 'Lina', 'lina@gmail.com', '08643782648', NULL, '6401f61d470c4ba756e947ba484fb2a3ad5c1e78', 5);

-- ----------------------------
-- Table structure for tb_medsos
-- ----------------------------
DROP TABLE IF EXISTS `tb_medsos`;
CREATE TABLE `tb_medsos`  (
  `id_medsos` int(100) NOT NULL AUTO_INCREMENT,
  `nama_medsos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link_medsos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_medsos`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pemesanan`;
CREATE TABLE `tb_pemesanan`  (
  `id_pemesanan` int(100) NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waktu_pemesanan` datetime(0) NULL DEFAULT NULL,
  `id_user` int(100) NULL DEFAULT NULL,
  `pesan_pemesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_proses_pemesanan` int(100) NULL DEFAULT NULL,
  `id_produk` int(100) NULL DEFAULT NULL,
  `jumlah_pemesanan` decimal(65, 0) NULL DEFAULT NULL,
  `ongkos_kirim` double(100, 0) NULL DEFAULT NULL,
  `id_voucher` int(100) NULL DEFAULT NULL,
  `id_metode_pembayaran` int(100) NULL DEFAULT NULL,
  `pesan_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pemesanan
-- ----------------------------
INSERT INTO `tb_pemesanan` VALUES (1, 'DR01', '2020-08-09 15:34:22', 3, 'Whatsapp Jika Sudah Dekat Rumah', 'Jalan Melati Gang 01 No 566', 'Indonesia', 'Banten', 'Tangerang', 'Tangerang City', '53764', 2, 1, 1, 12000, NULL, 2, 'Ini bukti pesanan saya', 'Lokasi Gambar');

-- ----------------------------
-- Table structure for tb_penilaian_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_penilaian_produk`;
CREATE TABLE `tb_penilaian_produk`  (
  `id_penilaian_produk` int(100) NOT NULL AUTO_INCREMENT,
  `tanggal_penilaian_produk` datetime(0) NULL DEFAULT NULL,
  `id_user` int(100) NULL DEFAULT NULL,
  `id_produk` int(100) NULL DEFAULT NULL,
  `id_bintang_penilaian_produk` int(100) NULL DEFAULT NULL,
  `komentar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penilaian_produk
-- ----------------------------
INSERT INTO `tb_penilaian_produk` VALUES (1, '2020-08-05 13:31:51', 3, 1, 5, 'Bagus');
INSERT INTO `tb_penilaian_produk` VALUES (2, '2020-08-06 13:32:19', 3, 1, 4, 'Mantap');

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk`  (
  `id_produk` int(100) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail1_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail2_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_produk` int(100) NULL DEFAULT NULL,
  `jumlah_stok` decimal(65, 0) NULL DEFAULT NULL,
  `id_satuan_produk` int(100) NULL DEFAULT NULL,
  `harga` double(100, 0) NULL DEFAULT NULL,
  `gambar1_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar2_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar3_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar4_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar5_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_produk
-- ----------------------------
INSERT INTO `tb_produk` VALUES (1, 'durian montong', 'test', 'test', 1, 100, 2, 100000, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_produk` VALUES (2, 'durian bawor', 'test bawor', 'test bawor', 1, 80, 2, 120000, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_produk` VALUES (3, 'durian bawor kelas 2', 'test bawor ', 'test bawor', 1, 150, 2, 80000, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tb_riwayat_pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_riwayat_pemesanan`;
CREATE TABLE `tb_riwayat_pemesanan`  (
  `id_riwayat_pemesanan` int(100) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(100) NULL DEFAULT NULL,
  `waktu_riwayat_pemesanan` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_riwayat_pemesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_share_peta_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_share_peta_lokasi`;
CREATE TABLE `tb_share_peta_lokasi`  (
  `id_share_peta_lokasi_user` int(100) NOT NULL AUTO_INCREMENT,
  `id_user` int(100) NULL DEFAULT NULL,
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
  `id_status_pembayaran` int(100) NOT NULL AUTO_INCREMENT,
  `status_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status_pembayaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_voucher
-- ----------------------------
DROP TABLE IF EXISTS `tb_voucher`;
CREATE TABLE `tb_voucher`  (
  `id_voucher` int(100) NOT NULL AUTO_INCREMENT,
  `kode_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis_voucher` int(100) NULL DEFAULT NULL,
  `total_voucher` double(100, 0) NULL DEFAULT NULL,
  `waktu_berlaku` datetime(0) NULL DEFAULT NULL,
  `id_status_voucher` int(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_voucher
-- ----------------------------
INSERT INTO `tb_voucher` VALUES (1, '120082020', 1, 100000, '2020-08-20 13:54:11', 1);

-- ----------------------------
-- Table structure for tb_website_halaman_tampilan_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_halaman_tampilan_detail`;
CREATE TABLE `tb_website_halaman_tampilan_detail`  (
  `id_halaman_tampilan_detail` int(100) NOT NULL AUTO_INCREMENT,
  `judul_halaman_detail_pada_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `teks_halaman_detail_pada_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_halaman_tampilan_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_website_halaman_utama_keunggulan
-- ----------------------------
DROP TABLE IF EXISTS `tb_website_halaman_utama_keunggulan`;
CREATE TABLE `tb_website_halaman_utama_keunggulan`  (
  `id_halaman_utama_keunggulan` int(100) NOT NULL AUTO_INCREMENT,
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
  `id_halaman_utama_top` int(100) NOT NULL AUTO_INCREMENT,
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
  `id_menu` int(100) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- View structure for view_data_all_user
-- ----------------------------
DROP VIEW IF EXISTS `view_data_all_user`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_all_user` AS SELECT
tb_data_user.id_data_user,
tb_login_user.id_user,
tb_login_user.tanggal_mendaftar,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_data_user.alamat,
tb_data_user.negara,
tb_data_user.provinsi,
tb_data_user.kabupaten,
tb_data_user.kota,
tb_data_user.kode_pos,
tb_login_user.id_status_user,
rt_status_user.status_user,
tb_login_user.foto
FROM
tb_login_user
LEFT JOIN rt_status_user ON rt_status_user.id_status_user = tb_login_user.id_status_user
LEFT JOIN tb_data_user ON tb_login_user.id_user = tb_data_user.id_user ;

-- ----------------------------
-- View structure for view_data_chat
-- ----------------------------
DROP VIEW IF EXISTS `view_data_chat`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_chat` AS SELECT
tb_chat.id_chat,
tb_chat.id_user,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_chat.waktu_chat,
tb_chat.teks_chat,
tb_chat.gambar_chat,
tb_chat.kode_chat,
tb_chat.id_status_chat,
rt_status_chat.status_chat
FROM
tb_chat
LEFT JOIN rt_status_chat ON rt_status_chat.id_status_chat = tb_chat.id_status_chat
LEFT JOIN tb_login_user ON tb_login_user.id_user = tb_chat.id_user ;

-- ----------------------------
-- View structure for view_data_detail_lokasi_konsumen
-- ----------------------------
DROP VIEW IF EXISTS `view_data_detail_lokasi_konsumen`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_detail_lokasi_konsumen` AS SELECT
tb_share_peta_lokasi.id_share_peta_lokasi_user,
tb_share_peta_lokasi.id_user,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_data_user.alamat,
tb_data_user.negara,
tb_data_user.provinsi,
tb_data_user.kabupaten,
tb_data_user.kota,
tb_data_user.kode_pos
FROM
tb_share_peta_lokasi
LEFT JOIN tb_login_user ON tb_login_user.id_user = tb_share_peta_lokasi.id_user
LEFT JOIN tb_data_user ON tb_data_user.id_user = tb_login_user.id_user ;

-- ----------------------------
-- View structure for view_data_karyawan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_karyawan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_karyawan` AS SELECT
tb_login_user.id_user,
tb_login_user.tanggal_mendaftar,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_login_user.`password`,
tb_login_user.id_status_user,
rt_status_user.status_user,
tb_login_user.foto

FROM
tb_login_user
LEFT JOIN rt_status_user ON rt_status_user.id_status_user = tb_login_user.id_status_user
WHERE
tb_login_user.id_status_user != 5 ;

-- ----------------------------
-- View structure for view_data_konsumen
-- ----------------------------
DROP VIEW IF EXISTS `view_data_konsumen`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_konsumen` AS SELECT
tb_data_user.id_data_user,
tb_login_user.id_user,
tb_login_user.tanggal_mendaftar,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_login_user.`password`,
tb_data_user.alamat,
tb_data_user.negara,
tb_data_user.provinsi,
tb_data_user.kabupaten,
tb_data_user.kota,
tb_data_user.kode_pos,
tb_login_user.id_status_user,
rt_status_user.status_user,
tb_login_user.foto
FROM
tb_login_user
LEFT JOIN rt_status_user ON rt_status_user.id_status_user = tb_login_user.id_status_user
LEFT JOIN tb_data_user ON tb_login_user.id_user = tb_data_user.id_user
WHERE
tb_login_user.id_status_user = 5 ;

-- ----------------------------
-- View structure for view_data_login
-- ----------------------------
DROP VIEW IF EXISTS `view_data_login`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_login` AS SELECT
tb_login_user.id_user,
tb_login_user.tanggal_mendaftar,
tb_login_user.username,
tb_login_user.email,
tb_login_user.nama_lengkap,
tb_login_user.nomor_hp,
tb_login_user.`password`,
tb_login_user.id_status_user,
rt_status_user.status_user,
tb_login_user.foto
FROM
tb_login_user
LEFT JOIN rt_status_user ON rt_status_user.id_status_user = tb_login_user.id_status_user ;

-- ----------------------------
-- View structure for view_data_pejualan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_pejualan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_pejualan` AS SELECT
tb_pemesanan.id_pemesanan,
tb_pemesanan.kode_pemesanan,
tb_pemesanan.waktu_pemesanan,
tb_pemesanan.id_user,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_data_user.alamat,
tb_data_user.negara,
tb_data_user.provinsi,
tb_data_user.kabupaten,
tb_data_user.kota,
tb_data_user.kode_pos,
tb_pemesanan.pesan_pemesanan,
tb_pemesanan.alamat AS alamat_baru,
tb_pemesanan.negara AS negara_baru,
tb_pemesanan.provinsi AS provinsi_baru,
tb_pemesanan.kabupaten AS kabupaten_baru,
tb_pemesanan.kota AS kota_baru,
tb_pemesanan.kode_pos AS kode_pos_baru,
tb_pemesanan.id_proses_pemesanan,
rt_proses_pemesanan.proses_pemesanan,
tb_pemesanan.id_produk,
tb_produk.nama_produk,
tb_produk.detail1_produk,
tb_produk.id_jenis_produk,
rt_jenis_produk.jenis_produk,
tb_produk.harga,
tb_produk.gambar1_produk,
tb_pemesanan.jumlah_pemesanan,
tb_pemesanan.ongkos_kirim,
tb_pemesanan.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku,
tb_voucher.id_status_voucher,
rt_status_voucher.status_voucher,
tb_pemesanan.id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran,
rt_metode_pembayaran.kode_link_pembayaran,
tb_pemesanan.pesan_bukti_pembayaran,
tb_pemesanan.gambar_bukti_pembayaran
FROM
tb_pemesanan
LEFT JOIN tb_login_user ON tb_login_user.id_user = tb_pemesanan.id_user
LEFT JOIN tb_data_user ON tb_data_user.id_user = tb_login_user.id_user
LEFT JOIN rt_proses_pemesanan ON rt_proses_pemesanan.id_proses_pemesanan = tb_pemesanan.id_proses_pemesanan
LEFT JOIN tb_produk ON tb_produk.id_produk = tb_pemesanan.id_produk
LEFT JOIN rt_jenis_produk ON rt_jenis_produk.id_jenis_produk = tb_produk.id_jenis_produk
LEFT JOIN tb_voucher ON tb_voucher.id_voucher = tb_pemesanan.id_voucher
LEFT JOIN rt_jenis_voucher ON rt_jenis_voucher.id_jenis_voucher = tb_voucher.id_jenis_voucher
LEFT JOIN rt_status_voucher ON rt_status_voucher.id_status_voucher = tb_voucher.id_status_voucher
LEFT JOIN rt_metode_pembayaran ON rt_metode_pembayaran.id_metode_pembayaran = tb_pemesanan.id_metode_pembayaran
WHERE
tb_pemesanan.id_proses_pemesanan = 2 ;

-- ----------------------------
-- View structure for view_data_penilaian_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_data_penilaian_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_penilaian_produk` AS SELECT
tb_penilaian_produk.id_penilaian_produk,
tb_penilaian_produk.tanggal_penilaian_produk,
tb_penilaian_produk.id_user,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_penilaian_produk.id_produk,
tb_produk.nama_produk,
tb_penilaian_produk.id_bintang_penilaian_produk,
rt_bintang_penilaian_produk.bintang_penilaian_produk,
tb_penilaian_produk.komentar
FROM
tb_penilaian_produk
LEFT JOIN tb_login_user ON tb_login_user.id_user = tb_penilaian_produk.id_user
LEFT JOIN tb_produk ON tb_produk.id_produk = tb_penilaian_produk.id_produk
LEFT JOIN rt_bintang_penilaian_produk ON rt_bintang_penilaian_produk.id_bintang_penilaian_produk = tb_penilaian_produk.id_bintang_penilaian_produk ;

-- ----------------------------
-- View structure for view_data_produk
-- ----------------------------
DROP VIEW IF EXISTS `view_data_produk`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_produk` AS SELECT
	tb_produk.id_produk, 
	tb_produk.nama_produk, 
	tb_produk.detail1_produk, 
	tb_produk.detail2_produk, 
	tb_produk.id_jenis_produk, 
	rt_jenis_produk.jenis_produk, 
	tb_produk.jumlah_stok, 
	tb_produk.id_satuan_produk, 
	rt_satuan_produk.satuan_produk, 
	tb_produk.harga, 
	tb_produk.gambar1_produk, 
	tb_produk.gambar2_produk, 
	tb_produk.gambar3_produk, 
	tb_produk.gambar4_produk, 
	tb_produk.gambar5_produk
FROM
	tb_produk
	INNER JOIN
	rt_jenis_produk
	ON 
		tb_produk.id_jenis_produk = rt_jenis_produk.id_jenis_produk
	INNER JOIN
	rt_satuan_produk
	ON 
		tb_produk.id_satuan_produk = rt_satuan_produk.id_satuan_produk 
	ORDER BY nama_produk ASC ;

-- ----------------------------
-- View structure for view_data_semua_pesanan
-- ----------------------------
DROP VIEW IF EXISTS `view_data_semua_pesanan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_semua_pesanan` AS SELECT
tb_pemesanan.id_pemesanan,
tb_pemesanan.kode_pemesanan,
tb_pemesanan.waktu_pemesanan,
tb_pemesanan.id_user,
tb_login_user.username,
tb_login_user.nama_lengkap,
tb_login_user.email,
tb_login_user.nomor_hp,
tb_data_user.alamat,
tb_data_user.negara,
tb_data_user.provinsi,
tb_data_user.kabupaten,
tb_data_user.kota,
tb_data_user.kode_pos,
tb_pemesanan.pesan_pemesanan,
tb_pemesanan.alamat as alamat_baru,
tb_pemesanan.negara as negara_baru,
tb_pemesanan.provinsi as provinsi_baru,
tb_pemesanan.kabupaten as kabupaten_baru,
tb_pemesanan.kota as kota_baru,
tb_pemesanan.kode_pos as kode_pos_baru,
tb_pemesanan.id_proses_pemesanan,
rt_proses_pemesanan.proses_pemesanan,
tb_pemesanan.id_produk,
tb_produk.nama_produk,
tb_produk.detail1_produk,
tb_produk.id_jenis_produk,
rt_jenis_produk.jenis_produk,
tb_produk.harga,
tb_produk.gambar1_produk,
tb_pemesanan.jumlah_pemesanan,
tb_pemesanan.ongkos_kirim,
tb_pemesanan.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku,
tb_voucher.id_status_voucher,
rt_status_voucher.status_voucher,
tb_pemesanan.id_metode_pembayaran,
rt_metode_pembayaran.metode_pembayaran,
rt_metode_pembayaran.kode_link_pembayaran
FROM
tb_pemesanan
LEFT JOIN tb_login_user ON tb_login_user.id_user = tb_pemesanan.id_user
LEFT JOIN tb_data_user ON tb_data_user.id_user = tb_login_user.id_user
LEFT JOIN rt_proses_pemesanan ON rt_proses_pemesanan.id_proses_pemesanan = tb_pemesanan.id_proses_pemesanan
LEFT JOIN tb_produk ON tb_produk.id_produk = tb_pemesanan.id_produk
LEFT JOIN rt_jenis_produk ON rt_jenis_produk.id_jenis_produk = tb_produk.id_jenis_produk
LEFT JOIN tb_voucher ON tb_voucher.id_voucher = tb_pemesanan.id_voucher
LEFT JOIN rt_jenis_voucher ON rt_jenis_voucher.id_jenis_voucher = tb_voucher.id_jenis_voucher
LEFT JOIN rt_status_voucher ON rt_status_voucher.id_status_voucher = tb_voucher.id_status_voucher
LEFT JOIN rt_metode_pembayaran ON rt_metode_pembayaran.id_metode_pembayaran = tb_pemesanan.id_metode_pembayaran ;

-- ----------------------------
-- View structure for view_data_voucher
-- ----------------------------
DROP VIEW IF EXISTS `view_data_voucher`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_data_voucher` AS SELECT
tb_voucher.id_voucher,
tb_voucher.kode_voucher,
tb_voucher.id_jenis_voucher,
rt_jenis_voucher.jenis_voucher,
tb_voucher.total_voucher,
tb_voucher.waktu_berlaku,
tb_voucher.id_status_voucher,
rt_status_voucher.status_voucher
FROM
tb_voucher
LEFT JOIN rt_jenis_voucher ON rt_jenis_voucher.id_jenis_voucher = tb_voucher.id_jenis_voucher
LEFT JOIN rt_status_voucher ON rt_status_voucher.id_status_voucher = tb_voucher.id_status_voucher ;

SET FOREIGN_KEY_CHECKS = 1;
