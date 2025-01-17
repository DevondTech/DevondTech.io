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
            Ubah Profile
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            
            <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                <div>
                    <div>
                       <img id="fotoOnProfile"  class="lazy center-img-drp-dwProfile" accept="image/x-png,image/jpeg" />
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
                        <!-- <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Username
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="usernameUpdate" id="usernameUpdate" class="input-textDataUser" placeholder="Ex : wuri123" >
                            </div>
                        </div> -->
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Lengkap
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="nama_lengkapUpdate" id="nama_lengkapUpdate" class="input-textDataUser" placeholder="Ex : Tri Wuri Kinanti">
                            </div>
                        </div>
                       <!--  <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    E-mail
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="mail" name="emailUpdate" id="emailUpdate" class="input-textDataUser" placeholder="Ex : devondtech@gmail.com">
                            </div>
                        </div> -->
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Telp 
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="number" name="nomor_hpUpdate" id="nomor_hpUpdate" class="input-textDataUser" placeholder="Ex : 08994190773">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jenis Kelamin
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <select name="id_jenis_kelaminUpdate" class="input-textDataUser" id="id_jenis_kelaminUpdate">
                                  <option value="1">Pria</option>
                                  <option value="2">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Tanggal Lahir
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="date" name="tanggal_lahirUpdate" id="tanggal_lahirUpdate" class="input-textDataUser" placeholder="">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Alamat
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="alamatUpdate" id="alamatUpdate" class="input-textDataUser" placeholder="Ex : JL. Jend Sudirman Gang Mawar No 505 ">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Negara
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="negaraUpdate" id="negaraUpdate" class="input-textDataUser" placeholder="Ex : Indonesia">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Provinsi
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="provinsiUpdate" id="provinsiUpdate" class="input-textDataUser" placeholder="Ex : Jawa Barat ">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kabupaten
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="kabupatenUpdate"  id="kabupatenUpdate" class="input-textDataUser" placeholder="Ex : Depok">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kota
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <select name="kotaUpdate" class="input-textDataUser" id="kotaUpdate" style="padding-left: inherit;">
                                </select>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kecamatan
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="kecamatanUpdate" id="kecamatanUpdate" class="input-textDataUser" placeholder="Ex : Sawangan">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kelurahan
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="kelurahanUpdate"  id="kelurahanUpdate" class="input-textDataUser" placeholder="Ex : Kedaung">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kode Pos
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="number" name="kode_posUpdate" id="kode_posUpdate" class="input-textDataUser" placeholder="Ex : 61523">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                  
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <button class="buttonLarge-green" type="button" id="btnUpdateDataUser">SIMPAN</button>
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
<script type="text/javascript" src="../js/pages/updateDataFoto.js"></script>
<script src="../js/pages/editDataTampil.js?v=1.1.4"></script>
<script src="../js/pages/editData.js?v=1.1.4"></script>

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

