<?php

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
    
?> 



