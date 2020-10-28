$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentCall",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPayment) { 
            var DataPayment = jQuery.parseJSON(selectCartDataByUserToPayment);
            var gambar_bukti_pembayaran = DataPayment[0].gambar_bukti_pembayaran;
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
            var NamaProduk = DataPayment[0].nama_produk;
            var hargaProduk = DataPayment[0].harga;
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
        }
    });
    
    $('#confirmationButton').on('click', function(){
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
    });
});
