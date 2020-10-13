<?php

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
        $sql = "INSERT INTO tb_produk(nama_produk, detail1_produk, detail2_produk, id_jenis_produk, id_satuan_produk, jumlah_stok)
                        VALUES('$nama_produk','$detail1_produk','$detail2_produk','$id_jenis_produk','$id_satuan_produk', '$jumlah_stok')";   
        $result = SSP::sql_exec_update($db,null,$sql);
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
    
?> 



