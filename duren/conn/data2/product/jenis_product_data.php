<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['callIDJenisProduk'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_jenis_produk";
        $result = $db->query($query); 
        $callIDJenisProduk = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDJenisProduk=json_encode($callIDJenisProduk);
        echo json_encode($callIDJenisProduk);
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 
