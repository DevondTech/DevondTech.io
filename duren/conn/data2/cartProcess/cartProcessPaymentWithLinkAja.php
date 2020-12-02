<?php
session_start();
$id_user = $_SESSION['id_user'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$kode_pemesanan = $_GET['kode_pemesanan']; 
if($id_user!='' && $kode_pemesanan!=''){
    require '../config.php'; 
    $json = json_decode(file_get_contents('php://input'), true);
    //$kode_pemesanan = $_GET['kode_pemesanan']; 
    $receipt_number = $_GET['receipt_number']; 
    $ref_num = $_GET['ref_num']; 
    date_default_timezone_set('Asia/Jakarta');
    $WaktuPemesanan = date('Y-m-d H:i:s');
    $tanggal_dibeli = date('Y-m-d H:i:s');
    $tanggal_transfer = $tanggal_dibeli; 
    $resultData = $db->query("select id_pemesanan, id_produk, jumlah_pemesanan, id_berat_produk, total_harga_yang_harus_dibayar, id_user, alamat, kelurahan, kecamatan, kota, kabupaten, provinsi, negara, kode_pos, id_voucher, ongkos_kirim, id_metode_pembayaran, gambar_bukti_pembayaran, harga FROM view_data_semua_pesanan where kode_pemesanan='$kode_pemesanan'");
    $pemesananData = $resultData->fetch_object();
    $id_pemesanan=$pemesananData->id_pemesanan;
    $id_pemesanan=$kode_pemesanan;
    $IdProduk=$pemesananData->id_produk;
    $JumlahPemesanan=$pemesananData->jumlah_pemesanan;
    $IdBeratProduk=$pemesananData->id_berat_produk;
    $TotalPenjualan=$pemesananData->total_harga_yang_harus_dibayar;
    $IdKonsumen=$pemesananData->id_user;
    $IdVoucher=$pemesananData->id_voucher;
    $Ongkir=$pemesananData->ongkos_kirim;
    $AlamatKonsumen=$pemesananData->alamat;
    $KelurahanKonsumen=$pemesananData->kelurahan;
    $KecamatanKonsumen=$pemesananData->kecamatan;
    $KotaKonsumen=$pemesananData->kota;
    $KabupatenKonsumen=$pemesananData->kabupaten;
    $ProvinsiKonsumen=$pemesananData->provinsi;
    $NegaraKonsumen=$pemesananData->negara;
    $KodePosKonsumen=$pemesananData->kode_pos;
    $MetodePembayaran=$pemesananData->id_metode_pembayaran;
    $IdVoucher=$pemesananData->id_voucher;
    $Ongkir=$pemesananData->ongkos_kirim;
    $gambar_bukti_pembayaran=$pemesananData->gambar_bukti_pembayaran;
    $total_harga_perproduk=$pemesananData->harga;
    $pesan_notifikasi ='Pembayaran Barang Atas Nama '.$nama_lengkap.' Dibuat. Dengan Jumlah Pemesanan '.$JumlahPemesanan.' Pack';
    $id_status_notifikasi = 2;
    $id_status_baca = 1;
    $id_user_baca = 2;
    $id_status_produk_dalam_proses = 3;
    $id_proses_pemesanan = 3;
    if($id_user!=''){
        $queryPenjualan = "INSERT INTO tb_penjualan(kode_penjualan, waktu_penjualan, id_produk, jumlah_penjualan, id_berat_produk, total_penjualan, id_user, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, ongkos_kirim, id_voucher, id_metode_pembayaran, receipt_number, tanggal_transfer, ref_num, gambar_bukti_pembayaran, total_harga_perproduk )
                        VALUES('$kode_pemesanan','$WaktuPemesanan','$IdProduk','$JumlahPemesanan','$IdBeratProduk','$TotalPenjualan','$IdKonsumen','$AlamatKonsumen','$NegaraKonsumen','$ProvinsiKonsumen','$KabupatenKonsumen','$KotaKonsumen','$KecamatanKonsumen','$KelurahanKonsumen','$KodePosKonsumen','$Ongkir','$IdVoucher','$MetodePembayaran','$receipt_number','$tanggal_transfer','$ref_num', '$gambar_bukti_pembayaran','$total_harga_perproduk')";   
        $db->query($queryPenjualan);     
        $query = "UPDATE tb_pemesanan SET  receipt_number='$receipt_number', ref_num='$ref_num', id_proses_pemesanan='$id_proses_pemesanan' WHERE id_user = $id_user and id_proses_pemesanan='2'";
        $db->query($query);
        $queryBarangOnProgress = "UPDATE tb_produk_dalam_proses SET id_status_produk_dalam_proses = '$id_status_produk_dalam_proses', tanggal_dibeli = '$tanggal_dibeli' WHERE id_pemesanan = $id_pemesanan";
        $db->query($queryBarangOnProgress);
        $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, kode_pemesanan)
                        VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca', '$kode_pemesanan')";   
        $db->query($queryNotif); 
        echo "updateConfirmationPaymentTransferSuccess";   
    }
else{
    header('Location: https://kingfruit.co.id/');
}
?>
