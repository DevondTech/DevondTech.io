<?php 

    if(isset($_GET['login'])){
        
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true); 
        $username = $_POST['username']; 
    	$password = $_POST['password']; 
        $password = hash('ripemd160', $password);
        $userData =''; $query = "select * from tb_login_user where username='$username' and password='$password'"; 
        $result= $db->query($query);
        $rowCount=$result->num_rows;
        if($rowCount>=1)
        {  
            session_start();
    		$userData = $result->fetch_object();
            $id_user=$userData->id_user;
            $username=$userData->username;
            $id_status_user=$userData->id_status_user;
            
            $_SESSION['id_user'] = $userData->id_user;
            $_SESSION['id_status_user'] = $id_status_user;
            $_SESSION['username'] = $userData->username;
            $_SESSION['nama_lengkap'] = $userData->nama_lengkap;
            $_SESSION['foto'] = $userData->foto;
            $_SESSION['email'] = $userData->email;
            
            if($id_status_user=='1'){
                echo "KodeSign1";
            }
            if($id_status_user=='5'){
                echo "KodeSign2";
            }
        }
        else 
        {
        	echo '{"error":"Wrong username and password"} <br />';
            echo 'Username : ('. json_encode( $username ) .') <br />';
            echo 'Password : ('. json_encode( $password ) .') <br />';
        }
    }

    if(isset($_GET['signup'])){
    	require 'config.php';
    	$json = json_decode(file_get_contents('php://input'), true);
    	$username = $_POST['username'];
    	$password = $_POST['password'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nomor_hp = $_POST['nomor_hp'];
    	$password = hash('ripemd160', $password);
    	$email = $_POST['email'];
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_mendaftar = date('Y-m-d H:i:s');
        $id_status_user = '5';
        $email_check = preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/i', $email);
        $password_check = preg_match('/^[A-Za-z0-9!@#$%^&*()_]{4,20}$/i', $password);
        if($email_check==0)
        {
            echo 'emailCheck';
        }
        else{
            if(strlen(trim($email))>0 && $email_check>0 ){
                $userData = '';
                $result = $db->query("select * from tb_login_user where username='$username' or email='$email'");
                $rowCount=$result->num_rows;
                if($rowCount==0)
                {           
                    $query = "INSERT INTO tb_login_user(tanggal_mendaftar,username,nama_lengkap,email,nomor_hp,password,id_status_user)
                                VALUES('$tanggal_mendaftar','$username','$nama_lengkap','$email','$nomor_hp','$password','$id_status_user')";   
                     $result = $db->query($query);       
                     echo "Success"; 
                }
                else{
                   echo 'userCheck';
                }
            }
            else
            {
                echo 'kode3';
            }         
        }
    }

    function feed(){
        
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $user_id=$json['user_id'];
        $query = "SELECT * FROM feed WHERE user_id=$user_id ";
        $result = $db->query($query); 
        $feedData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $feedData=json_encode($feedData);
        echo '{"feedData":'.$feedData.'}';
    }

    function feedInsert(){
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $user_id=$json['user_id'];
        $feed=$json['feed'];
        $feedData = '';
        if($feed !='')
        {
            $query = "INSERT INTO feed ( feed, user_id) VALUES ('$feed','$user_id')";
            $db->query($query);              
        }
        $query = "SELECT * FROM feed WHERE user_id=$user_id";
        $result = $db->query($query); 
        $feedData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $feedData=json_encode($feedData);
        echo '{"feedData":'.$feedData.'}';
    }

    function feedDelete(){
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $user_id=$json['user_id'];
        $feed_id=$json['feed_id'];
        $query = "Delete FROM feed WHERE user_id=$user_id AND feed_id=$feed_id";
        $result = $db->query($query);
        if($result)       
        {        
            echo '{"success":"Feed deleted"}';
        } else{

            echo '{"error":"Delete error"}';
        }
    }


    function feedEdit(){
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $feed_id=$json['feed_id'];
        $query = "SELECT * FROM feed where feed_id = $feed_id";
        $result = $db->query($query); 
        $feedData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $feedData=json_encode($feedData);
        echo '{"feedData":'.$feedData.'}';
    }

    function feedUpdate(){
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $feed_id=$json['feed_id'];
        $feed=$json['feed'];
        if($feed !='')
        {
        $query = "UPDATE feed SET feed='$feed' WHERE feed_id = $feed_id";
        $db->query($query);   
        }
        $query = "SELECT * FROM feed WHERE feed_id = $feed_id ";
        $result = $db->query($query); 
        $feedData = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $feedData=json_encode($feedData);
        echo '{"feedData":'.$feedData.'}';
    }

?>