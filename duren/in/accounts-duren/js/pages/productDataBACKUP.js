$('#createNewDataProduct').on('click',function(e){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/product_data.php/?callIDJenisProduk",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(callIDJenisProduk) { 
      var DataJenisProduk = jQuery.parseJSON(callIDJenisProduk);
      var html = '';
        for(var count = 0; count < DataJenisProduk.length; count++)
        {
          html += '<option value="'+DataJenisProduk[count].id_jenis_produk+'">'+DataJenisProduk[count].jenis_produk+'</option>';
        }
      $('#id_jenis_produk').html(html);
    }
  });
});

$('#btnCreatedDataProduct').on('click',function(e){
  var nama_produk = $('#nama_produk').val();
  var id_jenis_produk = $('#id_jenis_produk').val();
  var detail1_produk = $('#detail1_produk').val();
  var detail2_produk = $('#detail2_produk').val();
 /* var gambar1_produk = $('#gambar1_produk').val();
  var gambar2_produk = $('#gambar2_produk').val();
  var gambar3_produk = $('#gambar3_produk').val();
  var gambar4_produk = $('#gambar4_produk').val();
  var gambar5_produk = $('#gambar5_produk').val();*/
  
  if(nama_produk == ''){
    alert('Silahkan Isi Data Nama Produk')
  }  
  else if(detail1_produk == ''){
    alert('Silahkan Isi Detail produk')
  }  
  else if(nama_produk != ''){

    var data = $("#createDataProduct").serialize();
    console.log(data);
    $.ajax({
       type : 'POST',
       url  : '../../../conn/data2/product_data.php/?createDataProduct',
/*       data : data+'&gambar1_produk='+encodeURIComponent(gambar1_produk)+'&gambar2_produk='+encodeURIComponent(gambar2_produk)+'&gambar3_produk='+encodeURIComponent(gambar3_produk)+'&gambar4_produk='+encodeURIComponent(gambar4_produk)+'&gambar5_produk='+encodeURIComponent(gambar5_produk),*/
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btnCreatedDataProduct").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
       }, 
        success :  function(response)
        { 
          if(response == "dataCheck"){
            $("btnCreatedDataProduct").html('SIMPAN');
            alert('Data Gagal Disimpan');
            $('#nama_produk').val('');
            $('#detail1_produk').val('');
            $('#detail2_produk').val('');
          }     
          else{
            if(response == "Success"){
            $("#btnCreatedDataProduct").html('SIMPAN');
            alert('Data Berhasil Disimpan');
            $('#nama_produk').val('');
            $('#detail1_produk').val('');
            $('#detail2_produk').val('');
            }
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnCreatedDataProduct").html('SIMPAN');
              });
            } 
          }          
        } 
      });
    return false;
  }      
});

