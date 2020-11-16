<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['callIDBeratProduk'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_berat_produk, teks_berat_produk FROM rt_berat_produk_pemesanan";
        $result = $db->query($query); 
        $callIDBeratProduk = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDBeratProduk=json_encode($callIDBeratProduk);
        echo json_encode($callIDBeratProduk);
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 
