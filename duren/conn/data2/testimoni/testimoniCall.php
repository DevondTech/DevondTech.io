<?php
    if(isset($_GET['selectData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_testimoni, link_youtube, nama_lengkap FROM tb_testimoni ";
        $result = $db->query($query);      
        if($result){
            $selectData = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectData = json_encode($selectData);
            echo json_encode($selectData);
        }else{
            $selectData ='';
            echo json_encode($selectData);
        }
    }
?>