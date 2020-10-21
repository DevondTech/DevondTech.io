<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['callIDSatuanProduct'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_satuan_produk";
        $result = $db->query($query); 
        $callIDSatuanProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDSatuanProduct=json_encode($callIDSatuanProduct);
        echo json_encode($callIDSatuanProduct);
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 
