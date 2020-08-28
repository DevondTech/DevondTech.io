<?php
    if(isset($_GET['uploadGambar1Produk'])){
        session_start();
        include '../../../conn/data2/config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangGambar = $_POST['id_barangGambar'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $data = 'gambar1_produk';
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$data.$datePic.$id_barangGambar.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar1_produk='$fileFolder$data$datePic$id_barangGambar$foto' WHERE id_produk = $id_barangGambar";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo '<script language="javascript">alert("Anda Berhasil Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
        else{
            echo '<script language="javascript">alert("Anda GAGAL Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
    }

    if(isset($_GET['uploadGambar2Produk'])){
        session_start();
        include '../../../conn/data2/config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangGambar = $_POST['id_barangGambar'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $data = 'gambar2_produk';
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$data.$datePic.$id_barangGambar.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar2_produk='$fileFolder$data$datePic$id_barangGambar$foto' WHERE id_produk = $id_barangGambar";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo '<script language="javascript">alert("Anda Berhasil Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
        else{
            echo '<script language="javascript">alert("Anda GAGAL Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
    }

    if(isset($_GET['uploadGambar3Produk'])){
        session_start();
        include '../../../conn/data2/config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangGambar = $_POST['id_barangGambar'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $data = 'gambar3_produk';
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$data.$datePic.$id_barangGambar.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar3_produk='$fileFolder$data$datePic$id_barangGambar$foto' WHERE id_produk = $id_barangGambar";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo '<script language="javascript">alert("Anda Berhasil Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
        else{
            echo '<script language="javascript">alert("Anda GAGAL Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
    }

    if(isset($_GET['uploadGambar4Produk'])){
        session_start();
        include '../../../conn/data2/config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_barangGambar = $_POST['id_barangGambar'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $data = 'gambar4_produk';
        $fileFolder = '../images/produk/';
        $fileFolderSave = '../images/produk/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$data.$datePic.$id_barangGambar.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_produk SET gambar4_produk='$fileFolder$data$datePic$id_barangGambar$foto' WHERE id_produk = $id_barangGambar";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo '<script language="javascript">alert("Anda Berhasil Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
        else{
            echo '<script language="javascript">alert("Anda GAGAL Mengupdate Data Gambar Produk 1");
                     document.location="dataProductUpdateCallBack.php"</script>';
        }
    }
?>