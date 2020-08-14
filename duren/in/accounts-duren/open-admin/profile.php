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
            Profile Saya
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            
            <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
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
            </div>
            <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                <div>
                    <form method="POST" id="updateDataUser">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Username :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="" class="input-textDataUser-false" placeholder="wuri123" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Lengkap :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="Tri Wuri Kinanti" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    E-mail :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="mail" name="" class="input-textDataUser-false" placeholder="devondtech@gmail.com" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Telp  :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="number" name="" class="input-textDataUser-false" placeholder=" 08994190773" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jenis Kelamin :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name=""  class="input-textDataUser-false" placeholder="Wanita" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Tanggal Lahir :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="18 November 1996" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Alamat :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <textarea style="color: #737373" class="input-textDataUser-false" disabled>JL. Jend Sudirman Gang Mawar No 505</textarea>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Negara :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="Indonesia" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Provinsi :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="Jawa Barat" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kabupaten :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="Depok" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kota :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false"> 
                                <input type="text" name=""  class="input-textDataUser-false" placeholder="Depok" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kode Pos :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="number" name=""  class="input-textDataUser-false" placeholder="61523" disabled>
                            </div>
                        </div>
                        <!-- <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                  
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <button class="buttonLarge-green" type="button" id="SaveDataUser">SIMPAN</button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Scrol -->
<script src="../css/scroll/js/scroll.js"></script>
</body>
</html>

