<?php

    require( '../../ssp.class.php' );
    require( '../configTwo.php' );
    
    $table = 'view_pengajuan_retur_produk';
    $primaryKey = 'id_retur';

    $columns = array(
        array( 'db' => 'kode_retur',    'dt' => 0 ),
        array( 'db' => 'nama_lengkap',      'dt' => 1 ),
        array( 'db' => 'nomor_hp',              'dt' => 2 ),
        array( 'db' => 'id_retur',                  'dt' => 3 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
    
?> 