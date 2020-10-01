<?php	

	if(isset($_GET['alamat'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_about_us where id_about_us='1'";
        $result = $db->query($query); 

        $alamatCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $alamatCallBack=json_encode($alamatCallBack);
        echo json_encode($alamatCallBack);
    }

    if(isset($_GET['nomorhp1'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_about_us where id_about_us='1'";
        $result = $db->query($query); 

        $nomorhp1CallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $nomorhp1CallBack=json_encode($nomorhp1CallBack);
        echo json_encode($nomorhp1CallBack);
    }

    if(isset($_GET['nomorhp2'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_about_us where id_about_us='1'";
        $result = $db->query($query); 

        $nomorhp2CallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $nomorhp2CallBack=json_encode($nomorhp2CallBack);
        echo json_encode($nomorhp2CallBack);
    }

    if(isset($_GET['email'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_about_us where id_about_us='1'";
        $result = $db->query($query); 

        $emailCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $emailCallBack=json_encode($emailCallBack);
        echo json_encode($emailCallBack);
    }

?>