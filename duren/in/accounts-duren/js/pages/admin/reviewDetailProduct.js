$(document).ready(function(){
	var callIDDataReviewProduct = $('#a').val();
    var id = callIDDataReviewProduct;
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/product/detail_review_product.php?callDataReviewProduct='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(callDataReviewProduct) { 
 			var DataDetailProduk = jQuery.parseJSON(callDataReviewProduct);
 			var id_penilaian_produk = DataDetailProduk[0].id_penilaian_produk; 
 			var tanggal_penilaian_produk = DataDetailProduk[0].tanggal_penilaian_produk; 
 			var nama_lengkap = DataDetailProduk[0].nama_lengkap; 
            var nama_produk = DataDetailProduk[0].nama_produk; 
 			var bintang_penilaian_produk = DataDetailProduk[0].bintang_penilaian_produk; 
 			var komentar = DataDetailProduk[0].komentar; 
            var foto = DataDetailProduk[0].foto; 

            $('#tanggal_penilaian_produk').val(tanggal_penilaian_produk);
            $('#nama_lengkap').val(nama_lengkap);
            $('#bintang_penilaian_produk').val(bintang_penilaian_produk);
            $('#komentar').val(komentar);
            $('#nama_produk').val(nama_produk);
            $('#komentar').val(komentar);

            var picHalu = '../images/userProfile.png';
            if(foto == '' || foto == null){
                $('#foto').attr('src', picHalu);
                $('#fotoDownload').attr('href', picHalu);
            }
            else{
                $('#foto').attr('src', foto);
                $('#fotoDownload').attr('href', foto);
            }
        }
    });
});
