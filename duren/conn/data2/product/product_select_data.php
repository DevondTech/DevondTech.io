<?php	

	if(isset($_GET['callIDProduct'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM tb_produk";
        $result = $db->query($query); 

        $callIDProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDProduct=json_encode($callIDProduct);
        echo json_encode($callIDProduct);
    }

    if(isset($_GET['select'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_produk where id_produk ='".$_GET['select']."'";
        $result = $db->query($query); 

        $select = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $select=json_encode($select);
        echo json_encode($select);
    }
    
?>
