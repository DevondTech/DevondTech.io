<?php 

    session_start();

    /*Login option action */

   /* if(isset($_GET['login'])){
        
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
    }*/


if(isset($_GET['login'])){
    
    require 'config.php'; 
    $json = json_decode(file_get_contents('php://input'), true); 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $password = hash('ripemd160', $password);
    $userData =''; $query = "select * from tb_login_user where username='$username' and password='$password'"; 
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1)
    {


        $baris= mysqli_fetch_array($result);

        
        $_SESSION['id_user']= $baris['id_user'];
        $_SESSION['id_status_user']= $baris['id_status_user'];
        $_SESSION['username']=$baris['username'];
        $_SESSION['nama_lengkap']=$baris['nama_lengkap'];
        $_SESSION['foto']=$baris['foto'];
        $_SESSION['email']=$baris['email'];
        
        $id_status_user =  $baris['id_status_user'];
        
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


 if(isset($_GET['Datalogin'])){
    
    require 'config.php'; 
    $json = json_decode(file_get_contents('php://input'), true); 
    $username = $_POST['id_user']; 
    $password = hash('ripemd160', $password);
    $userData =''; $query = "select * from tb_login_user where id_user='$id_user'"; 
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1)
    {

        $baris= mysqli_fetch_array($result);

        $_SESSION['id_user']= $baris['id_user'];
        $_SESSION['id_status_user']= $baris['id_status_user'];
        $_SESSION['username']=$baris['username'];
        $_SESSION['nama_lengkap']=$baris['nama_lengkap'];
        $_SESSION['foto']=$baris['foto'];
        $_SESSION['email']=$baris['email'];
        
        $id_status_user =  $baris['id_status_user'];
        
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



/*Signup option action*/

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
            $resultLastID = $db->query("select max(id_user) as last_data FROM tb_login_user");
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


/*Update password option action*/

if(isset($_GET['updatePassword'])){
    require 'config.php'; 
    $json = json_decode(file_get_contents('php://input'), true);
    $id_user = $_SESSION['id_user'];
    $passwordUpdate = $_POST['passwordUpdate']; 
    $passwordUpdate = hash('ripemd160', $passwordUpdate);
    if($passwordUpdate !='')
    {
    $query = "UPDATE tb_login_user SET password='$passwordUpdate' WHERE id_user = $id_user";
    $db->query($query);
    echo "updatePassword";   
    }
}



/*Update profile option action*/



 if(isset($_GET['updataUserProfile'])){
    require 'config.php'; 
    $json = json_decode(file_get_contents('php://input'), true);
    $id_user = $_SESSION['id_user'];
    $nama_lengkapUpdate = $_POST['nama_lengkapUpdate']; 
    $nomor_hpUpdate = $_POST['nomor_hpUpdate']; 
    $tanggal_lahirUpdate = $_POST['tanggal_lahirUpdate']; 
    $id_jenis_kelaminUpdate = $_POST['id_jenis_kelaminUpdate']; 
    $alamatUpdate = $_POST['alamatUpdate']; 
    $negaraUpdate = $_POST['negaraUpdate']; 
    $provinsiUpdate = $_POST['provinsiUpdate']; 
    $kabupatenUpdate = $_POST['kabupatenUpdate']; 
    $kotaUpdate = $_POST['kotaUpdate']; 
    $kode_posUpdate = $_POST['kode_posUpdate']; 

        if($nama_lengkapUpdate!=''){
            $queryUpdateTBLoginUser = "UPDATE tb_login_user SET nama_lengkap='$nama_lengkapUpdate', nomor_hp='$nomor_hpUpdate' WHERE id_user = $id_user";
            $db->query($queryUpdateTBLoginUser);

            $queryUpdateTBDataUser = "UPDATE tb_data_user SET id_jenis_kelamin='$id_jenis_kelaminUpdate', tanggal_lahir='$tanggal_lahirUpdate', alamat='$alamatUpdate', negara='$negaraUpdate', provinsi='$provinsiUpdate', kabupaten='$kabupatenUpdate', kota='$kotaUpdate', kode_pos='$kode_posUpdate' WHERE id_user = $id_user";
            $db->query($queryUpdateTBDataUser);

            echo "updataUserProfile";   
        }
        else{
            echo "erorDATA";
        }
    
}

/*
if(isset($_GET['updataUserProfile'])){
    require 'config.php'; 
    $json = json_decode(file_get_contents('php://input'), true);
    $id_user = $_SESSION['id_user'];
    $emailUpdate = $_POST['emailUpdate']; 
    $usernameUpdate = $_POST['usernameUpdate']; 
    $nama_lengkapUpdate = $_POST['nama_lengkapUpdate']; 
    $nomor_hpUpdate = $_POST['nomor_hpUpdate']; 

    $tanggal_lahirUpdate = $_POST['tanggal_lahirUpdate']; 
    $id_jenis_kelaminUpdate = $_POST['id_jenis_kelaminUpdate']; 
    $alamatUpdate = $_POST['alamatUpdate']; 
    $negaraUpdate = $_POST['negaraUpdate']; 
    $provinsiUpdate = $_POST['provinsiUpdate']; 
    $kabupatenUpdate = $_POST['kabupatenUpdate']; 
    $kotaUpdate = $_POST['kotaUpdate']; 
    $kode_posUpdate = $_POST['kode_posUpdate']; 

    $result = $db->query("select * from tb_login_user where username='$usernameUpdate' or email='$emailUpdate'");
    $rowCount=$result->num_rows;
    $email_check = preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/i', $emailUpdate);
    if($email_check==0)
    {
        echo 'emailCheck';
    }
    else 
    {
        if($rowCount==0){
            $queryUpdateTBLoginUser = "UPDATE tb_login_user SET username='$usernameUpdate', nama_lengkap='$nama_lengkapUpdate', email='$emailUpdate', nomor_hp='$nomor_hpUpdate' WHERE id_user = $id_user";
            $db->query($queryUpdateTBLoginUser);

            $queryUpdateTBDataUser = "UPDATE tb_data_user SET id_jenis_kelamin='$id_jenis_kelaminUpdate', tanggal_lahir='$tanggal_lahirUpdate', alamat='$alamatUpdate', negara='$negaraUpdate', provinsi='$provinsiUpdate', kabupaten='$kabupatenUpdate', kota='$kotaUpdate', kode_pos='$kode_posUpdate' WHERE id_user = $id_user";
            $db->query($queryUpdateTBDataUser);

            echo "updataUserProfile";   
        }
        else{
            echo "eror404";
        }
    }
}*/

?>