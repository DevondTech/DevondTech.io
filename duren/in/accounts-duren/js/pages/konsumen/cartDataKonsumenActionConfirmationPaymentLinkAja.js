$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentLinkAja",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPaymentLinkAja) { 
            var DataPaymentLinkAja = jQuery.parseJSON(selectCartDataByUserToPaymentLinkAja);
            var kode_pemesanan = DataPaymentLinkAja[0].kode_pemesanan;
            var nama_produk = DataPaymentLinkAja[0].nama_produk;
            var jumlah_pemesanan = DataPaymentLinkAja[0].jumlah_pemesanan;
            var nomor_hp = DataPaymentLinkAja[0].nomor_hp;
            var total_harga_yang_harus_dibayar = DataPaymentLinkAja[0].total_harga_yang_harus_dibayar;
            var DataFoto = DataPaymentLinkAja[0].gambar_bukti_pembayaran;
            $('#kode_pemesanan').val(kode_pemesanan);
            $('#nama_produk').val(nama_produk);
            $('#jumlah_pemesanan').val(jumlah_pemesanan);
            $('#nomor_hp').val(nomor_hp);
            $('#kode_pemesanan_tampil').val(kode_pemesanan);
            $('#nama_produk_tampil').val(nama_produk);
            $('#jumlah_pemesanan_tampil').val(jumlah_pemesanan+' Pack');
            $('#nomor_hp_tampil').val(nomor_hp);
            var totalHargaNumberString = total_harga_yang_harus_dibayar.toString(),
                totalHargaSisa    = totalHargaNumberString.length % 3,
                totalHargaRupiah  = totalHargaNumberString.substr(0, totalHargaSisa),
                totalHargaRibuan  = totalHargaNumberString.substr(totalHargaSisa).match(/\d{3}/g);         
            if (totalHargaRibuan) {
                totalHargaSeparator = totalHargaSisa ? '.' : '';
                totalHargaRupiah += totalHargaSeparator + totalHargaRibuan.join('.');
            }
            $('#total_harga_yang_harus_dibayar').val(total_harga_yang_harus_dibayar);
            $('#total_harga_yang_harus_dibayar_tampil').val('Rp '+totalHargaRupiah+',00');
          
            
            var DataFotoNull = '../images/uploadImage.png';
            if(DataFoto == '' || DataFoto == 'a'){
                $('#dataFotoPayment').attr('src', DataFotoNull);
                $('#foto_check').val('0');
            }
            else{
                $('#dataFotoPayment').attr('src', DataFoto);
                $('#foto_check').val('1');
            } 
        }
    });

    $('#btnCancelConfirmationDetailPayment').on('click', function(){
        var data = $("#confirmationFormDataTransfer").serialize();
        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/cartProcess/cartProcess.php/?deleteImageConfirmationPaymentTransfer',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
              $("#checkOutActionButton").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
            }, 
            success :  function(response)
            {
              if(response == "deleteImageConfirmationPaymentTransferSuccess"){
                location.reload();
              }
              else{
                swal({
                    title:"Gagal",
                    text: "Pemesanan Gagal, Silahkan Lengkapi Data Anda",
                    type: "error"
                });
                $("#btnCancelConfirmationDetailPayment").html('BATAL');
              }
            }    
        });
        return false;
    });

    $('#btnUpdateConfirmationDetailPayment').on('click',function(e){

        var data = $("#confirmationFormDataTransfer").serialize();
        $.ajax({

            type : 'POST',
            url  : '../../../conn/data2/cartProcess/cartProcess.php/?updateConfirmationPaymentTransfer',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
              $("#checkOutActionButton").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
            }, 
            success :  function(response)
            {
              if(response == "updateConfirmationPaymentTransferSuccess"){
                $("#btnUpdateConfirmationDetailPayment").html('SIMPAN');
                swal({
                    title:"Sukses",
                    text: "Transaksi Berhasil",
                    type: "success"
                }).then(function() {
                    location.reload();
                });                                    
              }
              else{
                swal({
                    title:"Gagal",
                    text: "Pemesanan Gagal, Silahkan Lengkapi Data Anda",
                    type: "error"
                });
                $("#btnUpdateConfirmationDetailPayment").html('SIMPAN');
              }
            }    
        });
    return false;
    
    });
});
