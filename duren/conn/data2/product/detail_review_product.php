<?php   
    if(isset($_GET['callDataReviewProduct'])){
        session_start();
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        if($id_user!='' && $id_status_user=='1'){
            require '../config.php'; 
            $id_penilaian_produk = $_GET['callDataReviewProduct'];
            $json = json_decode(file_get_contents('php://input'), true);
            $query = "SELECT id_penilaian_produk, tanggal_penilaian_produk, nama_lengkap, nama_produk, bintang_penilaian_produk, komentar, foto FROM view_data_penilaian_produk where id_penilaian_produk='$id_penilaian_produk'";
            $result = $db->query($query); 
            $callDataReviewProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $callDataReviewProduct=json_encode($callDataReviewProduct);
            echo json_encode($callDataReviewProduct);
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }
?>