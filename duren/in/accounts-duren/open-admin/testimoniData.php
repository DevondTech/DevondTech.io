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

    .cardCreateUpdateTestimoni{
        border: 1px solid grey;
        padding-top: 10px;
        padding-bottom: 25px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .padBtm15{
        padding-bottom:15px;
    }

    .btnsuccess{
        background-color: #2d472c;
        color: white;
        border: 1px solid #2d472c;
    }

    .btnsuccess:hover, .btn-success:active, .btn-success:focus {
        border: 1px solid #2d472c;
        background-color: white;
        color: #2d472c;
    }

    .btndanger{
        background-color: #fb483a;
        color: white;
        border: 1px solid #fb483a;
    }

    .btndanger:hover, .btndanger:active, .btndanger:focus {
        background-color: white;
        color: #fb483a;
    }

    .buttonGrennLinkTestimoni{
        font-size: 16px;
        color: white;
        background-color: #2d472c;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #2d472c;
        margin-top: 15px;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 10px;
        padding-right: 10px;
        float: right;
    }     

    .buttonGrennLinkTestimoni:hover{
        font-size: 16px;
        color: #2d472c;
        background-color: white;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #2d472c;
        margin-top: 15px;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 10px;
        padding-right: 10px;
    }    

    .buttonRedLinkTestimoni{
        font-size: 16px;
        color: white;
        background-color: #fb483a;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #fb483a;
        margin-top: 15px;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 10px;
        padding-right: 10px;
        float: right;
        margin-right: 7px;
    }    

    .buttonRedLinkTestimoni:hover{
        font-size: 16px;
        color: #fb483a;
        background-color: white;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #fb483a;
        margin-top: 15px;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 10px;
        padding-right: 10px;
        margin-right: 7px;
    }   

    .table-tdYellowHeader {
        text-align: center;
        font-size: 18px;
        font-weight: bolder;
        background-color: rgb(176 255 181);
    }

    .pagination li.active a {
        background-color: #2d472c;
        cursor: pointer;
    }

    .pagination li a {
        background-color: white;
        cursor: pointer;
    }

    .divParent-inputDetailProductAdmin {
        padding-top: 0px;
        padding-bottom: 50px;
    }

    .mSmallHide{
        margin-left: 10px;
    }

    .typePhoneInv{
        margin-top: 20px;
    }

    @media(max-width: 870px){

        .typePhoneInv{
            margin-top: 20px;
        }
        .phoneHide{
            display: none;
        }

        .mSmallHide{
            margin-left: 0px;
        }
    }

    .input-textDataUser {
        width: 100%;
        height: 30px;
        color: #000;
        border: transparent;
        padding-left: 5px;
        padding-right: 5px;
        border-bottom: 1px solid #969191;
        border-radius: 0px;
        padding-bottom: 5px;
    }

    .mrightLeft{
        margin-right: 5px;
        margin-left: 5px;
    }


</style>
</head>
<body>
<div class="divPositionContentTop">
     <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           Data Testimoni
        </div>
    </div>
    <div class="divParent-inputDetailProductAdmin">
        <div class="padBtm15 mrightLeft mSmallHide row">
        <div class=" col-lg-9 col-md-12 col-sm-12">
            <div class="cardCreateUpdateTestimoni PaddingProduct20TopBotom">
                <form method="POST" id="dataCreate" style="padding-top: 10px;">
                    <div class="padBtm15 mrightLeft mSmallHide row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="textDataUser" style="text-align: left;">
                                Nama
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-textDataUser"  >
                            <input type="hidden" name="id_testimoni" id="id_testimoni" class="input-textDataUser"  >
                        </div>
                    </div>
                    <div class=" mrightLeft mSmallHide row"> 
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="textDataUser" style="text-align: left;">
                                Link Youtube
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <input type="text" name="link_youtube" id="link_youtube" class="input-textDataUser"  >
                        </div>
                    </div>       
                    <div class="mrightLeft row">
                        <div class="col-lg-12 col-md-11 col-sm-11">
                            <button class="buttonGrennLinkTestimoni" type="button" id="actionAdminTestimoni" >SIMPAN</button>
                            <button class="buttonGrennLinkTestimoni" type="button" id="actionUpdateAdminTestimoni" style="display: none;" >SIMPAN</button>
                            <button class="buttonRedLinkTestimoni" type="button" id="actionCancelUpdateAdminTestimoni" style="display: none;" >BATAL</button>
                        </div>
                    </div>       
                </form>
            </div>
        </div> 
        <div class="phoneHide col-lg-3 col-md-12 col-sm-12"></div>    
        </div>
        
        <div id="" >
        <div class="">
            <div class="typePhoneInv">
                <div id="" class="parrentDivTable" >
                    <div class="scrollTableX">
                        <div class="marginLeft25">
                            <table style="width: 100%;" border=1px; class="table table-bordered" id="testimoniData">
                                <thead>
                                    <tr>
                                        <td class="table-tdYellowHeader">
                                            Nomor
                                        </td>
                                        <td class="table-tdYellowHeader">
                                            Nama
                                        </td>
                                        <td class="table-tdYellowHeader">
                                            Link
                                        </td>
                                        <td class="table-tdYellowHeader">
                                            Aksi
                                        </td>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Jquery Js -->
<script src="../datatable/newJS/jquery.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../js/pages/admin/testimoniDataAdmin.js?v=1.1.7"></script>
</body>
</html>