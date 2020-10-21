<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    require( '../../ssp.class.php' );
    require( '../configTwo.php' );  
    $table = 'view_data_retur_all';
    $primaryKey = 'id_retur';
    $columns = array(
        array( 'db' => 'kode_retur',    'dt' => 0 ),
        array( 'db' => 'nama_lengkap',      'dt' => 1 ),
        array( 'db' => 'status_retur',          'dt' => 2 ),
        array( 'db' => 'id_retur',                  'dt' => 3 ),
    );
    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 