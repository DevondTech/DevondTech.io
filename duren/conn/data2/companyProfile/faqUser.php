<?php

        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * from tb_fa_data ";
        $result = $db->query($query); 

        $selectData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectData=json_encode($selectData);
        echo $selectData;
 
?>