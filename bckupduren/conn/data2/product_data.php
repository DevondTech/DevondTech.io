<?php
    
    if(isset($_GET['callProductDataTable'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_produk";
        $result = $db->query($query);
        $callProductDataPrintTable = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callProductDataPrintTable=json_encode($callProductDataPrintTable);
        echo json_encode($callProductDataPrintTable);
    }

    if(isset($_GET['callIDJenisProduk'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_jenis_produk";
        $result = $db->query($query); 

        $callIDJenisProduk = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDJenisProduk=json_encode($callIDJenisProduk);
        echo json_encode($callIDJenisProduk);
    }

    if(isset($_GET['createDataProduct'])){
        session_start();
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);

        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d H:i:s");

        $nama_produk = $_POST['nama_produk'];
        $id_jenis_produk = $_POST['id_jenis_produk'];
        $detail1_produk = $_POST['detail1_produk'];
        $detail2_produk = $_POST['detail2_produk'];

        if($nama_produk != '')
        {
            $query = "INSERT INTO tb_produk(nama_produk, detail1_produk, detail2_produk, id_jenis_produk)
                        VALUES('$nama_produk','$detail1_produk','$detail2_produk','$id_jenis_produk')";   
            $result = $db->query($query);        
          
            echo "Success"; 
        }
        else{
           echo 'dataCheck';
        }         
    }
    
?>