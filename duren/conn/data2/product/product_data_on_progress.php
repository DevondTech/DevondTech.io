<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    require( '../../ssp.class.php' );
    require( '../configTwo.php' ); 
    $table = 'view_detail_data_produk_dalam_proses';
    $primaryKey = 'id_produk_dalam_proses';
    $columns = array(
        array( 'db' => 'id_produk_dalam_proses',     'dt' => 0 ),
        array( 'db' => 'nama_produk',                   'dt' => 1 ),
        array( 'db' => 'status_produk_dalam_proses',        'dt' => 2 ),
        array( 'db' => 'jumlah_pemesanan' ,                     'dt' => 3 ),
        array( 'db' => 'satuan_produk' ,                            'dt' => 4),
    );
    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
}
else{
    header('Location: https://kingfruit.co.id/');
} 
?> 



