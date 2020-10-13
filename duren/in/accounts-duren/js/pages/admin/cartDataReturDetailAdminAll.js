$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
    var id = IDProdukCallBack;
    console.log(id);
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/cartProcess/cartProcessAdminSelect.php?dataReturCallDataAll='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(dataReturCallDataAll) { 

 			var DataDetailRetur = jQuery.parseJSON(dataReturCallDataAll);
 			var id_retur = DataDetailRetur[0].id_retur; 
 			var kode_retur = DataDetailRetur[0].kode_retur; 
 			var waktu_retur = DataDetailRetur[0].waktu_retur; 
 			var nama_lengkap = DataDetailRetur[0].nama_lengkap; 
 			var pesan_retur = DataDetailRetur[0].pesan_retur; 
            var nomor_hp = DataDetailRetur[0].nomor_hp; 
            var email = DataDetailRetur[0].email;
            var status_retur = DataDetailRetur[0].status_retur;
            var admin_tanggal_transfer = DataDetailRetur[0].admin_tanggal_transfer; 
            var admin_total_pengembalian_dana = DataDetailRetur[0].admin_total_pengembalian_dana;
            var gambar_barang_retur = DataDetailRetur[0].gambar_barang_retur; 
    
            $('#kode_retur').val(kode_retur); 
            $('#waktu_retur').val(waktu_retur); 
            $('#nama_lengkap').val(nama_lengkap); 
            $('#pesan_retur').val(pesan_retur); 
            $('#nomor_hp').val(nomor_hp); 
            $('#email').val(email);
            $('#status_retur').val(status_retur); 
            $('#admin_tanggal_transfer').val(admin_tanggal_transfer);
            $('#admin_total_pengembalian_dana').val(admin_total_pengembalian_dana); 
            $('#gambar_barang_retur').val(gambar_barang_retur); 
            
            if(admin_total_pengembalian_dana == ''){
                var admin_total_pengembalian_dana_new = 0;
            }
            else{
                admin_total_pengembalian_dana_new = admin_total_pengembalian_dana;
            }

            var totalNumberString = admin_total_pengembalian_dana_new.toString(),
                totalSisa    = totalNumberString.length % 3,
                totalRupiah  = totalNumberString.substr(0, totalSisa),
                totalRibuan  = totalNumberString.substr(totalSisa).match(/\d{3}/g);         
            if (totalRibuan) {
                totalSeparator = totalSisa ? '.' : '';
                totalRupiah += totalSeparator + totalRibuan.join('.');
            }

            $('#admin_total_pengembalian_dana').val('Rp '+totalRupiah+',00');

            var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
            if(gambar_barang_retur == '' || gambar_barang_retur == null){
                $('#gambar_barang_retur').attr('src', PrintDetail_DataFotoNull);
            }
            else{
                $('#gambar_barang_retur').attr('src', gambar_barang_retur);
                $('#a_gambar_barang_retur').attr('href', gambar_barang_retur);
            } 
        
	    }
	});
});
