<?php

    require( '../../ssp.class.php' );
    $dbDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_durian'
    );
    $table = 'view_pemesanan_barang_dikirim';
    $primaryKey = 'kode_pemesanan';

    $columns = array(
        array( 'db' => 'kode_pemesanan',     'dt' => 0 ),
        array( 'db' => 'nama_lengkap',      'dt' => 1 ),
        array( 'db' => 'proses_pemesanan',  'dt' => 2 ),
        array( 'db' => 'kode_pemesanan',  'dt' => 3 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
    
?> 



