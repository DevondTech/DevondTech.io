 <?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
/*
    if(isset($_GET['uploadGambar1'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../../../in/accounts-duren/images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $dataIDFoto = $_GET['uploadGambar1'];
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar1_produk='$datePic$id_user$foto' WHERE id_produk = $dataIDFoto";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo "a";   
        }
        else{
            echo "dataCheck";
        }
    }
*/

    if(isset($_GET['uploadGambar1'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../../../in/accounts-duren/images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $dataIDFoto = $_GET['uploadGambar1'];
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        header("Content-Type: application/json");
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar1_produk='$datePic$id_user$foto' WHERE id_produk = $dataIDFoto";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            
            if($queryUpdateFotoUser){
                echo json_encode(array("success"=>true));exit;
            }else{
                echo json_encode(array("errror"=>true));exit;
            }
        }
        else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['uploadGambar2'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../../../in/accounts-duren/images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $dataIDFoto = $_GET['uploadGambar2'];
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        header("Content-Type: application/json");
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar2_produk='$datePic$id_user$foto' WHERE id_produk = $dataIDFoto";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            
            if($queryUpdateFotoUser){
                echo json_encode(array("success"=>true));exit;
            }else{
                echo json_encode(array("errror"=>true));exit;
            }
        }
        else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['uploadGambar3'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../../../in/accounts-duren/images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $dataIDFoto = $_GET['uploadGambar3'];
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        header("Content-Type: application/json");
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar3_produk='$datePic$id_user$foto' WHERE id_produk = $dataIDFoto";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            
            if($queryUpdateFotoUser){
                echo json_encode(array("success"=>true));exit;
            }else{
                echo json_encode(array("errror"=>true));exit;
            }
        }
        else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['uploadGambar4'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../../../in/accounts-duren/images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $dataIDFoto = $_GET['uploadGambar4'];
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        header("Content-Type: application/json");
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar4_produk='$datePic$id_user$foto' WHERE id_produk = $dataIDFoto";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            
            if($queryUpdateFotoUser){
                echo json_encode(array("success"=>true));exit;
            }else{
                echo json_encode(array("errror"=>true));exit;
            }
        }
        else{
            echo json_encode(array("errror"=>true));exit;
        }
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}
