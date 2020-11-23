<?php

    if(isset($_GET['selectData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_faq where id_faq='1'";
        $result = $db->query($query); 
        $callDataFAQ = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callDataFAQ=json_encode($callDataFAQ);
        echo json_encode($callDataFAQ);
    }
?>