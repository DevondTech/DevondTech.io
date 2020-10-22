<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){	

	if(isset($_GET['notificationPaymentAdmin'])){   
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_panyment FROM tb_notifikasi where id_status_baca='1' and id_status_notifikasi='2'";
        $result = $db->query($query); 
        $notificationPaymentAdmin = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $notificationPaymentAdmin=json_encode($notificationPaymentAdmin);
        echo json_encode($notificationPaymentAdmin);
    }

    if(isset($_GET['notificationCommentAdmin'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_comment FROM tb_notifikasi where id_status_baca='1' and id_status_notifikasi='5'";
        $result = $db->query($query); 
        $notificationCommentAdmin = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $notificationCommentAdmin=json_encode($notificationCommentAdmin);
        echo json_encode($notificationCommentAdmin);
    }

    if(isset($_GET['notificationReturAdmin'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_retur FROM tb_notifikasi where id_status_baca='1' and id_status_notifikasi='6'";
        $result = $db->query($query); 
        $notificationReturAdmin = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $notificationReturAdmin=json_encode($notificationReturAdmin);
        echo json_encode($notificationReturAdmin);
    }

}
else{
    header('Location: https://kingfruit.co.id/');
}
?>