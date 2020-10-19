
<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    $nama_lengkap =  $_SESSION['nama_lengkap'];
 
    $table = <<<EOT
     (
        SELECT 
          view_data_retur_all.nama_lengkap,
          view_data_retur_all.kode_retur, 
          view_data_retur_all.status_retur,
          view_data_retur_all.id_retur
        FROM table view_data_retur_all 
     ) temp
    EOT;

    $primaryKey = 'id_retur';

    $columns = array(
       array( 'db' => 'kode_retur',          'dt' => 0 ),
       array( 'db' => 'waktu_retur',            'dt' => 1 ),
       array( 'db' => 'status_retur',               'dt' => 2 ),
       array( 'db' => 'id_retur',                       'dt' => 3 )
    );

    $sql_details = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_durian'
    );

    require( '../../ssp.class.php' );
    echo json_encode(
       SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );

?> 

<?php
 error_reporting(0);
?>
<?php
    session_start();
    require '../config.php'; 
    require( '../ssp/ssp.class.php' );
    $dbDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_durian'
    );
    $json = json_decode(file_get_contents('php://input'), true);
    $id_user = $_SESSION['id_user'];
    /*$query = "SELECT * FROM view_data_retur_all where id_user ='$id_user'";
    $result = $db->query($query); 
    $select = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $select=json_encode($select);*/
    //echo json_encode($select);
 
    /*$table = $select;*/
    $resultSearchData = $db->query("SELECT * FROM view_data_retur_all ");
    $selectData = $resultSearchData->fetch_object();
    $waktuRetur = $selectData->waktu_retur; 
    $statusRetur = $selectData->status_retur; 
    $idRetur = $selectData->id_retur; 
    $kodeRetur = $selectData->kode_retur;
    //$table = 'view_data_retur_all';
    /*$where = "id_user='$id_user'";*/
    $primaryKey = 'id_retur';

   /* $columns = array($kodeRetur, $waktuRetur, $statusRetur, $idRetur);*/

    $columns = array(
       array($kodeRetur => 0),
       array($waktuRetur => 1),
       array($statusRetur => 2),
       array($idRetur => 3)
    );

    
    echo json_encode($columns);

 /*   echo json_encode(
       SSP::simple( $_GET, $dbDetails, $primaryKey, $columns )
    );*/

?>
