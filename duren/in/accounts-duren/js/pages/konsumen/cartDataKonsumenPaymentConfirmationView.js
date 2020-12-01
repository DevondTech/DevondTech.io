$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?methodPayment",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(methodPaymentCallBack) { 
          var DataPaymentMethod = jQuery.parseJSON(methodPaymentCallBack);
          var html = '';
            for(var count = 0; count < DataPaymentMethod.length; count++)
            {
              html += '<option value="'+DataPaymentMethod[count].id_metode_pembayaran+'">'+DataPaymentMethod[count].metode_pembayaran+'</option>';
            }
          $('#id_metode_pembayaran').html(html);
          
        }
    });

    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentCall",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPayment) { 
            var DataPayment = jQuery.parseJSON(selectCartDataByUserToPayment);
            var gambar_bukti_pembayaran = DataPayment[0].gambar_bukti_pembayaran;
            var IdPemesanan = DataPayment[0].kode_pemesanan;
            var id_pemesanan = DataPayment[0].id_pemesanan;
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
            var NamaProduk = DataPayment[0].nama_produk;
            var hargaProduk = DataPayment[0].harga;
            var codeUnix = DataPayment[0].kode_unik;
            var batasWaktuPembayaran = DataPayment[0].waktu_batas_checkout;

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

            var countDownDate = new Date(batasWaktuPembayaran).getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (0 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000); 
                if(hours < 10){
                    var hours = '0'+hours;
                }
                else{
                    var hours = hours;
                }
                if(minutes < 10){
                    var minutes = '0'+minutes;
                }
                else{
                    var minutes = minutes;
                }
                if(seconds < 10){
                    var seconds = '0'+seconds;
                }
                else{
                    var seconds = seconds;
                }
                document.getElementById("timeOutPayment").innerHTML =  hours + ":"
                  + minutes + ":" + seconds + "";
                if (distance < 1) {
                    clearInterval(x);
                    $('#timeOutPayment').attr('style','display:none;')
                    $.ajax({
                        type: "GET",
                        url: "../../../conn/data2/cartProcess/cartProcess.php/?updateCancelOrder="+id_pemesanan,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function() { 
                            
                        }
                    });
                    location.reload();
                }
            }, 1000);

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
            if(DataFoto == '' || DataFoto == null){
                $('#dataFotoPayment').attr('src', DataFotoNull);
                $('#foto_check').val('0');
            }
            else{
                $('#dataFotoPayment').attr('src', DataFoto);
                $('#foto_check').val('1');
            } 
            var hargaPerprodukNumberString = hargaProduk.toString(),
                hargaPerprodukSisa    = hargaPerprodukNumberString.length % 3,
                hargaPerprodukRupiah  = hargaPerprodukNumberString.substr(0, hargaPerprodukSisa),
                hargaPerprodukRibuan  = hargaPerprodukNumberString.substr(hargaPerprodukSisa).match(/\d{3}/g);         
            if (hargaPerprodukRibuan) {
                hargaPerprodukSeparator = hargaPerprodukSisa ? '.' : '';
                hargaPerprodukRupiah += hargaPerprodukSeparator + hargaPerprodukRibuan.join('.');
            }
            $('#total_harga_pemesanan').val(totalHargaPerproduk);
            $('#total_harga_pemesanan_tampil').val('Rp '+totalHargaPerprodukRupiah+',00');
            $('#detailPembayaranInfo').text(JumlahPemesanan+' x Rp '+hargaPerprodukRupiah+',00');
            /*$('#detailPembayaranInfoTotal').text('Rp '+totalHargaPerprodukRupiah+',00' );*/

            var codeUnixNumberString = codeUnix.toString(),
                codeUnixSisa    = codeUnixNumberString.length % 3,
                codeUnixRupiah  = codeUnixNumberString.substr(0, codeUnixSisa),
                codeUnixRibuan  = codeUnixNumberString.substr(codeUnixSisa).match(/\d{3}/g);         
            if (codeUnixRibuan) {
                codeUnixSeparator = codeUnixSisa ? '.' : '';
                codeUnixRupiah += codeUnixSeparator + codeUnixRibuan.join('.');
            }
            $('#kodeUnik_tampil').val('Rp '+codeUnixRupiah+',00');
        }
    });
    
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?InformationPemilikRek",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(InformationPemilikRek) { 
            var PemilikRek = jQuery.parseJSON(InformationPemilikRek);
            var PemilikRekening = PemilikRek[0].pemilik_rekening;
            $('#PemilikRekening').text(PemilikRekening);
        }
    });

    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?informationNumberRek",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(informationNumberRek) { 
            var NumberRek = jQuery.parseJSON(informationNumberRek);
            var NumberRekening = NumberRek[0].number_rekening;
            $('#NumberRekening').text(NumberRekening);
        }
    });

    $('#confirmationButton').on('click', function(){
        var callIDMethod = $('#id_metode_pembayaran').val();
        $('#id_metode_pembayaran_call_back').val(callIDMethod);
        var callIDMethodToAction =  $('#id_metode_pembayaran_call_back').val();
        if(callIDMethodToAction == '1'){
            var data = $("#confirmationFormPicHalu").serialize();
            $.ajax({
                type : 'POST',
                url  : '../../../conn/data2/cartProcess/cartProcess.php/?confirmationFormPicHaluLinkAja',
                data : data,
                beforeSend: function()
                { 
                  $("#error").fadeOut();
                  $("#btnCancelConfirmationDetailPayment").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
                }, 
                success :  function(response)
                {
                  if(response == "confirmationFormPicHaluSuccess"){
                    location.reload();
                  }
                  else{

                  }
                }    
            });
            return false;
        }
        else{
            var data = $("#confirmationFormPicHalu").serialize();
            $.ajax({
                type : 'POST',
                url  : '../../../conn/data2/cartProcess/cartProcess.php/?confirmationFormPicHalu',
                data : data,
                beforeSend: function()
                { 
                  $("#error").fadeOut();
                  $("#btnCancelConfirmationDetailPayment").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
                }, 
                success :  function(response)
                {
                  if(response == "confirmationFormPicHaluSuccess"){
                    location.reload();
                  }
                  else{

                  }
                }    
            });
            return false;
        } 
    });
});
