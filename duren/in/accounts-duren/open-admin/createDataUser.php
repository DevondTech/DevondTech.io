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
<link href="../css/dataUserLogin.css?v=1.1.2" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<style type="text/css">
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

    .input-textDataUser {
        width: 100%;
        height: 30px;
        color: #000;
        border: transparent;
        padding-left: 5px;
        padding-right: 5px;
        border-bottom: 1px solid #969191;
        border-radius: 0px;
    }
</style>
</head>
<body class="bd-w">
<div class="divPositionContentTop">
    <div id="createDataUserSlide">
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
                                    <input type="text" name="username" id="username" class="input-textDataUser"  >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Nama Lengkap
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-textDataUser" >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        E-mail
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="mail" name="email" id="email" class="input-textDataUser" >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        No. Telp 
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="number" name="nomor_hp" id="nomor_hp" class="input-textDataUser" >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Password
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="password" name="password" id="password" class="input-textDataUser" >
                                </div>
                            </div>
                             <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Status User
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
                                    <ul class="ul-buttonGreen" style="margin: auto;float: left;padding-left: 0px;    padding-bottom: 0px;">
                                        <li class="li-buttonGreen">  
                                            <button class="buttonCancelCreate" type="button" id="btnCancelCreateDataUserSlide" >BATAL</button>
                                        </li>
                                        <li class="li-buttonGreen">  
                                            <button class="buttonSaveCreate" type="button" id="btn-create-user"  >SIMPAN</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div style="padding-bottom: 100px">
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
               Data User
            </div>
        </div>
        <br />
        <div  id="btnCreateDataUserSlide" class="NewDataUser">
            <ul class="ul-buttonGreen">
                <li class="li-buttonGreen">
                    <a  data-toggle="modal" data-target="#open-dataProduct" id="NewDataUser" >
                    <button class="buttonMiddle-green" >Tambah User</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="createDataUserSlide" style="margin-left: 0px;margin-right: 0px; width: 100%;padding-top: 30px; ">
            <div style="overflow-x: auto;">
                <div style="margin-left: 25px;">
                    <table style="width: 100%;" border=1px; class="table table-bordered" id="dataUser">
                        <thead>
                            <tr>
                                <td class="table-tdYellowHeader">
                                    Nomor
                                </td>
                                <td class="table-tdYellowHeader">
                                    Nama Lengkap
                                </td>
                                <td class="table-tdYellowHeader">
                                    Email
                                </td>
                                <td class="table-tdYellowHeader">
                                    Status User
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
<!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->

<script src="../js/pages/admin/createDataUserAdmin.js?v=1.2.5"></script>
</body>
</html>

