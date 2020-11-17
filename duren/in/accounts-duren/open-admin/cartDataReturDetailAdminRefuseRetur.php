<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php 
        $idPemesananSendRefund = $_GET['idPemesananSendRefund']; 
        $dataKodeRetur = $_GET['kodeReturToMailSendRefund']; 
        /*$dataNama = $_GET['namaToMailSendRefund']; */
        
    ?>
</head>
<body>
    <div class="" id="" >
        <form method="post" id="confirmationFormDataRefuseRetur">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black">
                    Form Kirim Email Penolakan Retur
                    <input type="hidden" name="a" id="a" value="<?= $idPemesananSendRefund; ?>">
                    <input type="hidden" name="kode_pemesanan_call_back" id="kode_pemesanan_call_back">

                    <input type="hidden" name="namaLengkap" id="namaLengkap">
                    <input type="hidden" name="email" id="email"  >
                    <input type="hidden" name="namaProduk" id="namaProduk">
                    <input type="hidden" name="jumlahPemesanan" id="jumlahPemesanan">
                    <input type="hidden" name="satuanProduk" id="satuanProduk">
                    <input type="hidden" name="beratProduk" id="beratProduk">
                </div>
            </div>
            <div class="padLeft20CartData">
                <div class="col-divCartData">
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Email Tujuan
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="text" name="emailTampil" id="emailTampil" class="input-textDataUser" disabled>
                            
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Kode Retur
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="text" name="kodeRetur" id="kodeRetur" class="input-textDataUser" value="<?php echo $dataKodeRetur; ?>" disabled>
                            <input type="hidden" name="kodeReturSend" id="kodeReturSend" class="input-textDataUser" value="<?php echo $dataKodeRetur; ?>" >
                        </div>
                    </div>
                   <!--  <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Nama Pembeli
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="text" name="nama" id="nama" class="input-textDataUser" value="<?php echo $dataNama; ?>" disabled>
                            <input type="hidden" name="namaSend" id="namaSend" class="input-textDataUser"  >
                        </div>
                    </div> -->
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Alasan Penolakan
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <textarea  type="text" name="mailContent"  id="mailContent" class="input-textDataUser"> </textarea>
                        </div>
                    </div>
                    
                    <div class="Card-inputDataUser-paddingTopBottom20px" style="margin-top: 10px;">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                              
                            </div>
                        </div>
                        <div class="card-inputDataUser" style="padding-bottom: 100px;">
                            <div class="floatRightbutton">
                                <button class="buttonLarge-green" type="submit" id="btnSendMail">KIRIM</button>
                            </div>
                        <!--     <div class="floatRightbutton">
                                <button class="buttonLarge-red" type="button" id="btnCancelConfir">BATAL</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>

<script type="text/javascript">
/*$(document).ready(function(){
    var dataEmailCallBack = $('#email').val();
    var dataKodeReturCallBack = $('#kodeRetur').val();
    $('#btnSendMail').on('click', function(e){
        var emailSend = $('#emailSend').val(dataEmailCallBack);
        var kodeReturSend = $('#kodeReturSend').val(dataKodeReturCallBack);
        var mailContent = $('#mailContent').val();
        document.getElementById("confirmationFormDataRefuseRetur").action = '../../../conn/data2/mail/adminSendConfirmNotApproved/';

    });
});*/
$(document).ready(function(){
    var id = $('#a').val();
 /*   var id = IDProdukCallBack;*/
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/cartProcess/cartProcess.php?selectToDataRefuseRetur='+id,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectToDataRefuseRetur) { 

            var DataDetailRetur = jQuery.parseJSON(selectToDataRefuseRetur);
            var namaLengkap = DataDetailRetur[0].nama_lengkap; 
            var email = DataDetailRetur[0].email; 
            var namaProduk = DataDetailRetur[0].nama_produk; 
            var jumlahPemesanan = DataDetailRetur[0].jumlah_pemesanan; 
            var satuanProduk = DataDetailRetur[0].satuan_produk; 
            var beratProduk = DataDetailRetur[0].teks_berat_produk; 

            $('#emailTampil').val(email);
            $('#email').val(email);
            $('#namaLengkap').val(namaLengkap);
            $('#namaProduk').val(namaProduk);
            $('#jumlahPemesanan').val(jumlahPemesanan);
            $('#satuanProduk').val(satuanProduk);
            $('#beratProduk').val(beratProduk);
        }
    });

    $('#btnSendMail').on('click', function(e){
        document.getElementById("confirmationFormDataRefuseRetur").action = '../../../conn/data2/mail/adminSendConfirmNotApproved/index.php';

    });
});
</script>
</body>
</html>