<?php

    session_start();
    $id_user = $_SESSION['id_user'];
    $id_status_user = $_SESSION['id_status_user'];

    if(isset($_GET['inputData'])){ 
        if($id_user!='' && $id_status_user=='1'){
            require '../config.php'; 
            $json = json_decode(file_get_contents('php://input'), true);
            $link_youtube = $_POST['link_youtube'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $resultDataCheck = $db->query("select * from tb_testimoni where link_youtube='$link_youtube'");
            $rowCount=$resultDataCheck->num_rows;
            $youtube = 'https://www.youtube.com/embed/';
            if($rowCount==0){
                $queryTestimoni = "INSERT INTO tb_testimoni(link_youtube, nama_lengkap)
                                    VALUES('$link_youtube','$nama_lengkap')";   
                $db->query($queryTestimoni); 
                $inputData="success";
                echo json_encode($inputData);
            }
            else{
                $inputDataAlreadyAvailable = 'already available';
                echo $inputDataAlreadyAvailable;
            } 
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['uploadFotoDataTestimoni'])){
        if($id_user!='' && $id_status_user=='1'){
            require '../config.php';
            $json = json_decode(file_get_contents('php://input'), true);
            $id_user = $_SESSION['id_user'];
            date_default_timezone_set('Asia/Jakarta');
            $datePic = date ("Y-m-d");
            $foto = $_FILES['foto']['name'];
            $fileFolder = '../images/testimoni/';
            $fileFolderSave = '../../../in/accounts-duren/images/testimoni/';
            $ekstensiAccept = array('png','jpg','jpeg','JPG');
            $xFoto = explode('.', $foto);
            $ekstensiFoto = strtolower(end($xFoto));
            $location = $fileFolderSave.$foto;
            if(in_array($ekstensiFoto, $ekstensiAccept) === true){
                $queryUploadFotoDataTestimoni = "UPDATE tb_pemesanan SET gambar_bukti_pembayaran='$fileFolder$foto' WHERE id_user = $id_user and id_proses_pemesanan='2'";
                $db->query($queryUploadFotoDataTestimoni);
                move_uploaded_file($_FILES['foto']['tmp_name'], $location);
                echo "Success";   
            }
            else{
                echo "dataCheck";
            }
        }    
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }


?>
