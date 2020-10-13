<?php

    require( '../../ssp.class.php' );
    require( '../configTwo.php' );

    $table = 'view_data_penjualan';
    $primaryKey = 'kode_penjualan';

    $columns = array(
        array( 'db' => 'kode_penjualan',    'dt' => 0 ),
        array( 'db' => 'username',              'dt' => 1 ),
        array( 'db' => 'nama_lengkap',              'dt' => 2 ),
        array( 'db' => 'kode_penjualan',                'dt' => 3 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
    
?> 



