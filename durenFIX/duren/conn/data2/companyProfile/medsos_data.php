<?php
   
    if(isset($_GET['facebook'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where id_medsos='1'";
        $result = $db->query($query); 

        $facebookCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $facebookCallBack=json_encode($facebookCallBack);
        echo json_encode($facebookCallBack);
    }

    if(isset($_GET['instagram'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where id_medsos='2'";
        $result = $db->query($query); 

        $instagramCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $instagramCallBack=json_encode($instagramCallBack);
        echo json_encode($instagramCallBack);
    }

    if(isset($_GET['twitter'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where id_medsos='4'";
        $result = $db->query($query); 

        $twitterCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $twitterCallBack=json_encode($twitterCallBack);
        echo json_encode($twitterCallBack);
    }

    if(isset($_GET['whatsapp'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where id_medsos='3'";
        $result = $db->query($query); 

        $whatsappCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $whatsappCallBack=json_encode($whatsappCallBack);
        echo json_encode($whatsappCallBack);
    }
?>