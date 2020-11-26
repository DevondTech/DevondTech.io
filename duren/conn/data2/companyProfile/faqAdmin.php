<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['callData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_faq where id_faq=1";
        $result = $db->query($query); 

        $callData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callData=json_encode($callData);
        echo json_encode($callData);
    }

    if(isset($_GET['updateDataFAQ'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_faq = $_POST['PrintDetail_faq'];
        if($PrintDetail_faq!='')
        {           
            $query = "UPDATE tb_faq SET faq='$PrintDetail_faq' WHERE id_faq = '1'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'updateDataFAQCheck';
        }
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}
    
?>