
$(document).ready(function(){
  $.ajax({
    type: "POST",
    url: "../../../conn/data2/product_data.php/?callProductDataTable",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(callProductDataPrintTable) { 
      var callProductDataPrintTable = jQuery.parseJSON(callProductDataPrintTable);

      /*console.log(callProductDataPrintTable);*/
      var table = $('#dataProduk').DataTable({ 
      "data" : callProductDataPrintTable,
      "columns" : [
        {
          "data" : "id_produk"
        },
        {
          "data" : "nama_produk"
        },
        {
          "data" : "jenis_produk"
        },
        {
          "data" : "jumlah_stok"
        },
        {
          "data" : "id_produk"
        },
        ]
      
      });
      table.on( 'order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
      }).draw();

      $('#check').on('click',function(e){
        table.ajax.reload();
      });
    }
  });
  
  


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
    
    if(nama_produk == ''){
      alert('Silahkan Isi Data Nama Produk')
    }  
    else if(detail1_produk == ''){
      alert('Silahkan Isi Detail produk')
    }  
    else if(nama_produk != ''){

      var data = $("#createDataProduct").serialize();
      /*console.log(data);*/
      $.ajax({
         type : 'POST',
         url  : '../../../conn/data2/product_data.php/?createDataProduct',
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
              table.ajax.reload();
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
});




