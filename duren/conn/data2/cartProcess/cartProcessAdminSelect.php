<?php	

	if(isset($_GET['select'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_semua_pesanan where kode_pemesanan ='".$_GET['select']."'";
        $result = $db->query($query); 
        $select = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $select=json_encode($select);
        echo json_encode($select);
    }

    if(isset($_GET['selectPrintProcess'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_pemesanan, kode_pemesanan, waktu_pemesanan, username, nama_lengkap, email, nomor_hp, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, id_proses_pemesanan, proses_pemesanan, nama_produk, detail1_produk, jenis_produk, jumlah_pemesanan, harga, diskon, harga_setelah_diskon, total_harga_perproduk, ongkos_kirim, total_harga_yang_harus_dibayar, satuan_produk, teks_berat_produk, konfersi_berat_produk_perkilogram, kode_voucher, jenis_voucher, total_voucher, waktu_berlaku, status_voucher, metode_pembayaran, kode_link_pembayaran, pesan_bukti_pembayaran, gambar_bukti_pembayaran, nama_pemilik_rekening, tanggal_transfer, no_rekening, bank_asal FROM view_data_semua_pesanan where kode_pemesanan ='".$_GET['selectPrintProcess']."'";
        $result = $db->query($query); 
        $selectPrintProcess = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectPrintProcess=json_encode($selectPrintProcess);
        echo json_encode($selectPrintProcess);
    }

?>