<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='5'){	

	/*if(isset($_GET['confirmationPaymentCust'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_panyment FROM tb_notifikasi where id_status_baca='1' and id_status_notifikasi='3'";
        $result = $db->query($query); 
        $notificationPaymentAdmin = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $notificationPaymentAdmin=json_encode($notificationPaymentAdmin);
        echo json_encode($notificationPaymentAdmin);
    }

    if(isset($_GET['confirmationShippedCust'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_shipped FROM tb_notifikasi where id_status_baca='1' and id_status_notifikasi='5'";
        $result = $db->query($query); 
        $confirmationShippedCust = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $confirmationShippedCust=json_encode($confirmationShippedCust);
        echo json_encode($confirmationShippedCust);
    }
*/
    if(isset($_GET['confirmationProcess'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_process FROM view_notification_process where id_status_baca='1' and id_user = '$id_user' ";
        $result = $db->query($query); 
        $confirmationProcess = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $confirmationProcess=json_encode($confirmationProcess);
        echo json_encode($confirmationProcess);
    }

    if(isset($_GET['confirmationRequestReturCust'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT COUNT(id_status_notifikasi) AS call_data_notifikasi_retur FROM view_notification_retur where id_status_baca='1' and id_user='$id_user'";
        $result = $db->query($query); 
        $confirmationRequestReturCust = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $confirmationRequestReturCust=json_encode($confirmationRequestReturCust);
        echo json_encode($confirmationRequestReturCust);
    }

}
else{
    header('Location: https://kingfruit.co.id/');
}
?>