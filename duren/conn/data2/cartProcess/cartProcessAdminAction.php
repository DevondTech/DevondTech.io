<?php    
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    
    if(isset($_GET['updateConfirmationPayment'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $kode_pemesanan = $_POST['a']; 
        $id_proses_pemesanan = 4;
        $callDataUser = $db->query("select id_user FROM tb_pemesanan WHERE kode_pemesanan='$kode_pemesanan'");
        $callDataUserToPrint = $callDataUser->fetch_object();
        $id_user = $callDataUserToPrint->id_user;

        $pesan_notifikasi ='Pembayaran Anda Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikonfirmasi';
        $id_status_notifikasi = 3;
        $id_status_baca = 1;
        $id_user_baca = 1;
        $id_status_baca_admin = 2;

        $id_status_notifikasi_send = 5;
        $id_status_baca_send = 1;
        $id_user_baca_send = 1;
        $id_status_baca_admin_send = 1;
        $pesan_notifikasi_send ='Pembayaran Barang Dengan Kode Pemesanan '.$kode_pemesanan.' Dikonfirmasi. Silahkan Lanjutkan Konfirmasi Pengiriman Barang';

        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='4' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca','$id_user')";
            $db->query($queryNotif); 

            $queryReadNotif = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca_admin' WHERE kode_pemesanan = '$kode_pemesanan' and id_status_notifikasi='2'";
            $db->query($queryReadNotif);
            $querySendNotif = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca_admin' WHERE kode_pemesanan = '$kode_pemesanan'";
            $querySendNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, kode_pemesanan)
                            VALUES('$pesan_notifikasi_send','$id_status_notifikasi_send','$id_status_baca_send','$id_user_baca_send', '$kode_pemesanan')";   
            $db->query($querySendNotif);
            echo "updateConfirmationPaymentSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['updateConfirmationShipped'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $kode_pemesanan = $_POST['a']; 
        $id_proses_pemesanan = 5;
        $pesan_notifikasi ='Barang Pesanan Anda Dengan Kode Transaksi: '.$kode_pemesanan.', Sedang Dalam Proses Pengiriman';
        $callDataUser = $db->query("select id_user FROM tb_pemesanan WHERE kode_pemesanan='$kode_pemesanan'");
        $callDataUserToPrint = $callDataUser->fetch_object();
        $id_user = $callDataUserToPrint->id_user;
        $id_status_notifikasi = 3;
        $id_status_baca = 1;
        $id_user_baca = 1;
        date_default_timezone_set('Asia/Jakarta');
        $waktu_pengiriman = date('Y-m-d H:i:s');
        $id_status_notifikasi_read = 5;
        $id_status_baca_read = 1;
        $id_user_baca_read = 1;
        $id_status_baca_admin_read = 2;

        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='5', waktu_pengiriman = '$waktu_pengiriman' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca','$id_user')";
            $db->query($queryNotif); 
            $queryReadNotif = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca_admin_read' WHERE id_status_notifikasi = '$id_status_notifikasi_read' and kode_pemesanan='$kode_pemesanan'";
            $db->query($queryReadNotif);
            echo "updateConfirmationPaymentSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}

?>