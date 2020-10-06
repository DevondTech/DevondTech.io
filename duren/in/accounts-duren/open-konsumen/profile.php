<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    if($_SESSION['id_status_user']!="5"){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
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
            Profile Saya
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            
            <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                <div>
                    <div>
                         <img id="fotoOnProfile" class="lazy center-img-drp-dwProfile" accept="image/x-png,image/jpeg"  />
                    </div>
                    <div class="card-buttonSelectPic">
                        <div class="margin-auto">
                            <button data-toggle="modal"   class="buttonLarge-grey" data-target="#open-updateFoto" id="updateFoto"  >Pilih Gambar</button>
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
                                    Nama Lengkap :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name=""  style="color: #737373" id="dataNamaLengkap" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    E-mail :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="mail" name="" style="color: #737373" id="dataEmail" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Telp  :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="number" name="" style="color: #737373" id="dataNomorHP" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jenis Kelamin :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name=""  style="color: #737373" id="dataJenisKelamin" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Tanggal Lahir :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="date" name="" style="color: #737373" id="dataTanggalLahir" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Alamat :
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <textarea style="color: #737373;height: auto;" id="dataAlamat" class="input-textDataUser-false" disabled></textarea>
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

<script src="../js/pages/Profile.js?v=1.1.6"></script>
<script type="text/javascript" src="../js/pages/updateDataFoto.js?v=1.1.6"></script>
<div id="open-updateFoto" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Update Foto Profile</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Profil
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnUpdateFoto"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

