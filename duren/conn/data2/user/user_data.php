<?php
    require( '../../ssp.class.php' );
    $dbDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_durian'
    );
    $table = 'view_data_all_user';
    $primaryKey = 'id_user';
/*
    if(isset($_GET['createDataUser'])){
        $db = SSP::sql_connect($dbDetails);
       
        date_default_timezone_set('Asia/Jakarta'); 
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
                $resultLastID = $db->query("select max(id_user) as last_data FROM tb_login_user");
                $userDataLastID = $resultLastID->fetch_object();
                $id_userLast=$userDataLastID->last_data;
                $id_userLastPut = $id_userLast + 1;
                $result = $db->query("select * from tb_login_user where username='$username' or email='$email'");
                $rowCount=$result->num_rows;
                if($rowCount==0)
                {           
                    $sql1 = "INSERT INTO tb_login_user(tanggal_mendaftar,username,nama_lengkap,email,nomor_hp,password,id_status_user)
                                VALUES('$tanggal_mendaftar','$username','$nama_lengkap','$email','$nomor_hp','$password','$id_status_user')";   
                    $result1 = SSP::sql_exec_update($db,null,$sql1);   
                    $sql2 = "INSERT INTO tb_data_user(id_user)
                                VALUES('$id_userLastPut')";   
                    $result2 = SSP::sql_exec_update($db,null,$sql2); 
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
    }*/

    if(isset($_GET['updateStokDataProduct'])){
        $db = SSP::sql_connect($dbDetails);
        $sql = "UPDATE $table SET KTP='".$_POST['KTP']."', nama='".$_POST['nama']."',no_hp='".$_POST['no_hp']."' WHERE id_produk='".$_GET['id_produk']."'";
        $result = SSP::sql_exec_update($db,null,$sql);
        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    if(isset($_GET['deleteDataProduct'])){
        $db = SSP::sql_connect($dbDetails);
        $sql = "DELETE from tb_produk WHERE id_produk='".$_GET['deleteDataProduct']."'";
        $result = SSP::sql_exec_update($db,null,$sql);
        //var_dump($sql);die;
        header("Content-Type: application/json");
        if($result){
            echo json_encode(array("success"=>true));exit;
        }else{
            echo json_encode(array("errror"=>true));exit;
        }
    }

    $columns = array(
        array( 'db' => 'id_user',     'dt' => 0 ),
        array( 'db' => 'username',   'dt' => 1 ),
        array( 'db' => 'nama_lengkap',  'dt' => 2 ),
        array( 'db' => 'email' ,  'dt' => 3 ),
        array( 'db' => 'status_user', 'dt' => 4 ),
        array( 'db' => 'id_user',     'dt' => 5 ),
    );

    echo json_encode(
        SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
    );
?> 



