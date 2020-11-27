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
<style type="text/css">

    #createVoucher{
        display: none;
    }

    #createJenisVoucher{
        display: none;
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

    .input-textData {
        width: 100%;
        height: 30px;
        color: #000;
        border: transparent;
        padding-left: 5px;
        padding-right: 5px;
        border-bottom: 1px solid #969191;
        border-radius: 0px;
    }

    .borderGrey{
        border: 1px solid grey;
        border-radius: 4px;
        padding-bottom: 60px;
        padding-top: 30px;
    }

    @media(max-width: 870px){
        .borderGrey{
            border: 1px solid grey;
            border-radius: 4px;
            padding-bottom: 80px;
            padding-top: 40px;
        }
    }

    @media(max-width: 767px){
        .buttonMiddle-green {
            width: 142px;
            max-width: 122px;
            height: 40px;
            font-size: 12px;
            color: white;
            background-color: #2d472c;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #2d472c;
        }

        .buttonMiddle-green:hover {
            width: 142px;
            max-width: 122px;
            height: 40px;
            font-size: 12px;
            color: white;
            background-color: #2d472c;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #2d472c;
        }

        .ul-buttonGreen {
            margin-left: -40px;
            padding-bottom: 50px;
        }
    }

    @media(max-width: 500px){
        .borderGrey{
            border: 1px solid grey;
            border-radius: 4px;
            padding-bottom: 100px;
            padding-top: 40px;
        }
    }
</style>
</head>
<body class="bd-w" >
<div class="divPositionContentTop">
    <div id="createVoucher" >
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Tambah Voucher
            </div>
        </div>
        <div class="col-divProfileUser">
            <div class="row">
                <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                    <div>
                        <form method="POST" id="createDataProduct">
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Jenis Voucher
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <select name="id_jenis_voucher" class="input-textDataUser" id="id_jenis_voucher">
                                     </select>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Total Voucher
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="number" name="total_voucher" id="total_voucher" class="input-textDataUser"  >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Tanggal Berlaku
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="datetime-local" name="waktu_berlaku" id="waktu_berlaku" class="input-textDataUser" >
                                </div>
                            </div>
                 
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                      
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <ul class="ul-buttonGreen" style="margin: auto;float: left;padding-left: 0px;    padding-bottom: 0px;">
                                        <li class="li-buttonGreen" id="cancelLiCreateVoucher">  
                                            <button class="buttonCancelCreate" type="button" id="cancelBtnCreateVoucher" >BATAL</button>
                                        </li>
                                        <li class="li-buttonGreen" id="saveLiCreateVoucher">  
                                            <button class="buttonSaveCreate" type="button" id="btnCreatedDataProduct">SIMPAN</button>
                                        </li>
                                        <li class="li-buttonGreen" style="display: none">  
                                            <button class="buttonSaveCreate" type="button" id="btnCreatedDataProduct">KIRIM KE USER</button>
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
    <div id="createJenisVoucher" >
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Tambah Jenis Voucher
            </div>
        </div>
        <div class="col-divProfileUser">
            <div class="row">
                <div class="borderGrey col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                    <div>
                        <form method="POST" id="createDataSelectJenisVoucher">
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Jenis Voucher
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="text" name="jenis_voucher" id="jenis_voucher" class="input-textDataUser"  >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                      
                                    </div>
                                </div>
                                <div class="card-inputDataUser" style="float: left;">
                                    <ul class="ul-buttonGreen" style="margin: auto;float: left;padding-left: 0px;    padding-bottom: 0px;">
                                        <li class="li-buttonGreen" id="cancelLiCreateJenisVoucher">  
                                            <button class="buttonCancelCreate" type="button" id="cancelBtnCreateJenisVoucher" >BATAL</button>
                                        </li>
                                        <li class="li-buttonGreen" id="LiCreatedDataJenisVoucher">  
                                            <button class="buttonSaveCreate" type="button" id="btnCreatedDataJenisVoucher">SIMPAN</button>
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
    <div id="dataVoucherPage" >
        <div class="paddingtopData1">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                   Data Voucher
                </div>
            </div>
            <br />
            <div class="paddingtop50px">
                <ul class="ul-buttonGreen">
                    <li class="li-buttonGreen">
                        <button class="buttonMiddle-green"  type="button" id="createNewDataVoucher" >Tambah Voucher</button>
                    </li>
                    <li class="li-buttonGreen">
                        <button class="buttonMiddle-green" type="button" id="createNewDataJenisVoucher" >Tambah Jenis Voucher</button>
                    </li>
                </ul>
            </div>
            <div id="" class="parrentDivTable" >
                <div class="scrollTableX">
                    <div class="marginLeft25">
                        <table style="width: 100%;" border=1px; class="table table-bordered" id="dataVoucher">
                            <thead>
                                <tr>
                                    <td class="table-tdYellowHeader">
                                        Kode Voucher
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Tanggal Berlaku
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Jenis Voucher
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

