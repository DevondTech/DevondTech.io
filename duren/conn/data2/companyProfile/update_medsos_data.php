<?php 
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    
    if(isset($_GET['updateFacebook'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_medsos_facebook = $_POST['PrintDetail_link_medsos_facebook'];
        if($PrintDetail_link_medsos_facebook!='')
        {           
            $query = "UPDATE tb_medsos SET link_medsos='$PrintDetail_link_medsos_facebook' WHERE id_medsos = '1'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateInstagram'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_medsos_instagram = $_POST['PrintDetail_link_medsos_instagram'];
        if($PrintDetail_link_medsos_instagram!='')
        {           
            $query = "UPDATE tb_medsos SET link_medsos='$PrintDetail_link_medsos_instagram' WHERE id_medsos = '2'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateWhatsapp'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_medsos_whatsapp = $_POST['PrintDetail_link_medsos_whatsapp'];
        if($PrintDetail_link_medsos_whatsapp!='')
        {           
            $query = "UPDATE tb_medsos SET link_medsos='$PrintDetail_link_medsos_whatsapp' WHERE id_medsos = '3'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateTwitter'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_medsos_twitter = $_POST['PrintDetail_link_medsos_twitter'];
        if($PrintDetail_link_medsos_twitter!='')
        {           
            $query = "UPDATE tb_medsos SET link_medsos='$PrintDetail_link_medsos_twitter' WHERE id_medsos = '4'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

}
else{
    header('Location: https://kingfruit.co.id/');
}
 
?>