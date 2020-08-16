<?php 

    if(isset($_GET['callUserDatas'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $query = "SELECT * FROM view_data_all_user where id_user = '$id_user' ";
        $result = $db->query($query); 

        $callUserData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callUserData=json_encode($callUserData);
        echo '{'.$callUserData.'}';

        $dataUserCallBack = $callUserData;
    }


/*    if(isset($_GET['callUserDatas'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $query = "SELECT * FROM view_data_all_user where id_user = '$id_user' ";
        $result = $db->query($query); 
        $userData = $result->fetch_object();
        $id_user=$userData->id_user;
        $username=$userData->username;
        $id_status_user=$userData->id_status_user;
    }
*/
    
?>