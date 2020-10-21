<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    require( '../../ssp.class.php' );
    require( '../configTwo.php' );
    
    $table = 'view_data_pemesanan_selesai';
    $primaryKey = 'kode_pemesanan';

    $columns = array(
        array( 'db' => 'kode_pemesanan',     'dt' => 0 ),
        array( 'db' => 'nama_lengkap',          'dt' => 1 ),
        array( 'db' => 'alamat',          'dt' => 2 ),
        array( 'db' => 'kode_pemesanan',                'dt' => 3 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 