<script src="../datatable/newJS/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<!-- <script src="../js/pages/admin/productDataAdmin.js?v=1.5.4"></script> -->
<script src="../js/jquery.redirect.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var table = $('#dataVoucher').DataTable({ 
            "order": [[ 1, "desc" ]],
            "searchable": false,
            "orderable": false,
            "targets": 0,
            "ajax": "../../../conn/data2/voucher/voucherAdminCrud.php?selectDataVoucherToTable",
            "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": -1,
            "data": null,
            "defaultContent": "<center><button class='buttonDetail-Table tblDetail' style='margin-bottom: 10px;' type='submit' >Detail Data</button></center>"
        },
        {
          "targets": 0,
          "className": "text-center",
        },
        {
          "targets": 1,
          "className": "text-center",
        },
        {
          "targets": 2,
          "className": "text-center",
        },
        {
          "targets": 3,
          "className": "text-center",
        },
        ]
    });
});

$('#dataVoucher tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[3];
    /*console.log(id);*/
    $('#dataProdukPage').load('productDataDetail.php?id='+id);
});

$('#createNewDataVoucher').on('click', function(e){
    $('#dataVoucherPage').attr('style','display:none;');
    $('#createVoucher').attr('style','display:block;');
    $('#createJenisVoucher').attr('style','display:none;');
    $.ajax({
      type: "GET",
      url: "../../../conn/data2/voucher/voucherAdminCrud.php/?selectDataJenisVoucher",
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function(selectDataJenisVoucher) { 
        var DataVoucher = jQuery.parseJSON(selectDataJenisVoucher);
        var html = '';
          for(var count = 0; count < DataVoucher.length; count++)
          {
            html += '<option value="'+DataVoucher[count].id_jenis_voucher+'">'+DataVoucher[count].jenis_voucher+'</option>';
          }
        $('#id_jenis_voucher').html(html);
      }
    });
});

$('#cancelBtnCreateVoucher').on('click', function(e){
    $('#dataVoucherPage').attr('style','display:block;');
    $('#createVoucher').attr('style','display:none;');
    $('#createJenisVoucher').attr('style','display:none;');
    $('#waktu_berlaku').val('');
    $('#total_voucher').val('');
});

$('#createNewDataJenisVoucher').on('click', function(e){
    //$('#dataVoucherPage').attr('style','display:none;');
    $('#createVoucher').attr('style','display:none;');
    $('#createJenisVoucher').attr('style','display:block;');
});

$('#cancelBtnCreateJenisVoucher').on('click', function(e){
    $('#dataVoucherPage').attr('style','display:block;');
    $('#createVoucher').attr('style','display:none;');
    $('#createJenisVoucher').attr('style','display:none;');
    $('#jenis_voucher').val('');
});

$('#btnCreatedDataJenisVoucher').on('click',function(e){
    var jenis_voucher = $('#jenis_voucher').val();
    if(jenis_voucher != ''){
      var data = $("#createDataSelectJenisVoucher").serialize();
      $.ajax({
         type : 'POST',
         url  : '../../../conn/data2/voucher/voucherAdminCrud.php/?createJenisVoucherToSelect',
         data : data,
          success :  function(data)
          { 
            $("#btnCreatedDataJenisVoucher").html('SIMPAN');
            swal({
                title:"Berhasil",
                text: "Tambah Data Jenis Voucher Berhasil",
                type: "success"
            });
            $('#jenis_voucher').val('');
          } 
      });
      return false;
    }  
    else{
        swal({
            title:"Cek Data",
            text: "Silahkan Isi Jenis Voucher",
            type: "error"
        });
    }    
  });
</script>
</body>
</html>

