<?php

    require( '../../ssp.class.php' );
    $dbDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_durian'
    );
    $table = 'view_data_all_user';
    $primaryKey = 'id_user';

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

    if(isset($_GET['deleteDataUser'])){
        $db = SSP::sql_connect($dbDetails);
        $sql = "DELETE from tb_login_user WHERE id_user='".$_GET['deleteDataUser']."'";
        $result = SSP::sql_exec_update($db,null,$sql);
        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    $columns = array(
        array( 'db' => 'id_user',       'dt' => 0 ),
        array( 'db' => 'username',      'dt' => 1 ),
        array( 'db' => 'nama_lengkap',  'dt' => 2 ),
        array( 'db' => 'email' ,        'dt' => 3 ),
        array( 'db' => 'status_user',   'dt' => 4 ),
        array( 'db' => 'id_user',       'dt' => 5 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
    
?> 



