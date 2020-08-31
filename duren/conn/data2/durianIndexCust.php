<?php 

    if(isset($_GET['viewDataDurianIndexCust'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_tampil_produk_spesial_halaman_utama ";
        $result = $db->query($query); 
        $viewDataDurianIndexCustCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataDurianIndexCustCallBack=json_encode($viewDataDurianIndexCustCallBack);
        echo json_encode($viewDataDurianIndexCustCallBack);
    }

    if(isset($_GET['viewDataMedsosFB'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where nama_medsos = 'Facebook' ";
        $result = $db->query($query); 
        $viewDataMedsosFBCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataDurianIndexCustCallBack=json_encode($viewDataMedsosFBCallBack);
        echo json_encode($viewDataMedsosFBCallBack);
    }

    if(isset($_GET['viewDataMedsosIG'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where nama_medsos = 'Instagram' ";
        $result = $db->query($query); 
        $viewDataMedsosIGCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataMedsosIGCallBack=json_encode($viewDataMedsosIGCallBack);
        echo json_encode($viewDataMedsosIGCallBack);
    }

    if(isset($_GET['viewDataMedsosWA'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where nama_medsos = 'WhatsAPP' ";
        $result = $db->query($query); 
        $viewDataMedsosWACallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataMedsosWACallBack=json_encode($viewDataMedsosWACallBack);
        echo json_encode($viewDataMedsosWACallBack);
    }

    if(isset($_GET['viewDataMedsosTW'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_medsos where nama_medsos = 'Twitter' ";
        $result = $db->query($query); 
        $viewDataMedsosTWCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataMedsosTWCallBack=json_encode($viewDataMedsosTWCallBack);
        echo json_encode($viewDataMedsosTWCallBack);
    }

    if(isset($_GET['viewDataAboutUS'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_about_us ";
        $result = $db->query($query); 
        $viewDataAboutUSCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $viewDataAboutUSCallBack=json_encode($viewDataAboutUSCallBack);
        echo json_encode($viewDataAboutUSCallBack);
    }


?>