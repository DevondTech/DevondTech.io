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
});
