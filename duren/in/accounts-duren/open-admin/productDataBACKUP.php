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
<!-- <link rel="stylesheet" type="text/css" href="../datatable/css/bootstrap.css"/>
 -->
 <link rel="stylesheet" type="text/css" href="../datatable/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="../datatable/css/buttons.bootstrap4.min.css">
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
</head>
<body class="bd-w" >
<div>
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           Data Produk
        </div>
    </div>
    <br />
    <a  data-toggle="modal" data-target="#open-dataProduct" id="createNewDataProduct" >
    <button class="buttonMiddle-green" >Tambah Product</button>
    </a>
   <!--  <div style="padding-top: 50px;padding-bottom: 100px;">
        <div style="padding-left: 20px;padding-right: 20px;">
            <div>
                <table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 16px;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>   -->  
</div>
<!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<!-- <script src="../js/action.js"></script> -->
<!-- <script type="text/javascript" src="../datatable/js/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="../datatable/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="../datatable/js/dataTables.bootstrap4.min.js" ></script>
<script type="text/javascript" src="../datatable/js/dataTables.buttons.min.js" ></script>
<script type="text/javascript" src="../datatable/js/buttons.bootstrap4.min.js" ></script>
<script type="text/javascript" src="../datatable/js/jszip.min.js" ></script>
<script type="text/javascript" src="../datatable/js/pdfmake.min.js" ></script>
<script type="text/javascript" src="../datatable/js/vfs_fonts.js" ></script>
<script type="text/javascript" src="../datatable/js/buttons.html5.min.js" ></script>
<script type="text/javascript" src="../datatable/js/buttons.print.min.js" ></script>
<script type="text/javascript" src="../datatable/js/buttons.colVis.min.js" ></script> -->
<script src="../js/pages/productData.js"></script>

<!-- <script type="text/javascript" language="javascript" >
$(document).ready(function() {
  var table = $('#example').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf' ]
  } );

  table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );
});
</script> -->


<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->

<div id="open-dataProduct" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Tambah Data Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form method="POST" id="createDataProduct"  >
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Nama Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input type="text" name="nama_produk" id="nama_produk" class="input-textData" >
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Jenis Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <select name="id_jenis_produk" class="input-textDataUser" id="id_jenis_produk">
                            </select>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Detail Produk 1 :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <textarea  name="detail1_produk" id="detail1_produk" class="input-textData" style=" padding-top: 3px;"></textarea>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Detail Produk 2 :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <textarea  name="detail2_produk" id="detail2_produk" class="input-textData" style=" padding-top: 3px;"></textarea>
                        </div>  
                    </div>
                    <!-- <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Produk
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="gambar1_produk" name="gambar1_produk" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                        <div class="card-inputData">
                            <input  type="file" id="gambar2_produk" name="gambar2_produk" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                        <div class="card-inputData">
                            <input  type="file" id="gambar3_produk" name="gambar3_produk" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                        <div class="card-inputData">
                            <input  type="file" id="gambar4_produk" name="gambar4_produk" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                        <div class="card-inputData">
                            <input  type="file" id="gambar5_produk" name="gambar5_produk" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div> -->
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnCreatedDataProduct"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

