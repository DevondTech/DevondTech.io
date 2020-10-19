<?php

    if(isset($_GET['callIDJenisProduk'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_jenis_produk";
        $result = $db->query($query); 

        $callIDJenisProduk = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDJenisProduk=json_encode($callIDJenisProduk);
        echo json_encode($callIDJenisProduk);
    }
    
?> 
