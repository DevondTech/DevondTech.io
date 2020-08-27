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

	 <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
           Data Produk Detail
        </div>
    </div>
    <input type="hidden" name="a" id="a" value="<?= $id_barang; ?>">
    <div class="divParent-imgDetailProductAdmin">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div>
                            <img src="../images/seimpleProduk.png" class="imgDetailProductAdmin" id="gambar1_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div>
                            <img src="../images/seimpleProduk.png" class="imgDetailProductAdmin" id="gambar1_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div>
                            <img src="../images/seimpleProduk.png" class="imgDetailProductAdmin" id="gambar1_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="divPosition-imgDetailProductAdmin">
                    <div class="div-imgDetailProductAdmin">
                        <div>
                            <img src="../images/seimpleProduk.png" class="imgDetailProductAdmin" id="gambar1_productView">
                        </div>
                        <div>
                            <div class="divPosition-button-OpenModalDetailProductAdmin">
                                <button class="button-OpenModalDetailProductAdmin" id="gambar1product-OpenModal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divParent-inputDetailProductAdmin">
        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Nama Produk
                </div>
            </div>
            <div class="card-inputDataProduct">
                <input type="text" name="PrintDetail_nama_produk" id="PrintDetail_nama_produk" class="input-textDataProduct" disabled>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="nama_product_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Detail 1
                </div>
            </div>
            <div class="card-inputDataProduct">
                <textarea name="PrintDetail_detail1_produk" id="PrintDetail_detail1_produk" style="padding-top: 4px;" class="input-textDataProduct" disabled></textarea>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="detail1_produk_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Detail 2
                </div>
            </div>
            <div class="card-inputDataProduct">
                <textarea name="PrintDetail_detail2_produk" id="PrintDetail_detail2_produk" style="padding-top: 4px;" class="input-textDataProduct" disabled></textarea>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="detail2_produk_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Jenis Produk
                </div>
            </div>
            <div class="card-inputDataProduct">
                <input type="text" name="PrintDetail_jenis_produk" id="PrintDetail_jenis_produk" class="input-textDataProduct" disabled>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="jenis_produk_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
            </div>
        </div>
        
        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Jumlah Stok
                </div>
            </div>
            <div class="card-inputDataProduct">
                <input type="number" name="PrintDetail_jumlah_stok" id="PrintDetail_jumlah_stok" class="input-textDataProduct" disabled>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="jumlah_stok_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Satuan
                </div>
            </div>
            <div class="card-inputDataProduct">
                <input type="text" name="PrintDetail_satuan_produk" id="PrintDetail_satuan_produk" class="input-textDataProduct" disabled>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="satuan_produk_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
            </div>
        </div>

        <div class="Card-inputDataProduct PaddingProduct20TopBotom">
            <div class="card-textDataProduct ">
                <div class="textDataProduct">
                    Harga
                </div>
            </div>
            <div class="card-inputDataProduct">
                <input type="number" name="PrintDetail_harga" id="PrintDetail_harga" class="input-textDataProduct" disabled>
            </div>
            <div class="card-buttonDataProduct">
                <div>
                    <div class="div-button-EditDataDetailProductAdmin" id="harga_EditDataDetailProductAdmin">
                        <button class="button-OpenModalDetailProductAdmin">Ubah</button>  
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
        </div>
    </div>

    
     <!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/pages/productDetailDataAdmin.js"></script>
</body>

</html>