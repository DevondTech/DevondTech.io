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
        echo json_encode($callUserData);
    }

    if(isset($_GET['callDetailUserDatas'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $query = "SELECT id_user, nama_lengkap, foto, nomor_hp, id_jenis_kelamin, jenis_kelamin, tanggal_lahir, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos FROM view_data_all_user where id_user = '$id_user' ";
        $result = $db->query($query); 

        $callDetailUserDatas = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callDetailUserDatas=json_encode($callDetailUserDatas);
        echo json_encode($callDetailUserDatas);
    }

    if(isset($_GET['callIDStatusUser'])){
        session_start();
        require 'config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_status_user";
        $result = $db->query($query); 

        $callIDStatusUser = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $callIDStatusUser=json_encode($callIDStatusUser);
        echo json_encode($callIDStatusUser);
    }

    if(isset($_GET['createDataUser'])){
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
        $id_status_user = $_POST['id_status_user'];
        $email_check = preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/i', $email);
        $password_check = preg_match('/^[A-Za-z0-9!@#$%^&*()_]{4,20}$/i', $password);
        if($email_check==0)
        {
            echo 'emailCheck';
        }
        else{
            if(strlen(trim($email))>0 && $email_check>0 ){
                $userData = '';
                $resultLastID = $db->query("select max(id_data_user) as last_data FROM tb_data_user");
                $userDataLastID = $resultLastID->fetch_object();
                $id_userLast=$userDataLastID->last_data;
                $id_userLastPut = $id_userLast + 1;
                $result = $db->query("select * from tb_login_user where username='$username' or email='$email'");
                $rowCount=$result->num_rows;
                if($rowCount==0)
                {           
                    $query = "INSERT INTO tb_login_user(tanggal_mendaftar,username,nama_lengkap,email,nomor_hp,password,id_status_user)
                                VALUES('$tanggal_mendaftar','$username','$nama_lengkap','$email','$nomor_hp','$password','$id_status_user')";   
                    $result = $db->query($query);    
                    $query = "INSERT INTO tb_data_user(id_user)
                                VALUES('$id_userLastPut')";   
                    $db->query($query);       
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

    if(isset($_GET['updateDataFoto'])){
        session_start();
        require 'config.php';
        $json = json_decode(file_get_contents('php://input'), true);

        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/user/';
        $fileFolderSave = '../../in/accounts-duren/images/user/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_login_user SET foto='$fileFolder$datePic$id_user$foto' WHERE id_user = $id_user";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo "Success";   
        }
        else{
            echo "dataCheck";
        }
    }

?>