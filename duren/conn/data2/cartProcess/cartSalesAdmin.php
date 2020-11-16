<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    require( '../ssp/ssp.class.php' );
    require( '../configTwo.php' );
    $table = 'view_data_penjualan';
    $where = ' kode_penjualan = DR01';
    $primaryKey = 'kode_penjualan';
    $columns = array(
        array( 'db' => 'kode_penjualan',    'dt' => 0 ),
        array( 'db' => 'waktu_penjualan',       'dt' => 1 ),
        array( 'db' => 'nama_lengkap',              'dt' => 2 ),
        array( 'db' => 'kode_penjualan',                'dt' => 3 ),
    );
    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns, $where )
    );
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 



