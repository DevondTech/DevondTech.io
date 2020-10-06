$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
    var id = IDProdukCallBack;
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/product/product_select_data.php?select='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(select) { 

 			var DataDetailProduk = jQuery.parseJSON(select);
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

         	var gambar1_productView = DataDetailProduk[0].gambar1_produk;
            var gambar2_productView = DataDetailProduk[0].gambar2_produk;
            var gambar3_productView = DataDetailProduk[0].gambar3_produk;
            var gambar4_productView = DataDetailProduk[0].gambar4_produk;

            $('#PrintDetail_nama_produk').val(PrintDetail_nama_produk);
            $('#PrintDetail_detail1_produk').val(PrintDetail_detail1_produk);
            $('#PrintDetail_detail2_produk').val(PrintDetail_detail2_produk);
            $('#PrintDetail_jenis_produk').val(PrintDetail_jenis_produk);
            $('#PrintDetail_jumlah_stok').val(PrintDetail_jumlah_stok);
            $('#PrintDetail_satuan_produk').val(PrintDetail_satuan_produk);
            $('#PrintDetail_harga').val(PrintDetail_harga);
           
            var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
            if(gambar1_productView == '' || gambar1_productView == null){
                $('#gambar1_productView').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#gambar1_productView').attr('src', '../images/produk/'+gambar1_productView);
            } 

            if(gambar2_productView == '' || gambar2_productView == null){
                $('#gambar2_productView').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#gambar2_productView').attr('src','../images/produk/'+gambar2_productView);
            } 

            if(gambar3_productView == '' || gambar3_productView == null){
                $('#gambar3_productView').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#gambar3_productView').attr('src','../images/produk/'+gambar3_productView);
            }

            if(gambar4_productView == '' || gambar4_productView == null){
                $('#gambar4_productView').attr('src', PrintDetail_DataFotoNull);

            }
            else{
                $('#gambar4_productView').attr('src','../images/produk/'+gambar4_productView);
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


            $('#nama_product_ubahSave').on('click',function(e){
            var PrintDetail_nama_produk = $('#PrintDetail_nama_produk').val();
            var id_barang_nama_produk = $('#id_barang_nama_produk').val();
              if(PrintDetail_nama_produk == ''){
                alert('Silahkan Isi Data Nama Produk')
              }  
              else{
                var data = $("#updateNamaProdukForm").serialize();
                /*console.log(data);*/
                $.ajax({
                    type : 'POST',
                    url  : '../../../conn/data2/product/update_product_data.php/?updateNamaProduct',
                    data : data,
                    beforeSend: function()
                    { 
                      $("#error").fadeOut();
                    }, 
                    success :  function(response)
                    {
                      if(response == "Success"){
                        alert('Ubah data berhasil');
                        $("#PrintDetail_nama_produk").prop('enable', false);
                        $("#PrintDetail_nama_produk").prop('disabled', true);
                        $("#PrintDetail_nama_produk").attr('style','background-color:#f1e8e8;color: #505050;');
                        $("#nama_product_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                        $("#nama_product_EditDataDetailProductAdmin").attr('style','display:block;');
                      }
                      else{
                        alert('Ubah data gagal');
                      }
                    }    
                  });
                  return false;
                } 
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

            $('#detail1_produk_ubahSave').on('click',function(e){
            var PrintDetail_detail1_produk = $('#PrintDetail_detail1_produk').val();
            var id_barang_nama_produk = $('#id_barang_nama_produk').val();
              if(PrintDetail_detail1_produk == ''){
                alert('Silahkan Isi Data Nama Produk')
              }  
              else{
                var data = $("#updateDetail1Form").serialize();
                /*console.log(data);*/
                $.ajax({
                    type : 'POST',
                    url  : '../../../conn/data2/product/update_product_data.php/?updateDetail1Form',
                    data : data,
                    beforeSend: function()
                    { 
                      $("#error").fadeOut();
                    }, 
                    success :  function(response)
                    {
                      if(response == "Success"){
                        alert('Ubah data berhasil');
                        $("#PrintDetail_detail1_produk").prop('enable', false);
                        $("#PrintDetail_detail1_produk").prop('disabled', true);
                        $("#PrintDetail_detail1_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                        $("#detail1_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                        $("#detail1_produk_EditDataDetailProductAdmin").attr('style','display:block;');
                      }
                      else{
                        alert('Ubah data gagal');
                      }
                    }    
                  });
                  return false;
                } 
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

            $('#detail2_produk_ubahSave').on('click',function(e){
            var PrintDetail_detail2_produk = $('#PrintDetail_detail2_produk').val();
            var id_barang_nama_produk = $('#id_barang_nama_produk').val();
              if(PrintDetail_detail2_produk == ''){
                alert('Silahkan Isi Data Nama Produk')
              }  
              else{
                var data = $("#updateDetail2Form").serialize();
                /*console.log(data);*/
                $.ajax({
                    type : 'POST',
                    url  : '../../../conn/data2/product/update_product_data.php/?updateDetail2Form',
                    data : data,
                    beforeSend: function()
                    { 
                      $("#error").fadeOut();
                    }, 
                    success :  function(response)
                    {
                      if(response == "Success"){
                        alert('Ubah data berhasil');
                        $("#PrintDetail_detail2_produk").prop('enable', false);
                        $("#PrintDetail_detail2_produk").prop('disabled', true);
                        $("#PrintDetail_detail2_produk").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                        $("#detail2_produk_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                        $("#detail2_produk_EditDataDetailProductAdmin").attr('style','display:block;');
                      }
                      else{
                        alert('Ubah data gagal');
                      }
                    }    
                  });
                  return false;
                } 
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

            $('#jumlah_stok_ubahSave').on('click',function(e){
            var PrintDetail_jumlah_stok = $('#PrintDetail_jumlah_stok').val();
            var id_barang_nama_produk = $('#id_barang_nama_produk').val();
              if(PrintDetail_jumlah_stok == ''){
                alert('Silahkan Isi Data Nama Produk')
              }  
              else{
                var data = $("#updateStokForm").serialize();
                /*console.log(data);*/
                $.ajax({
                    type : 'POST',
                    url  : '../../../conn/data2/product/update_product_data.php/?updateStokForm',
                    data : data,
                    beforeSend: function()
                    { 
                      $("#error").fadeOut();
                    }, 
                    success :  function(response)
                    {
                      if(response == "Success"){
                        alert('Ubah data berhasil');
                        $("#PrintDetail_jumlah_stok").prop('enable', false);
                        $("#PrintDetail_jumlah_stok").prop('disabled', true);
                        $("#PrintDetail_jumlah_stok").attr('style','background-color:#f1e8e8;color: #505050;');
                        $("#jumlah_stok_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                        $("#jumlah_stok_EditDataDetailProductAdmin").attr('style','display:block;');
                      }
                      else{
                        alert('Ubah data gagal');
                      }
                    }    
                  });
                  return false;
                } 
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

            $('#harga_ubahSave').on('click',function(e){
            var PrintDetail_harga = $('#PrintDetail_harga').val();
            var id_barang_nama_produk = $('#id_barang_nama_produk').val();
              if(PrintDetail_harga == ''){
                alert('Silahkan Isi Data Nama Produk')
              }  
              else{
                var data = $("#updateHargaForm").serialize();
                /*console.log(data)*/;
                $.ajax({
                    type : 'POST',
                    url  : '../../../conn/data2/product/update_product_data.php/?updateHargaForm',
                    data : data,
                    beforeSend: function()
                    { 
                      $("#error").fadeOut();
                    }, 
                    success :  function(response)
                    {
                      if(response == "Success"){
                        alert('Ubah data berhasil');
                        $("#PrintDetail_harga").prop('enable', false);
                        $("#PrintDetail_harga").prop('disabled', true);
                        $("#PrintDetail_harga").attr('style','background-color:#f1e8e8;color: #505050;');
                        $("#harga_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                        $("#harga_EditDataDetailProductAdmin").attr('style','display:block;');
                      }
                      else{
                        alert('Ubah data gagal');
                      }
                    }    
                  });
                  return false;
                } 
            });
            
	    }
	});
});