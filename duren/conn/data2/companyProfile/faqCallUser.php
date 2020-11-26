<?php

    if(isset($_GET['selectData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_faq, faq FROM tb_faq where id_faq = '1'";
        $result = $db->query($query); 
        $selectData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectData=json_encode($selectData);
        echo json_encode($selectData);
    }
?>