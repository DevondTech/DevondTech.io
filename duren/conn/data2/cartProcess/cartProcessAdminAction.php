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
        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='4' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca','$id_user')";
            $db->query($queryNotif); 

            $queryReadNotif = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca_admin' WHERE kode_pemesanan = '$kode_pemesanan' and id_status_notifikasi='2'";
            $db->query($queryReadNotif);
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
        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='5' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca','$id_user')";
            $db->query($queryNotif); 
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