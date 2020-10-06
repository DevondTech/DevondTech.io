$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUser",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(callDetailUserDatas) { 
            var DataPayment = jQuery.parseJSON(callDetailUserDatas);
            var totalHargaPerproduk = DataPayment[0].total_harga_perproduk;
            var ongkosKirim = DataPayment[0].ongkos_kirim;
            var totalHarga = DataPayment[0].total_harga_yang_harus_dibayar;
            var DataFoto = DataPayment[0].gambar_bukti_pembayaran;

            var totalHargaPerprodukNumberString = totalHargaPerproduk.toString(),
                totalHargaPerprodukSisa    = totalHargaPerprodukNumberString.length % 3,
                totalHargaPerprodukRupiah  = totalHargaPerprodukNumberString.substr(0, totalHargaPerprodukSisa),
                totalHargaPerprodukRibuan  = totalHargaPerprodukNumberString.substr(totalHargaPerprodukSisa).match(/\d{3}/g);         
            if (totalHargaPerprodukRibuan) {
                totalHargaPerprodukSeparator = totalHargaPerprodukSisa ? '.' : '';
                totalHargaPerprodukRupiah += totalHargaPerprodukSeparator + totalHargaPerprodukRibuan.join('.');
            }
            $('#total_harga_pemesanan').val(totalHargaPerproduk);
            $('#total_harga_pemesanan_tampil').val('Rp '+totalHargaPerprodukRupiah+',00');
            var ongkosKirimNumberString = ongkosKirim.toString(),
            ongkosKirimSisa  = ongkosKirimNumberString.length % 3,
            ongkosKirimRupiah  = ongkosKirimNumberString.substr(0, ongkosKirimSisa),
            ongkosKirimRibuan  = ongkosKirimNumberString.substr(ongkosKirimSisa).match(/\d{3}/g);         
            if (ongkosKirimRibuan) {
                ongkosKirimSeparator = ongkosKirimSisa ? '.' : '';
                ongkosKirimRupiah += ongkosKirimSeparator + ongkosKirimRibuan.join('.');
            }
            $('#ongkir').val(ongkosKirim);
            $('#ongkir_tampil').val('Rp '+ongkosKirimRupiah+',00');
            var totalHargaNumberString = totalHarga.toString(),
            totalHargaSisa    = totalHargaNumberString.length % 3,
            totalHargaRupiah  = totalHargaNumberString.substr(0, totalHargaSisa),
            totalHargaRibuan  = totalHargaNumberString.substr(totalHargaSisa).match(/\d{3}/g);         
            if (totalHargaRibuan) {
                totalHargaSeparator = totalHargaSisa ? '.' : '';
                totalHargaRupiah += totalHargaSeparator + totalHargaRibuan.join('.');
            }
            $('#totalBayarKeseluruhan').val(totalHargaRupiah);
            $('#totalBayarKeseluruhan_tampil').val('Rp '+totalHargaRupiah+',00');

            
            var DataFotoNull = '../images/uploadImage.png';
            if(DataFoto == '' || DataFoto == null){
                $('#dataFotoPayment').attr('src', DataFotoNull);
                $('#foto_check').val('0');
            }
            else{
                $('#dataFotoPayment').attr('src', DataFoto);
                $('#foto_check').val('1');
            } 
        }
    });

    $('#confirmationButton').on('click', function(){
        $('#confirmationDataCard').attr('style','display:block');
        $('#confirmationDetailPayment').attr('style','display:none');
    });

    $('#btnCancelConfirmationDetailPayment').on('click', function(){
        $('#confirmationDataCard').attr('style','display:none');
        $('#confirmationDetailPayment').attr('style','display:block');
        $('#nama_pemilik_rekening').val('');
        $('#tanggal_transfer').val('');
        $('#no_rekening').val('');
        $('#bank_asal').val('');
        $('#gambar_bukti_pembayaran').val('');
    });

    $('#btnUpdateConfirmationDetailPayment').on('click',function(e){

        var nama_pemilik_rekening = $('#nama_pemilik_rekening').val();
        var tanggal_transfer = $('#tanggal_transfer').val();
        var no_rekening = $('#no_rekening').val();
        var bank_asal = $('#bank_asal').val();
        var check_foto_data = $('#foto_check').val();

        if(check_foto_data == '0' ){
            alert('Lengkapi atau upload foto transfer');
        }
        else{
            if(nama_pemilik_rekening == '' ){
                alert('Isi data nama pemilik rekening');
            }
            else{
                if(tanggal_transfer == '' ){
                    alert('Isi data tanggal transfer');
                }
                else{
                    if(no_rekening == '' ){
                        alert('Isi data nomor rekening');
                    }
                    else{
                        if(bank_asal == '' ){
                            alert('Isi data bank untuk mentransfer');
                        }
                        else{
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
                                    alert('Transaksi Berhasil');
                                    location.reload();
                                  }
                                  else{
                                    alert('Pemesanan Gagal, Silahkan Lengkapi Data Anda');
                                    $("#btnUpdateConfirmationDetailPayment").html('SIMPAN');
                                  }
                                }    
                            });
                        return false;
                        }
                    }
                }
            }
        }
    });
});
