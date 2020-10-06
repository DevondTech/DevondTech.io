$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
    var id = IDProdukCallBack;
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/cartProcess/cartProcessAdminSelect.php?selectPrintProcess='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(selectPrintProcess) { 

 			var DataDetailProduk = jQuery.parseJSON(selectPrintProcess);
 			var kode_pemesanan = DataDetailProduk[0].kode_pemesanan; //Data1@dataKonsumen
 			var waktu_pemesanan = DataDetailProduk[0].waktu_pemesanan; //Data3@dataPemesanan
 			var nama_lengkap = DataDetailProduk[0].nama_lengkap; //Data1@dataKonsumen
 			var email = DataDetailProduk[0].email; //Data1@dataKonsumen
 			var nomor_hp = DataDetailProduk[0].nomor_hp; //Data1@dataKonsumen
            var alamat = DataDetailProduk[0].alamat; //Data1@dataKonsumen
            var negara = DataDetailProduk[0].negara; //Data1@dataKonsumen
            var provinsi = DataDetailProduk[0].provinsi; //Data1@dataKonsumen
            var kabupaten = DataDetailProduk[0].kabupaten; //Data1@dataKonsumen
            var kota = DataDetailProduk[0].kota; //Data1@dataKonsumen
            var kecamatan = DataDetailProduk[0].kecamatan; //Data1@dataKonsumen
            var kelurahan = DataDetailProduk[0].kelurahan; //Data1@dataKonsumen
            var kode_pos = DataDetailProduk[0].kode_pos; //Data1@dataKonsumen
            var nama_produk = DataDetailProduk[0].nama_produk; //Data2@dataProduk 
            var jenis_produk = DataDetailProduk[0].jenis_produk; //Data2@dataProduk
            var jumlah_pemesanan = DataDetailProduk[0].jumlah_pemesanan; //Data3@dataPemesanan
            var proses_pemesanan = DataDetailProduk[0].proses_pemesanan; //Data3@dataPemesanan
            var satuan_produk = DataDetailProduk[0].satuan_produk; //Data3@dataPemesanan
            var teks_berat_produk = DataDetailProduk[0].teks_berat_produk; //Data3@dataPemesanan
            var gambar_bukti_pembayaran = DataDetailProduk[0].gambar_bukti_pembayaran; //Data4@dataPembayaran
          
            $('#kode_pemesanan').val(kode_pemesanan); //Data1@dataKonsumen
            $('#waktu_pemesanan').val(waktu_pemesanan); //Data3@dataPemesanan
            $('#proses_pemesanan').val(proses_pemesanan); //Data1@dataKonsumen
            $('#nama_lengkap').val(nama_lengkap); //Data1@dataKonsumen
            $('#email').val(email); //Data1@dataKonsumen
            $('#nomor_hp').val(nomor_hp); //Data1@dataKonsumen
            $('#alamat').val(alamat+' , Kelurahan '+kelurahan+' , Kecamatan '+kecamatan+' , Kota '+kota+' , Kabupaten '+kabupaten+' , '+provinsi+' , '+negara+' (Kode POS :'+kode_pos+') '); //Data1@dataKonsumen
            $('#nama_produk').val(nama_produk); //Data2@dataProduk 
            $('#jenis_produk').val(jenis_produk); //Data2@dataProduk 
            $('#jumlah_pemesanan').val(jumlah_pemesanan+' '+satuan_produk); //Data3@dataPemesanan
            $('#teks_berat_produk').val(teks_berat_produk); //Data3@dataPemesanan

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