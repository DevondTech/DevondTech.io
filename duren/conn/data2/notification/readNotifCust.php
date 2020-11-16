<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='5'){
    if(isset($_GET['updateConfirmationProcess'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_status_baca = 2;       
        $query = "UPDATE tb_notifikasi SET id_status_baca='$id_status_baca' WHERE id_status_notifikasi = '3' and id_user='$id_user' ";
        $db->query($query);
        echo "updateConfirmationProcess";   
    }
    if(isset($_GET['updateConfirmationRetur'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_status_baca = 2;       
        $query = "UPDATE tb_notifikasi SET id_status_baca='$id_status_baca' WHERE id_status_notifikasi = '8' and id_user='$id_user'";
        $db->query($query);
        echo "updateConfirmationRetur";   
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}
?>

