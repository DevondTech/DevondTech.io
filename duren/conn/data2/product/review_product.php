<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_status_user = $_SESSION['id_status_user'];
    if($id_user!='' && $id_status_user=='1'){    
        require( '../../ssp.class.php' );
        require( '../configTwo.php' );  
        $table = 'view_data_penilaian_produk';
        $primaryKey = 'id_penilaian_produk';
        $columns = array(
            array( 'db' => 'tanggal_penilaian_produk',    'dt' => 0 ),
            array( 'db' => 'nama_lengkap',                      'dt' => 1 ),
            array( 'db' => 'komentar',                                  'dt' => 2 ),
            array( 'db' => 'id_penilaian_produk',                                'dt' => 3 ),
        );
        echo json_encode(
            SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
        );
    }
    else{
        header('Location: https://kingfruit.co.id/');
    }    
?> 
