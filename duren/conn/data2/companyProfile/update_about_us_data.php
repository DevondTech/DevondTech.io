<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){

    if(isset($_GET['updateAlamat'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_alamat = $_POST['PrintDetail_link_alamat'];
        if($PrintDetail_link_alamat!='')
        {           
            $query = "UPDATE tb_about_us SET alamat='$PrintDetail_link_alamat' WHERE id_about_us = '1'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateNomorHP1'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_nomor_hp1 = $_POST['PrintDetail_link_nomor_hp1'];
        if($PrintDetail_link_nomor_hp1!='')
        {           
            $query = "UPDATE tb_about_us SET nomor_hp1='$PrintDetail_link_nomor_hp1' WHERE id_about_us = '1'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateNomorHP2'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_nomor_hp2 = $_POST['PrintDetail_link_nomor_hp2'];
        if($PrintDetail_link_nomor_hp2!='')
        {           
            $query = "UPDATE tb_about_us SET nomor_hp2='$PrintDetail_link_nomor_hp2' WHERE id_about_us = '1'";
            $db->query($query);       
            echo "Success"; 
        }
        else{
           echo 'userCheck';
        }
    }

    if(isset($_GET['updateEmail'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $PrintDetail_link_email = $_POST['PrintDetail_link_email'];
        if($PrintDetail_link_email!='')
        {           
            $query = "UPDATE tb_about_us SET email='$PrintDetail_link_email' WHERE id_about_us = '1'";
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