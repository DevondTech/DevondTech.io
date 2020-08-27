<?php
    if(isset($_GET['callIDSatuanProduct'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_satuan_produk";
        $result = $db->query($query); 

        $callIDSatuanProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDSatuanProduct=json_encode($callIDSatuanProduct);
        echo json_encode($callIDSatuanProduct);
    }
?> 
