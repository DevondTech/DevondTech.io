<?php
	
	if(isset($_GET['selectDataLocationCity'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_kota";
        $result = $db->query($query); 
        $selectDataLocationCity = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectDataLocationCity=json_encode($selectDataLocationCity);
        echo json_encode($selectDataLocationCity);
    }
	
?>