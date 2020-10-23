<?php   
    if(isset($_GET['callDataInventory'])){
        session_start();
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        if($id_user!='' && $id_status_user=='1'){
            require '../config.php'; 
            $json = json_decode(file_get_contents('php://input'), true);
            date_default_timezone_set('Asia/Jakarta');
            $datePic = date ("Y-m-d H:i:s");
            $penambahan_stok = $_POST['penambahan_stok'];
            $idProductToInventory = $_POST['idProductToInventory'];
            $resultData = $db->query("select nama_produk, jumlah_stok FROM tb_produk where id_produk='$idProductToInventory'");
            $productData = $resultData->fetch_object();
            $nama_produk=$productData->nama_produk;
            $jumlah_stok=$productData->jumlah_stok;
            $penambahan_stok_to_produk = $jumlah_stok + $penambahan_stok;
            $queryProduct = "INSERT INTO tb_inventory(tanggal_inventory, id_produk, nama_produk, penambahan_stok)
                        VALUES('$datePic','$idProductToInventory','$nama_produk','$penambahan_stok')";   
            $db->query($queryProduct); 
            $query = "UPDATE tb_produk SET jumlah_stok='$penambahan_stok_to_produk' WHERE id_produk='$idProductToInventory'";   
            $db->query($query); 
            $penambahan_stok_to_produk=$penambahan_stok_to_produk;
            echo json_encode($penambahan_stok_to_produk);
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }
?>

