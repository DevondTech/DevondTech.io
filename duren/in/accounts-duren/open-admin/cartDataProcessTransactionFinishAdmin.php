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
<!-- css datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.1.10" rel="stylesheet" />
</head>
<body class="bd-w" >
<div class="divPositionContentTop">
    <div id="dataConfirmationPayment" >
        <div class="paddingtopData1">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                   Pemesanan Selesai
                </div>
            </div>
            <br />
            <div id="" class="parrentDivTable" >
                <div class="scrollTableX">
                    <div class="marginLeft25">
                        <table style="width: 100%;" border=1px; class="table table-bordered" id="dataFinish">
                            <thead>
                                <tr>
                                    <td class="table-tdYellowHeader" style="width: 25%;">
                                        Kode Transakasi
                                    </td>
                                    <td class="table-tdYellowHeader" style="width: 25%;">
                                        Nama Konsumen
                                    </td>
                                    <td class="table-tdYellowHeader" style="width: 25%;">
                                        Alamat
                                    </td>
                                    <td class="table-tdYellowHeader" style="width: 25%;">
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

<script src="../datatable/newJS/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<script src="../js/pages/admin/cartDataProcessTransactionFinishAdmin.js?v=1.1.1"></script>
</body>
</html>

