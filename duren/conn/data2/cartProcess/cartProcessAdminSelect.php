<?php	
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){

	if(isset($_GET['select'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_semua_pesanan where kode_pemesanan ='".$_GET['select']."'";
        $result = $db->query($query); 
        $select = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $select=json_encode($select);
        echo json_encode($select);
    }

    if(isset($_GET['selectPrintProcess'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_pemesanan, kode_pemesanan, waktu_pemesanan, username, nama_lengkap, email, nomor_hp, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, id_proses_pemesanan, proses_pemesanan, nama_produk, detail1_produk, jenis_produk, jumlah_pemesanan, harga, diskon, harga_setelah_diskon, total_harga_perproduk, ongkos_kirim, total_harga_yang_harus_dibayar, satuan_produk, teks_berat_produk, konfersi_berat_produk_perkilogram, kode_voucher, jenis_voucher, total_voucher, waktu_berlaku, status_voucher, metode_pembayaran, kode_link_pembayaran, pesan_bukti_pembayaran, gambar_bukti_pembayaran, nama_pemilik_rekening, tanggal_transfer, no_rekening, bank_asal FROM view_data_semua_pesanan where kode_pemesanan ='".$_GET['selectPrintProcess']."'";
        $result = $db->query($query); 
        $selectPrintProcess = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectPrintProcess=json_encode($selectPrintProcess);
        echo json_encode($selectPrintProcess);
    }

    if(isset($_GET['dataReturCallData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_retur, kode_retur, waktu_retur, nama_lengkap, pesan_retur, nomor_hp, email, nama_pemilik_rekening, no_rekening, bank_asal, total_harga_yang_harus_dibayar, gambar_barang_retur, id_pemesanan,id_produk,  nama_produk, jenis_produk, jumlah_pemesanan, satuan_produk, teks_berat_produk FROM view_detail_pengajuan_retur_produk where id_retur ='".$_GET['dataReturCallData']."'";
        $result = $db->query($query); 
        $dataReturCallData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $dataReturCallData=json_encode($dataReturCallData);
        echo json_encode($dataReturCallData);
    }

    if(isset($_GET['dataReturCallDataAll'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_retur, kode_retur, waktu_retur, nama_lengkap, email, nomor_hp, gambar_barang_retur, status_retur, pesan_retur, admin_tanggal_transfer, admin_total_pengembalian_dana, id_produk,  nama_produk, jenis_produk, jumlah_pemesanan, satuan_produk, teks_berat_produk FROM view_data_retur_all where id_retur ='".$_GET['dataReturCallDataAll']."'";
        $result = $db->query($query); 
        $dataReturCallDataAll = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $dataReturCallDataAll=json_encode($dataReturCallDataAll);
        echo json_encode($dataReturCallDataAll);
    }

    if(isset($_GET['selectPrintSales'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT kode_penjualan, waktu_penjualan, nama_lengkap, email, nomor_hp, foto, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, nama_produk, jenis_produk, satuan_produk, jumlah_penjualan, teks_berat_produk, konfersi_berat_produk_perkilogram, ongkos_kirim, jenis_voucher, metode_pembayaran, pesan_bukti_pembayaran, nama_pemilik_rekening, tanggal_transfer, no_rekening, bank_asal, gambar_bukti_pembayaran, total_harga_perproduk, total_penjualan FROM view_data_penjualan where kode_penjualan ='".$_GET['selectPrintSales']."'";
        $result = $db->query($query); 
        $selectPrintSales = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectPrintSales=json_encode($selectPrintSales);
        echo json_encode($selectPrintSales);
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}
?>

