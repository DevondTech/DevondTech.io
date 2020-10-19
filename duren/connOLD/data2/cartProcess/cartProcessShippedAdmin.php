<?php

    require( '../../ssp.class.php' );
    require( '../configTwo.php' );
    
    $table = 'view_pemesanan_konfirmasi_pengiriman_admin';
    $primaryKey = 'kode_pemesanan';

    $columns = array(
        array( 'db' => 'kode_pemesanan',     'dt' => 0 ),
        array( 'db' => 'tanggal_transfer',      'dt' => 1 ),
        array( 'db' => 'nama_lengkap',  'dt' => 2 ),
        array( 'db' => 'kode_pemesanan',  'dt' => 3 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
    
?> 

