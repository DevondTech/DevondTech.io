<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['updateConfirmationReview'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_status_baca = 2;       
        $query = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca' WHERE id_status_notifikasi = '6'";
        $db->query($query);
        echo "updateConfirmationReview";   
    }
    if(isset($_GET['updateConfirmationReturTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_status_baca = 2;       
        $query = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca' WHERE id_status_notifikasi = '7'";
        $db->query($query);
        echo "updateConfirmationReturTransfer";   
    }
    if(isset($_GET['updateConfirmationPaymentTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_status_baca = 2;       
        $query = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca' WHERE id_status_notifikasi = '2'";
        $db->query($query);
        echo "updateConfirmationPaymentTransfer";   
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}
?>