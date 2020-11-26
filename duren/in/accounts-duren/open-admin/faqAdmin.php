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
<style type="text/css">
    .paddingTop100px{
        padding-top: 50px;
        padding-bottom: 100px;
    }

    .textArea-textDataProduct {
        width: 100%;
        height: 500px;
        color: #000;
        padding-left: 5px;
        padding-right: 5px;
        border: 1px solid #969191;
        border-radius: 3px;
        padding-bottom: 5px;
        resize: none;
    }

    @media (max-width: 870px){
        .textArea-textDataProduct {
            width: 100%;
            height: 500px;
            color: #000;
            padding-left: 5px;
            padding-right: 5px;
            border: 1px solid #969191;
            border-radius: 3px;
            padding-bottom: 5px;
            resize: none;
        }
    }
</style>
</head>
<body>
<div class="divPositionContentTop">
	 <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           FAQ Detail Data
        </div>
    </div>
    <form method="POST" id="updateFAQ">
        <div class="card-buttonDataProduct">
            <div class="paddingTop50px">
                <div class="div-button-EditDataDetailProductAdmin" id="faq_EditDataDetailProductAdmin">
                    <button class="buttonMiddle-green" type="button">Ubah</button>  
                </div>
                <div class="div-button-EditDataDetailProductAdmin" id="faq_SaveCancelDataDetailProductAdmin">
                    <div class="div-imageSaveCancel30">
                        <div class="buttonTypeDiv-Save" id="faq_ubahSave">
                            <img class="img-buttonTypeDiv" src="../images/button/save.png">
                        </div>
                    </div>
                    <div class="div-imageSaveCancel30">
                        <div class="buttonTypeDiv-Cancel" id="faq_ubahCancel">
                            <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="divParent-inputDetailProductAdmin">
            <div class="paddingTop100px">
                <div class="paddingTop100px card-inputDataProduct" style="width: 100%;">
                    <textarea name="PrintDetail_faq" id="PrintDetail_faq" style="padding-top: 4px;" class="textArea-textDataProduct" disabled></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/pages/admin/faqAdmin.js?v=1.1.3"></script>
</body>

</html>
