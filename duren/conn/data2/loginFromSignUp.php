<?php
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true); 
        $emailNomorHP = $_GET['email']; 
        $password = $_GET['password']; 
        $password = hash('ripemd160', $password);
        $userData =''; $query = "select * from tb_login_user where email='$emailNomorHP' and password='$password'"; 
        $result = mysqli_query($db,$query);
        $baris= mysqli_fetch_array($result);
        $checkPassword= $baris['password'];
        if($checkPassword == $password)
        {
            if(mysqli_num_rows($result)==1){
                $_SESSION['id_user']= $baris['id_user'];
                $_SESSION['id_status_user']= $baris['id_status_user'];
                $_SESSION['nama_lengkap']=$baris['nama_lengkap'];
                $_SESSION['foto']=$baris['foto'];
                $_SESSION['email']=$baris['email'];
                $_SESSION['id_status_user'] = $baris['id_status_user'];
                $id_status_user =  $baris['id_status_user'];
                if($id_status_user=='1'){
                    header("Location: ../../../in/accounts-duren/open-admin/");
                }
                if($id_status_user=='5'){
                    header("Location: ../../../");
                }
            }
            else{
                header("Location: ../../signup");
            }
        }
        else 
        {
            header("Location: ../../signup");
        }

?>