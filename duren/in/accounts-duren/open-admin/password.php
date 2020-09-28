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
<div class="divPositionContentTop">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Ubah Password
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            
            <!-- <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                <div>
                    <div>
                        <img width="90%" data-src="../images/user.jpg"  src="../images/blank.jpg" class="lazy center-img-drp-dw2"  />
                    </div>
                    <div class="card-buttonSelectPic">
                        <div class="margin-auto">
                            <button class="buttonLarge-grey" >Pilih Gambar</button>
                        </div>
                    </div>
                     <div class="">  
                        <div class="margin-auto">
                            <div class="text-buttonSelectPic">
                                Ukuran Gambar Maks. 1MB, Format Gambar: .JPG, .PNG 
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                <div>
                    <form method="POST" id="updatePassword">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Password
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="password" name="passwordUpdate" id="passwordUpdate" class="input-textDataUser" placeholder="New Password" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Repeat Password
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="password" name="passwordUpdate_re" id="passwordUpdate_re" class="input-textDataUser" placeholder="Repeat New Password">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                  
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <button class="buttonLarge-green" type="button" id="SavePassword">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script src="../js/pages/password.js"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>

