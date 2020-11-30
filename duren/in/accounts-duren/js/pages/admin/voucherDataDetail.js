$(document).ready(function(){
    var IDVoucherCallBack = $('#a').val();
    var id = IDVoucherCallBack;
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/voucher/voucherAdminCrud.php/?selectPrintVoucher='+id,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectPrintVoucher) { 

            var DataDetailVoucher = jQuery.parseJSON(selectPrintVoucher);
            //var id_voucher = DataDetailVoucher[0].id_voucher; 
            var kode_voucher = DataDetailVoucher[0].kode_voucher;
            var judul_voucher = DataDetailVoucher[0].judul_voucher; 
            var total_voucher = DataDetailVoucher[0].total_voucher;
            var waktu_berlaku = DataDetailVoucher[0].waktu_berlaku; 
            var gambar_voucher = DataDetailVoucher[0].gambar_voucher;
            var jenis_voucher = DataDetailVoucher[0].jenis_voucher;
            var status_kirim_konsumen = DataDetailVoucher[0].status_kirim_konsumen;
            //$('#id_voucher').val(id_voucher);
            $('#kode_voucher_detail').val(kode_voucher); 
            $('#judul_voucher_detail').val(judul_voucher); 
            $('#waktu_berlaku_detail').val(waktu_berlaku);
            $('#jenis_voucher_detail').val(jenis_voucher); 
            $('#status_kirim_konsumen_detail').val(status_kirim_konsumen); 


            var totalVoucherNumberString = total_voucher.toString(),
                totalVoucherSisa    = totalVoucherNumberString.length % 3,
                totalVoucherRupiah  = totalVoucherNumberString.substr(0, totalVoucherSisa),
                totalVoucherRibuan  = totalVoucherNumberString.substr(totalVoucherSisa).match(/\d{3}/g);         
            if (totalVoucherRibuan) {
                totalVoucherSeparator = totalVoucherSisa ? '.' : '';
                totalVoucherRupiah += totalVoucherSeparator + totalVoucherRibuan.join('.');
            }

            $('#total_voucher_detail').val('Rp '+totalVoucherRupiah+',00');
          
            var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
            if(gambar_voucher == '' || gambar_voucher == null){
                $('#gambar_voucher_detail').attr('src', PrintDetail_DataFotoNull);
                //$('#a_gambar_voucher').attr('href', gambar_voucher);
            }
            else{
                $('#gambar_voucher_detail').attr('src', gambar_voucher);
                $('#a_gambar_voucher_detail').attr('href', gambar_voucher);
            } 
        }
    });
});