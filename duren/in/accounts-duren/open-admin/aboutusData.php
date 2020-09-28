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
<title></title>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<!-- css datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.0.1" rel="stylesheet" />
</head>
<body>
    <div class="divPositionContentTop">
    	<div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
               Tentang Kami 
            </div>
        </div>

        <div class="divParent-inputDetailProductAdmin">
            <div class="paddingTop50px">
                <div class="Card-inputDataProduct PaddingProduct20TopBotom ">
                    <form method="POST" id="updateAlamat" >
                        <div class="card-textDataProduct ">
                            <div class="textDataProduct">
                                Alamat
                            </div>
                        </div>
                        <div class="card-inputDataProduct">
                            <input type="text" name="PrintDetail_link_alamat" id="PrintDetail_link_alamat" class="input-textDataProduct" disabled>
                        </div>
                    
                        <div class="card-buttonDataProduct">
                            <div>
                                <div class="div-button-EditDataDetailProductAdmin" id="alamat_EditDataDetailProductAdmin">
                                    <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                                </div>
                                <div class="div-button-EditDataDetailProductAdmin" id="alamat_SaveCancelDataDetailProductAdmin">
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Save" id="alamat_ubahSave">
                                            <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                        </div>
                                    </div>
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Cancel" id="alamat_ubahCancel">
                                            <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>

                <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                    <form method="POST" id="updateNomorHP1">
                        <div class="card-textDataProduct ">
                            <div class="textDataProduct">
                                Nomor HP 1
                            </div>
                        </div>
                        <div class="card-inputDataProduct">
                           <input type="text" name="PrintDetail_link_nomor_hp1" id="PrintDetail_link_nomor_hp1" class="input-textDataProduct" disabled>
                        </div>
                        <div class="card-buttonDataProduct">
                            <div>
                                <div class="div-button-EditDataDetailProductAdmin" id="nomor_hp1_EditDataDetailProductAdmin">
                                    <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                                </div>
                                <div class="div-button-EditDataDetailProductAdmin" id="nomor_hp1_SaveCancelDataDetailProductAdmin">
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Save" id="nomor_hp1_ubahSave">
                                            <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                        </div>
                                    </div>
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Cancel" id="nomor_hp1_ubahCancel">
                                            <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>

                <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                    <form method="POST" id="updateNomorHP2">
                        <div class="card-textDataProduct ">
                            <div class="textDataProduct">
                                Nomor HP 2
                            </div>
                        </div>
                        <div class="card-inputDataProduct">
                            <input type="text" name="PrintDetail_link_nomor_hp2" id="PrintDetail_link_nomor_hp2" class="input-textDataProduct" disabled>
                        </div>
                        <div class="card-buttonDataProduct">
                            <div>
                                <div class="div-button-EditDataDetailProductAdmin" id="nomor_hp2_EditDataDetailProductAdmin">
                                    <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                                </div>
                                <div class="div-button-EditDataDetailProductAdmin" id="nomor_hp2_SaveCancelDataDetailProductAdmin">
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Save" id="nomor_hp2_ubahSave">
                                            <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                        </div>
                                    </div>
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Cancel" id="nomor_hp2_ubahCancel">
                                            <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>

                <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                    <form method="POST" id="updateEmail">
                        <div class="card-textDataProduct ">
                            <div class="textDataProduct">
                                E-mail
                            </div>
                        </div>
                        <div class="card-inputDataProduct">
                            <input type="text" name="PrintDetail_link_email" id="PrintDetail_link_email" class="input-textDataProduct" disabled>
                        </div>
                        <div class="card-buttonDataProduct">
                            <div>
                                <div class="div-button-EditDataDetailProductAdmin" id="email_EditDataDetailProductAdmin">
                                    <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                                </div>
                                <div class="div-button-EditDataDetailProductAdmin" id="email_SaveCancelDataDetailProductAdmin">
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Save" id="email_ubahSave">
                                            <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                        </div>
                                    </div>
                                    <div class="div-imageSaveCancel30">
                                        <div class="buttonTypeDiv-Cancel" id="email_ubahCancel">
                                            <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
     <!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/pages/admin/aboutusDataAdmin.js"></script>
</body>

</html>