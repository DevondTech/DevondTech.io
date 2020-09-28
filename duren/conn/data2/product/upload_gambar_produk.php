<?php

    if(isset($_GET['uploadGambar1Produk'])){
        session_start();
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangGambar1 = $_POST['id_barangGambar1'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic1Product = date ("Y-m-d");
        $Gambar1Produk = $_FILES['Gambar1Produk']['name'];
        $fileFolderPic1Product = '../images/product/';
        $fileFolderSavePic1Product = '../../in/accounts-duren/images/product/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xGambar1Produk = explode('.', $Gambar1Produk);
        $ekstensiGambar1Produk = strtolower(end($xGambar1Produk));
        $location = $fileFolderSavePic1Product.$datePic1Product.$id_barangGambar1.$Gambar1Produk;
        if(in_array($ekstensiGambar1Produk, $ekstensiAccept) === true){
            $queryUpdateGambar1Produk = "UPDATE tb_produk SET gambar1_produk='$datePic1Product$id_barangGambar1$Gambar1Produk' WHERE id_produk = $id_barangGambar1";
            $db->query($queryUpdateGambar1Produk);
            move_uploaded_file($_FILES['Gambar1Produk']['tmp_name'], $location);
            echo "Success";   
        }
        else{ echo "dataCheck"; }
    }
    
    if(isset($_GET['uploadGambar2Produk'])){
        session_start();
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangPOSTGambar2 = $_POST['id_barangPOSTGambar2'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic2Product = date ("Y-m-d");
        $Gambar2Produk = $_FILES['Gambar2Produk']['name'];
        $fileFolderPic2Product = '../images/product/';
        $fileFolderSavePic2Product = '../../in/accounts-duren/images/product/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xGambar2Produk = explode('.', $Gambar2Produk);
        $ekstensiGambar2Produk = strtolower(end($xGambar2Produk));
        $location = $fileFolderSavePic2Product.$datePic2Product.$id_barangPOSTGambar2.$Gambar2Produk;
        if(in_array($ekstensiGambar2Produk, $ekstensiAccept) === true){
            $queryUpdateGambar2Produk = "UPDATE tb_produk SET gambar2_produk='$datePic2Product$id_barangPOSTGambar2$Gambar2Produk' WHERE id_produk = $id_barangPOSTGambar2";
            $db->query($queryUpdateGambar2Produk);
            move_uploaded_file($_FILES['Gambar2Produk']['tmp_name'], $location);
            echo "Success";   
        }
        else{ echo "dataCheck"; }
    }

    if(isset($_GET['uploadGambar3Produk'])){
        session_start();
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangPOSTGambar3 = $_POST['id_barangPOSTGambar3'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic3Product = date ("Y-m-d");
        $Gambar3Produk = $_FILES['Gambar3Produk']['name'];
        $fileFolderPic3Product = '../images/product/';
        $fileFolderSavePic3Product = '../../in/accounts-duren/images/product/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xGambar3Produk = explode('.', $Gambar3Produk);
        $ekstensiGambar3Produk = strtolower(end($xGambar3Produk));
        $location = $fileFolderSavePic3Product.$datePic3Product.$id_barangPOSTGambar3.$Gambar3Produk;
        if(in_array($ekstensiGambar3Produk, $ekstensiAccept) === true){
            $queryUpdateGambar3Produk = "UPDATE tb_produk SET gambar3_produk='$datePic3Product$id_barangPOSTGambar3$Gambar3Produk' WHERE id_produk = $id_barangPOSTGambar3";
            $db->query($queryUpdateGambar3Produk);
            move_uploaded_file($_FILES['Gambar3Produk']['tmp_name'], $location);
            echo "Success";   
        }
        else{ echo "dataCheck"; }
    }

    if(isset($_GET['uploadGambar4Produk'])){
        session_start();
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangPOSTGambar4 = $_POST['id_barangPOSTGambar4'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic4Product = date ("Y-m-d");
        $Gambar4Produk = $_FILES['Gambar4Produk']['name'];
        $fileFolderPic4Product = '../images/product/';
        $fileFolderSavePic4Product = '../../in/accounts-duren/images/product/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xGambar4Produk = explode('.', $Gambar4Produk);
        $ekstensiGambar4Produk = strtolower(end($xGambar4Produk));
        $location = $fileFolderSavePic4Product.$datePic4Product.$id_barangPOSTGambar4.$Gambar4Produk;
        if(in_array($ekstensiGambar4Produk, $ekstensiAccept) === true){
            $queryUpdateGambar4Produk = "UPDATE tb_produk SET gambar4_produk='$datePic4Product$id_barangPOSTGambar4$Gambar4Produk' WHERE id_produk = $id_barangPOSTGambar4";
            $db->query($queryUpdateGambar4Produk);
            move_uploaded_file($_FILES['Gambar4Produk']['tmp_name'], $location);
            echo "Success";   
        }
        else{ echo "dataCheck"; }
    }

?>