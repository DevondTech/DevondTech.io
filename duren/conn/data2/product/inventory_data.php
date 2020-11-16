<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_status_user = $_SESSION['id_status_user'];
    if($id_user!='' && $id_status_user=='1'){
        require '../config.php'; 
        $id_produk =  $_GET['id_produk'];
        $result = mysqli_query($db, "SELECT id_inventory, DATE_FORMAT(tanggal_inventory, '%e/%c/%Y %H:%i') as tanggal_inventory , id_produk, nama_produk, penambahan_stok FROM tb_inventory where id_produk ='$id_produk'");
        $rows = array();
        while($row = mysqli_fetch_array($result))
        {
          $rows[] = $row;
        }
        echo json_encode($rows);
    }
    else{
        header('Location: https://kingfruit.co.id/');
    } 
?> 


