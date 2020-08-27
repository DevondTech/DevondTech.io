$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
	console.log("This Page Detail : ID "); 
	console.log(IDProdukCallBack); 
    var id = IDProdukCallBack;
    console.log(id); 
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/product/product_select_data.php?select='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(select) { 

 			var DataDetailProduk = jQuery.parseJSON(select);

            console.log(DataDetailProduk);
 			var PrintDetail_id_produk = DataDetailProduk[0].id_produk;
 			var PrintDetail_nama_produk = DataDetailProduk[0].nama_produk;
 			var PrintDetail_detail1_produk = DataDetailProduk[0].detail1_produk;
 			var PrintDetail_detail2_produk = DataDetailProduk[0].detail2_produk;
 			var PrintDetail_id_produk = DataDetailProduk[0].id_produk;
            var PrintDetail_jenis_produk = DataDetailProduk[0].jenis_produk;
            var PrintDetail_jumlah_stok = DataDetailProduk[0].jumlah_stok;
            var PrintDetail_id_satuan_produk = DataDetailProduk[0].id_satuan_produk;
            var PrintDetail_satuan_produk = DataDetailProduk[0].satuan_produk;
            var PrintDetail_harga = DataDetailProduk[0].harga;

         	var PrintDetail_gambar1_produk = DataDetailProduk[0].gambar1_produk;
            var PrintDetail_gambar2_produk = DataDetailProduk[0].gambar2_produk;
            var PrintDetail_gambar3_produk = DataDetailProduk[0].gambar3_produk;
            var PrintDetail_gambar4_produk = DataDetailProduk[0].gambar4_produk;
         	var PrintDetail_gambar5_produk = DataDetailProduk[0].gambar5_produk;       
            
            $('#PrintDetail_nama_produk').val(PrintDetail_nama_produk);
            $('#PrintDetail_detail1_produk').val(PrintDetail_detail1_produk);
            $('#PrintDetail_detail2_produk').val(PrintDetail_detail2_produk);
            $('#PrintDetail_jenis_produk').val(PrintDetail_jenis_produk);
            $('#PrintDetail_jumlah_stok').val(PrintDetail_jumlah_stok);
            $('#PrintDetail_satuan_produk').val(PrintDetail_id_satuan_produk);
            $('#PrintDetail_harga').val(PrintDetail_harga);
           
            var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
            if(PrintDetail_gambar1_produk == '' || PrintDetail_gambar1_produk == null){
                $('#PrintDetail_gambar1_produk').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#PrintDetail_gambar1_produk').attr('src', PrintDetail_gambar1_produk);
            } 

            if(PrintDetail_gambar2_produk == '' || PrintDetail_gambar2_produk == null){
                $('#PrintDetail_gambar2_produk').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#PrintDetail_gambar2_produk').attr('src', PrintDetail_gambar2_produk);
            } 

            if(PrintDetail_gambar3_produk == '' || PrintDetail_gambar3_produk == null){
                $('#PrintDetail_gambar3_produk').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#PrintDetail_gambar3_produk').attr('src', PrintDetail_gambar3_produk);
            }

            if(PrintDetail_gambar4_produk == '' || PrintDetail_gambar4_produk == null){
                $('#PrintDetail_gambar4_produk').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#PrintDetail_gambar4_produk').attr('src', PrintDetail_gambar4_produk);
            } 

            if(PrintDetail_gambar5_produk == '' || PrintDetail_gambar5_produk == null){
                $('#PrintDetail_gambar5_produk').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#PrintDetail_gambar5_produk').attr('src', PrintDetail_gambar5_produk);
            }

            $("#PrintDetail_nama_produk").attr('style','background-color:#f1e8e8;color: #505050;');
            $("#PrintDetail_detail1_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
            $("#PrintDetail_detail2_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
            $("#PrintDetail_jenis_produk").attr('style','background-color:#f1e8e8;color: #505050;');
            $("#PrintDetail_jumlah_stok").attr('style','background-color:#f1e8e8;color: #505050;');
            $("#PrintDetail_satuan_produk").attr('style','background-color:#f1e8e8;color: #505050;');
            $("#PrintDetail_harga").attr('style','background-color:#f1e8e8;color: #505050;');


            /*Action Button On Edit Save Cancel or Close Edit*/

            /*nama_produk*/

            $('#nama_product_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_nama_produk").prop('enable', true);
                $("#PrintDetail_nama_produk").prop('disabled', false);
                $("#PrintDetail_nama_produk").attr('style','background-color:white;color: black;');
                $("#nama_product_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#nama_product_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#nama_product_ubahCancel').on('click', function(){
                $("#PrintDetail_nama_produk").prop('enable', false);
                $("#PrintDetail_nama_produk").prop('disabled', true);
                $("#PrintDetail_nama_produk").attr('style','background-color:#f1e8e8;color: #505050;');
                $("#nama_product_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#nama_product_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*detail1_produk*/

             $('#detail1_produk_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_detail1_produk").prop('enable', true);
                $("#PrintDetail_detail1_produk").prop('disabled', false);
                $("#PrintDetail_detail1_produk").attr('style','background-color:white;color: black;padding-top: 4px;');
                $("#detail1_produk_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#detail1_produk_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#detail1_produk_ubahCancel').on('click', function(){
                $("#PrintDetail_detail1_produk").prop('enable', false);
                $("#PrintDetail_detail1_produk").prop('disabled', true);
                $("#PrintDetail_detail1_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#detail1_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#detail1_produk_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*detail2_produk*/

             $('#detail2_produk_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_detail2_produk").prop('enable', true);
                $("#PrintDetail_detail2_produk").prop('disabled', false);
                $("#PrintDetail_detail2_produk").attr('style','background-color:white;color: black;padding-top: 4px;');
                $("#detail2_produk_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#detail2_produk_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#detail2_produk_ubahCancel').on('click', function(){
                $("#PrintDetail_detail2_produk").prop('enable', false);
                $("#PrintDetail_detail2_produk").prop('disabled', true);
                $("#PrintDetail_detail2_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#detail2_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#detail2_produk_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*jenis_produk*/

             $('#jenis_produk_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_jenis_produk").prop('enable', true);
                $("#PrintDetail_jenis_produk").prop('disabled', false);
                $("#PrintDetail_jenis_produk").attr('style','background-color:white;color: black;');
                $("#jenis_produk_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#jenis_produk_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#jenis_produk_ubahCancel').on('click', function(){
                $("#PrintDetail_jenis_produk").prop('enable', false);
                $("#PrintDetail_jenis_produk").prop('disabled', true);
                $("#PrintDetail_jenis_produk").attr('style','background-color:#f1e8e8;color: #505050;');
                $("#jenis_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#jenis_produk_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*jumlah_stok*/

             $('#jumlah_stok_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_jumlah_stok").prop('enable', true);
                $("#PrintDetail_jumlah_stok").prop('disabled', false);
                $("#PrintDetail_jumlah_stok").attr('style','background-color:white;color: black;');
                $("#jumlah_stok_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#jumlah_stok_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#jumlah_stok_ubahCancel').on('click', function(){
                $("#PrintDetail_jumlah_stok").prop('enable', false);
                $("#PrintDetail_jumlah_stok").prop('disabled', true);
                $("#PrintDetail_jumlah_stok").attr('style','background-color:#f1e8e8;color: #505050;');
                $("#jumlah_stok_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#jumlah_stok_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*satuan_produk*/

             $('#satuan_produk_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_satuan_produk").prop('enable', true);
                $("#PrintDetail_satuan_produk").prop('disabled', false);
                $("#PrintDetail_satuan_produk").attr('style','background-color:white;color: black;');
                $("#satuan_produk_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#satuan_produk_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#satuan_produk_ubahCancel').on('click', function(){
                $("#PrintDetail_satuan_produk").prop('enable', false);
                $("#PrintDetail_satuan_produk").prop('disabled', true);
                $("#PrintDetail_satuan_produk").attr('style','background-color:#f1e8e8;color: #505050;');
                $("#satuan_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#satuan_produk_EditDataDetailProductAdmin").attr('style','display:block;');
            });





            /*harga*/

             $('#harga_EditDataDetailProductAdmin').on('click', function(){
                $("#PrintDetail_harga").prop('enable', true);
                $("#PrintDetail_harga").prop('disabled', false);
                $("#PrintDetail_harga").attr('style','background-color:white;color: black;');
                $("#harga_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
                $("#harga_EditDataDetailProductAdmin").attr('style','display:none;');
            });

            $('#harga_ubahCancel').on('click', function(){
                $("#PrintDetail_harga").prop('enable', false);
                $("#PrintDetail_harga").prop('disabled', true);
                $("#PrintDetail_harga").attr('style','background-color:#f1e8e8;color: #505050;');
                $("#harga_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#harga_EditDataDetailProductAdmin").attr('style','display:block;');
            });
            
	    }
	});
});