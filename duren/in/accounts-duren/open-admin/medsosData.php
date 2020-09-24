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
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
</head>
<body>

	 <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           Data Media Sosial
        </div>
    </div>

    <div class="divParent-inputDetailProductAdmin">
        <div class="paddingTop50px">
            <div class="Card-inputDataProduct PaddingProduct20TopBotom ">
                <form method="POST" id="updateFacebook" >
                    <div class="card-textDataProduct ">
                        <div class="textDataProduct">
                            Facebook
                        </div>
                    </div>
                    <div class="card-inputDataProduct">
                        <input type="text" name="PrintDetail_link_medsos_facebook" id="PrintDetail_link_medsos_facebook" class="input-textDataProduct" disabled>
                    </div>
                
                    <div class="card-buttonDataProduct">
                        <div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Facebook_EditDataDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                            </div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Facebook_SaveCancelDataDetailProductAdmin">
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Save" id="Facebook_ubahSave">
                                        <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                    </div>
                                </div>
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Cancel" id="Facebook_ubahCancel">
                                        <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>

            <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                <form method="POST" id="updateInstagram">
                    <div class="card-textDataProduct ">
                        <div class="textDataProduct">
                            Instagram
                        </div>
                    </div>
                    <div class="card-inputDataProduct">
                       <input type="text" name="PrintDetail_link_medsos_instagram" id="PrintDetail_link_medsos_instagram" class="input-textDataProduct" disabled>
                    </div>
                    <div class="card-buttonDataProduct">
                        <div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Instagram_EditDataDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                            </div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Instagram_SaveCancelDataDetailProductAdmin">
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Save" id="Instagram_ubahSave">
                                        <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                    </div>
                                </div>
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Cancel" id="Instagram_ubahCancel">
                                        <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>

            <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                <form method="POST" id="updateTwitter">
                    <div class="card-textDataProduct ">
                        <div class="textDataProduct">
                            Twitter
                        </div>
                    </div>
                    <div class="card-inputDataProduct">
                        <input type="text" name="PrintDetail_link_medsos_twitter" id="PrintDetail_link_medsos_twitter" class="input-textDataProduct" disabled>
                    </div>
                    <div class="card-buttonDataProduct">
                        <div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Twitter_EditDataDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                            </div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Twitter_SaveCancelDataDetailProductAdmin">
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Save" id="Twitter_ubahSave">
                                        <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                    </div>
                                </div>
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Cancel" id="Twitter_ubahCancel">
                                        <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>

            <div class="Card-inputDataProduct PaddingProduct20TopBotom">
                <form method="POST" id="updateWhatsapp">
                    <div class="card-textDataProduct ">
                        <div class="textDataProduct">
                            WhatsAPP
                        </div>
                    </div>
                    <div class="card-inputDataProduct">
                        <input type="text" name="PrintDetail_link_medsos_whatsapp" id="PrintDetail_link_medsos_whatsapp" class="input-textDataProduct" disabled>
                    </div>
                    <div class="card-buttonDataProduct">
                        <div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Whatsapp_EditDataDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                            </div>
                            <div class="div-button-EditDataDetailProductAdmin" id="Whatsapp_SaveCancelDataDetailProductAdmin">
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Save" id="Whatsapp_ubahSave">
                                        <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                    </div>
                                </div>
                                <div class="div-imageSaveCancel30">
                                    <div class="buttonTypeDiv-Cancel" id="Whatsapp_ubahCancel">
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

    
     <!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/pages/admin/medsosDataAdmin.js"></script>
</body>

</html>