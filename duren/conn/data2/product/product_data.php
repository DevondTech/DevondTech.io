<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    require( '../../ssp.class.php' );
    require( '../configTwo.php' ); 
    $table = 'view_data_produk';
    $primaryKey = 'id_produk';

    if(isset($_GET['createDataProduct'])){
        $db = SSP::sql_connect($dbDetails);     
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d H:i:s");
        $nama_produk = $_POST['nama_produk'];
        $id_jenis_produk = $_POST['id_jenis_produk'];
        $jumlah_stok = $_POST['jumlah_stok'];
        $id_satuan_produk = $_POST['id_satuan_produk'];
        $detail1_produk = $_POST['detail1_produk'];
        $detail2_produk = $_POST['detail2_produk'];
        
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $resultLastID = $db->query("select max(id_produk) as last_id_produk FROM tb_produk");
        $productDataLastID = $resultLastID->fetch_object();
        $productLast=$productDataLastID->last_id_produk;
        $id_produk_plus = $productLast + 1;

        $sql = "INSERT INTO tb_produk(nama_produk, detail1_produk, detail2_produk, id_jenis_produk, id_satuan_produk, jumlah_stok)
                        VALUES('$nama_produk','$detail1_produk','$detail2_produk','$id_jenis_produk','$id_satuan_produk', '$jumlah_stok')";   
        $result = SSP::sql_exec_update($db,null,$sql);

        $queryProduct = "INSERT INTO tb_inventory(tanggal_inventory, id_produk, nama_produk, penambahan_stok)
                        VALUES('$datePic','$id_produk_plus','$nama_produk','$jumlah_stok')";   
        $db->query($queryProduct); 

        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['updateStokDataProduct'])){
        $db = SSP::sql_connect($dbDetails);
        $sql = "UPDATE $table SET KTP='".$_POST['KTP']."', nama='".$_POST['nama']."',no_hp='".$_POST['no_hp']."' WHERE id_produk='".$_GET['id_produk']."'";
        $result = SSP::sql_exec_update($db,null,$sql);
        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['deleteDataProduct'])){
        $db = SSP::sql_connect($dbDetails);
        $sql = "DELETE from tb_produk WHERE id_produk='".$_GET['deleteDataProduct']."'";
        $result = SSP::sql_exec_update($db,null,$sql);
        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    $columns = array(
        array( 'db' => 'id_produk',     'dt' => 0 ),
        array( 'db' => 'nama_produk',   'dt' => 1 ),
        array( 'db' => 'jenis_produk',  'dt' => 2 ),
        array( 'db' => 'jumlah_stok' ,  'dt' => 3 ),
        array( 'db' => 'satuan_produk', 'dt' => 4 ),
        array( 'db' => 'id_produk',     'dt' => 5 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );

}
else{
    header('Location: https://kingfruit.co.id/');
} 
?> 



