<?php

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

    if(isset($_POST['createDataProduct'])){
        session_start();
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);

        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d H:i:s");

        $nama_produk = $_POST['nama_produk'];
        $id_jenis_produk = $_POST['id_jenis_produk'];
        $detail1_produk = $_POST['detail1_produk'];
        $detail2_produk = $_POST['detail2_produk'];
        $gambar1_produk = $_FILES['gambar1_produk']['name'];
        $gambar2_produk = $_FILES['gambar2_produk']['name'];
        $gambar3_produk = $_FILES['gambar3_produk']['name'];
        $gambar4_produk = $_FILES['gambar4_produk']['name'];
        $gambar5_produk = $_FILES['gambar5_produk']['name'];
        $fileFolder = '../images/product/';

        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));

        if(in_array($ekstensiFoto, $ekstensiAccept) === true)
        {
            $query = "INSERT INTO tb_produk(nama_produk, detail1_produk, detail2_produk, id_jenis_produk, gambar1_produk, gambar2_produk, gambar3_produk, gambar4_produk, gambar5_produk)
                        VALUES('$nama_produk','$detail1_produk','$detail2_produk','$fileFolder$datePic$gambar1_produk','$fileFolder$datePic$gambar2_produk','$fileFolder$datePic$gambar3_produk','$fileFolder$datePic$gambar4_produk','$fileFolder$datePic$gambar5_produk')";   
            $result = $db->query($query);        
            move_uploaded_file($_FILES['gambar1_produk']['tmp_name'], $fileFolder.$datePic.$_FILES['gambar1_produk']['name']);
            move_uploaded_file($_FILES['gambar2_produk']['tmp_name'], $fileFolder.$datePic.$_FILES['gambar2_produk']['name']);
            move_uploaded_file($_FILES['gambar3_produk']['tmp_name'], $fileFolder.$datePic.$_FILES['gambar3_produk']['name']);
            move_uploaded_file($_FILES['gambar4_produk']['tmp_name'], $fileFolder.$datePic.$_FILES['gambar4_produk']['name']);
            move_uploaded_file($_FILES['gambar5_produk']['tmp_name'], $fileFolder.$datePic.$_FILES['gambar5_produk']['name']);
            echo "Success"; 
        }
        else{
           echo 'dataCheck';
        }         
    }
    
?>