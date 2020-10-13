$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
    var id = IDProdukCallBack;
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/cartProcess/cartProcessAdminSelect.php?selectPrintSales='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(selectPrintSales) { 

 			var DataDetailProduk = jQuery.parseJSON(selectPrintSales);
 			var kode_penjualan = DataDetailProduk[0].kode_penjualan; 
 			var waktu_penjualan = DataDetailProduk[0].waktu_penjualan; 
 			var nama_lengkap = DataDetailProduk[0].nama_lengkap; 
 			var email = DataDetailProduk[0].email; 
 			var nomor_hp = DataDetailProduk[0].nomor_hp; 
            var alamat = DataDetailProduk[0].alamat; 
            var negara = DataDetailProduk[0].negara; 
            var provinsi = DataDetailProduk[0].provinsi; 
            var kabupaten = DataDetailProduk[0].kabupaten; 
            var kota = DataDetailProduk[0].kota; 
            var kecamatan = DataDetailProduk[0].kecamatan;
            var kelurahan = DataDetailProduk[0].kelurahan; 
            var kode_pos = DataDetailProduk[0].kode_pos; 
            var nama_produk = DataDetailProduk[0].nama_produk; 
            var jenis_produk = DataDetailProduk[0].jenis_produk; 
            var jumlah_penjualan = DataDetailProduk[0].jumlah_penjualan; 
            var satuan_produk = DataDetailProduk[0].satuan_produk; 
            var teks_berat_produk = DataDetailProduk[0].teks_berat_produk; 
            var ongkos_kirim = DataDetailProduk[0].ongkos_kirim; 
            var total_penjualan = DataDetailProduk[0].total_penjualan; 
            var gambar_bukti_pembayaran = DataDetailProduk[0].gambar_bukti_pembayaran; 
            var nama_pemilik_rekening = DataDetailProduk[0].nama_pemilik_rekening; 
            var tanggal_transfer = DataDetailProduk[0].tanggal_transfer; 
            var no_rekening = DataDetailProduk[0].no_rekening; 
            var bank_asal = DataDetailProduk[0].bank_asal;
            $('#kode_penjualan').val(kode_penjualan); 
            $('#waktu_penjualan').val(waktu_penjualan); 
            $('#nama_lengkap').val(nama_lengkap);
            $('#email').val(email); 
            $('#nomor_hp').val(nomor_hp); 
            $('#alamat').val(alamat+' , Kelurahan '+kelurahan+' , Kecamatan '+kecamatan+' , Kabupaten / Kota '+kota+' , '+provinsi+' , '+negara+' (Kode POS :'+kode_pos+') '); //Data1@dataKonsumen
            $('#jumlah_penjualan').val(jumlah_penjualan+' '+satuan_produk);
            $('#teks_berat_produk').val(teks_berat_produk); 
            $('#nama_pemilik_rekening').val(nama_pemilik_rekening); 
            $('#tanggal_transfer').val(tanggal_transfer);
            $('#no_rekening').val(no_rekening); 
            $('#bank_asal').val(bank_asal); 
            
            var ongkirNumberString = ongkos_kirim.toString(),
                ongkirSisa    = ongkirNumberString.length % 3,
                ongkirRupiah  = ongkirNumberString.substr(0, ongkirSisa),
                ongkirRibuan  = ongkirNumberString.substr(ongkirSisa).match(/\d{3}/g);         
            if (ongkirRibuan) {
                ongkirSeparator = ongkirSisa ? '.' : '';
                ongkirRupiah += ongkirSeparator + ongkirRibuan.join('.');
            }

            var totalNumberString = total_penjualan.toString(),
                totalSisa    = totalNumberString.length % 3,
                totalRupiah  = totalNumberString.substr(0, totalSisa),
                totalRibuan  = totalNumberString.substr(totalSisa).match(/\d{3}/g);         
            if (totalRibuan) {
                totalSeparator = totalSisa ? '.' : '';
                totalRupiah += totalSeparator + totalRibuan.join('.');
            }

            $('#ongkos_kirim').val('Rp '+ongkirRupiah+',00');
            $('#total_penjualan').val('Rp '+totalRupiah+',00');

            var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
            if(gambar_bukti_pembayaran == '' || gambar_bukti_pembayaran == null){
                $('#gambar_bukti_pembayaran').attr('src', PrintDetail_DataFotoNull);
                $('#a_gambar_bukti_pembayaran').attr('href', gambar_bukti_pembayaran);
            }
            else{
                $('#gambar_bukti_pembayaran').attr('src', gambar_bukti_pembayaran);
                $('#a_gambar_bukti_pembayaran').attr('href', gambar_bukti_pembayaran);
            } 
        
	    }
	});
});