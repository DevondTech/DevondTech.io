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
    $id_barang = $_GET['id'];
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
<div class="divPositionContentTop">
	 <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           Data Produk Detail
        </div>
    </div>
    <input type="hidden" name="a" id="a" value="<?= $id_barang; ?>">
    <div class="divParent-imgDetailProductAdmin">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div class="Card-imgDetailProductAdmin">
                            <img class="imgDetailProductAdmin" src="" id="gambar1_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" data-toggle="modal" data-target="#open-uploadGambar1Produk" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div class="Card-imgDetailProductAdmin">
                            <img src="" class="imgDetailProductAdmin" id="gambar2_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" data-toggle="modal" data-target="#open-uploadGambar2Produk" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div class="Card-imgDetailProductAdmin">
                            <img src="" class="imgDetailProductAdmin" id="gambar3_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" data-toggle="modal" data-target="#open-uploadGambar3Produk" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div class="Card-imgDetailProductAdmin">
                            <img src="" class="imgDetailProductAdmin" id="gambar4_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" data-toggle="modal" data-target="#open-uploadGambar4Produk" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divParent-inputDetailProductAdmin">
        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateNamaProdukForm" >
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Nama Produk
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <input type="text" name="PrintDetail_nama_produk" id="PrintDetail_nama_produk" class="input-textDataProduct" disabled>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
            
                <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="nama_product_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="nama_product_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="nama_product_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="nama_product_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>

        <div class="Card-inputDataProduct textArea-modeInputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateDetail1Form">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Detail 1
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <textarea name="PrintDetail_detail1_produk" id="PrintDetail_detail1_produk" style="padding-top: 4px;" class="textArea-textDataProduct" disabled></textarea>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
                <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="detail1_produk_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="detail1_produk_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="detail1_produk_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="detail1_produk_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>

        <div class="Card-inputDataProduct textArea-modeInputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateDetail2Form">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Detail 2
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <textarea name="PrintDetail_detail2_produk" id="PrintDetail_detail2_produk" style="padding-top: 4px;" class="textArea-textDataProduct" disabled></textarea>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
                <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="detail2_produk_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="detail2_produk_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="detail2_produk_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="detail2_produk_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateHargaForm">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Harga
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <input type="number" name="PrintDetail_harga" id="PrintDetail_harga" class="input-textDataProduct" disabled>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
                <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="harga_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="harga_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="harga_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="harga_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
        
        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateStokForm">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Jumlah Stok
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <input type="number" name="PrintDetail_jumlah_stok" id="PrintDetail_jumlah_stok" class="input-textDataProduct" disabled>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
                <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="jumlah_stok_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="jumlah_stok_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="jumlah_stok_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="jumlah_stok_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateNamaProdukForm">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Satuan
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <input type="text" name="PrintDetail_satuan_produk" id="PrintDetail_satuan_produk" class="input-textDataProduct" disabled>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
              <!--   <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="satuan_produk_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="satuan_produk_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="satuan_produk_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="satuan_produk_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> -->
            </form>
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <form method="POST" id="updateNamaProdukForm">
                <div class="card-textDataProduct ">
                    <div class="textDataProduct">
                        Jenis Produk
                    </div>
                </div>
                <div class="card-inputDataProduct">
                    <input type="text" name="PrintDetail_jenis_produk" id="PrintDetail_jenis_produk" class="input-textDataProduct" disabled>
                    <input type="hidden" name="id_barang_nama_produk" id="id_barang_nama_produk" value="<?= $id_barang; ?>">
                </div>
                <!-- <div class="card-buttonDataProduct">
                    <div>
                        <div class="div-button-EditDataDetailProductAdmin" id="jenis_produk_EditDataDetailProductAdmin">
                            <button class="button-OpenModalDetailProductAdmin" type="button">Ubah</button>  
                        </div>
                        <div class="div-button-EditDataDetailProductAdmin" id="jenis_produk_SaveCancelDataDetailProductAdmin">
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Save" id="jenis_produk_ubahSave">
                                    <img class="img-buttonTypeDiv" src="../images/button/save.png">
                                </div>
                            </div>
                            <div class="div-imageSaveCancel30">
                                <div class="buttonTypeDiv-Cancel" id="jenis_produk_ubahCancel">
                                    <img class="img-buttonTypeDiv" src="../images/button/cancel.png">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> -->
            </form>
        </div>
    </div>
</div>
    
     <!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/pages/admin/productDetailDataAdmin.js"></script>
<script type="text/javascript" src="../js/pages/admin/gambarUploadProdukAdmin.js"></script>
<div id="open-uploadGambar1Produk" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  name="gambar1" onsubmit="return validateForm1()" method="post" enctype="multipart/form-data" id="uploadGambar1Produk" action="updatePicDataDetail.php?uploadGambar1Produk">
                    <input type="hidden" name="id_barangGambar" id="id_barangGambar" value="<?= $id_barang; ?>">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Produk 1
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="submit" id="btnuploadGambar1Produk"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="open-uploadGambar2Produk" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" name="gambar2" onsubmit="return validateForm2()" enctype="multipart/form-data" id="uploadGambar2Produk" action="updatePicDataDetail.php?uploadGambar2Produk">
                    <input type="hidden" name="id_barangGambar" id="id_barangGambar" value="<?= $id_barang; ?>">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Produk 2
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="submit" id="btnuploadGambar2Produk"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="open-uploadGambar3Produk" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" name="gambar3" onsubmit="return validateForm3()" enctype="multipart/form-data" id="uploadGambar3Produk" action="updatePicDataDetail.php?uploadGambar3Produk">
                    <input type="hidden" name="id_barangGambar" id="id_barangGambar" value="<?= $id_barang; ?>">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Produk 3
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="submit" id="btnuploadGambar3Produk"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="open-uploadGambar4Produk" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" name="gambar4" onsubmit="return validateForm4()" enctype="multipart/form-data" id="uploadGambar4Produk" action="updatePicDataDetail.php?uploadGambar4Produk">
                    <input type="hidden" name="id_barangGambar" id="id_barangGambar" value="<?= $id_barang; ?>">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Produk 4
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="submit" id="btnuploadGambar4Produk"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>