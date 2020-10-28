$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentCall",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPayment) { 
            var DataPayment = jQuery.parseJSON(selectCartDataByUserToPayment);
            var IdPemesanan = DataPayment[0].kode_pemesanan;
            var WaktuPemesanan = DataPayment[0].waktu_pemesanan;
            var JumlahPemesanan = DataPayment[0].jumlah_pemesanan;
            var IdProduk = DataPayment[0].id_produk;
            var IdBeratProduk = DataPayment[0].id_berat_produk;
            var TotalPenjualan = DataPayment[0].total_harga_yang_harus_dibayar ;
            var IdKonsumen = DataPayment[0].id_user;
            var AlamatKonsumen = DataPayment[0].alamat;
            var NegaraKonsumen = DataPayment[0].negara;
            var ProvinsiKonsumen = DataPayment[0].provinsi;
            var KabupatenKonsumen = DataPayment[0].kabupaten;
            var KotaKonsumen = DataPayment[0].kota ;
            var KecamatanKonsumen = DataPayment[0].kecamatan;
            var KelurahanKonsumen = DataPayment[0].kelurahan;
            var KodePosKonsumen = DataPayment[0].kode_pos;
            var Ongkir = DataPayment[0].ongkos_kirim;
            var IdVoucher = DataPayment[0].id_voucher;
            var MetodePembayaran = DataPayment[0].id_metode_pembayaran ;
            var Gambar = DataPayment[0].gambar_bukti_pembayaran;
            var TotalPerProduk = DataPayment[0].total_harga_perproduk ;         
            $('#IdPemesanan').val(IdPemesanan);
            $('#IdPemesananDelete').val(IdPemesanan);
            $('#IdProduk').val(IdProduk);
            $('#WaktuPemesanan').val(WaktuPemesanan);
            $('#JumlahPemesanan').val(JumlahPemesanan);
            $('#IdBeratProduk').val(IdBeratProduk);
            $('#TotalPenjualan').val(TotalPenjualan);
            $('#IdKonsumen').val(IdKonsumen);
            $('#AlamatKonsumen').val(AlamatKonsumen);
            $('#NegaraKonsumen').val(NegaraKonsumen);
            $('#ProvinsiKonsumen').val(ProvinsiKonsumen);
            $('#KabupatenKonsumen').val(KabupatenKonsumen);
            $('#KotaKonsumen').val(KotaKonsumen);
            $('#KecamatanKonsumen').val(KecamatanKonsumen);
            $('#KelurahanKonsumen').val(KelurahanKonsumen);
            $('#KodePosKonsumen').val(KodePosKonsumen);
            $('#Ongkir').val(Ongkir);
            $('#IdVoucher').val(IdVoucher);
            $('#MetodePembayaran').val(MetodePembayaran);
            $('#Gambar').val(Gambar);
            $('#TotalPerProduk').val(TotalPerProduk);
            
            var IdPemesanan = DataPayment[0].kode_pemesanan;
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

        var nama_pemilik_rekening = $('#nama_pemilik_rekening').val();
        var tanggal_transfer = $('#tanggal_transfer').val();
        var no_rekening = $('#no_rekening').val();
        var bank_asal = $('#bank_asal').val();
        var check_foto_data = $('#foto_check').val();

        if(check_foto_data == '0' ){
            swal({
                title:"Pemesanan Gagal",
                text: "Lengkapi atau upload foto transfer",
                type: "error"
            });
        }
        else{
            if(nama_pemilik_rekening == '' ){
                swal({
                    title:"Pemesanan Gagal",
                    text: "Silahkan Lengkapi Data Pemilik Rekening",
                    type: "error"
                });
            }
            else{
                if(tanggal_transfer == '' ){
                    swal({
                        title:"Pemesanan Gagal",
                        text: "Pemesanan Gagal, Silahkan Lengkapi Data Tanggal Transfer",
                        type: "error"
                    });
                }
                else{
                    if(no_rekening == '' ){
                        swal({
                            title:"Pemesanan Gagal",
                            text: "Pemesanan Gagal, Silahkan Lengkapi Nomor Rekening",
                            type: "error"
                        });
                    }
                    else{
                        if(bank_asal == '' ){
                            swal({
                                title:"Pemesanan Gagal",
                                text: "Silahkan Lengkapi Data Bank Asal",
                                type: "error"
                            });
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
                        }
                    }
                }
            }
        }
    });
});
