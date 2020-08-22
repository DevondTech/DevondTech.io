<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    if($_SESSION['id_status_user']!="1"){
        die("<script language='javascript'>alert('Anda Bukan Andmin / Manager'); document.location='../../../login'</script>");
    }
    $id_user = $_SESSION['id_user'];
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
</head>
<body class="bd-w">
<div>
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Tambah User
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                <div>
                    <form method="POST" id="createDataUser">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Username
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="username" id="username" class="input-textDataUser" placeholder="Ex : wuri123" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Lengkap
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-textDataUser" placeholder="Ex : Tri Wuri Kinanti">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    E-mail
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="mail" name="email" id="email" class="input-textDataUser" placeholder="Ex : devondtech@gmail.com">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Telp 
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="number" name="nomor_hp" id="nomor_hp" class="input-textDataUser" placeholder="Ex : 08994190773">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Password
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="password" name="password" id="password" class="input-textDataUser" placeholder="Password">
                            </div>
                        </div>
                         <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jenis Kelamin
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <select name="id_status_user" class="input-textDataUser" id="id_status_user">
                                
                                </select>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                  
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <button class="buttonLarge-green" type="button" id="btn-create-user">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>

<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->

<script src="../js/pages/createDataUser.js"></script>
</body>
</html>

