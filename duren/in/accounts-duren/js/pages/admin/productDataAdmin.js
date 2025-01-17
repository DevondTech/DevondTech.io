
$(document).ready(function(){
  
    var table = $('#dataProduk').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": "../../../conn/data2/product/product_data.php",
      "columnDefs": [ {
       "searchable": false,
       "orderable": false,
       "targets": -1,
       "data": null,
       "defaultContent": "<center><button class='buttonDetail-Table tblDetail' style='margin-bottom: 10px;' type='submit' >Detail Data</button><form method='POST'>  <button id='HapusData' class='buttonDelete-Table hapus-data'>Hapus Data</button></form></center>"
    },
    {
      "order": [[ 2, "asc" ]],
      "processing": true,
      "serverSide": true,
    }]
  });

  table.on( 'order.dt search.dt', function(){
      table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          cell.innerHTML = i+1;
      } );
  }).draw();
  $('#buttonCancelCreate').on('click',function(){
    $('#createDataUserSlide').attr('style','display:none;');
    $('#nama_produk').val('');
    $('#detail1_produk').val('');
    $('#detail2_produk').val('');
    $('#jumlah_stok').val('');
  });
  $('#createNewDataProduct').on('click',function(e){
    $('#createDataUserSlide').attr('style','display:block;');
    $('#createNewDataProduct').attr('style','display:none;');
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    $.ajax({
      type: "GET",
      url: "../../../conn/data2/product/jenis_product_data.php/?callIDJenisProduk",
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
    $.ajax({
      type: "GET",
      url: "../../../conn/data2/product/satuan_product_data.php/?callIDSatuanProduct",
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function(callIDSatuanProduct) { 
        var DataSatuanProduct = jQuery.parseJSON(callIDSatuanProduct);
        var html = '';
          for(var count = 0; count < DataSatuanProduct.length; count++)
          {
            html += '<option value="'+DataSatuanProduct[count].id_satuan_produk+'">'+DataSatuanProduct[count].satuan_produk+'</option>';
          }
        $('#id_satuan_produk').html(html);
      }
    });
    $.ajax({
      type: "GET",
      url: "../../../conn/data2/product/berat_produk.php/?callIDBeratProduk",
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function(callIDJenisProduk) { 
        var DataJenisProduk = jQuery.parseJSON(callIDJenisProduk);
        var html = '';
          for(var count = 0; count < DataJenisProduk.length; count++)
          {
            html += '<option value="'+DataJenisProduk[count].id_berat_produk+'">'+DataJenisProduk[count].teks_berat_produk+'</option>';
          }
        $('#id_berat_produk').html(html);
      }
    });
  });

  $('#btnCancelCreatedDataProduct').on('click', function(e){
    $('#createNewDataProduct').attr('style','display:block;');
    $('#createDataUserSlide').attr('style','display:none;');
    $('#nama_produk').val('');
    $('#detail1_produk').val('');
    $('#detail2_produk').val('');
    $('#jumlah_stok').val('');
  });
  
  $('#btnCreatedDataProduct').on('click',function(e){
    var nama_produk = $('#nama_produk').val();
    var id_jenis_produk = $('#id_jenis_produk').val();
    var detail1_produk = $('#detail1_produk').val();
    var detail2_produk = $('#detail2_produk').val();
    var jumlah_stok = $('#jumlah_stok').val();
    
    if(nama_produk == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Nama Produk",
        type: "error"
      });
    }  
    else if(detail1_produk == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Detail produk",
        type: "error"
      });
    }  
    else if(jumlah_stok == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Stok Produk",
        type: "error"
      });
    }  
    else if(nama_produk != ''){
      var data = $("#createDataProduct").serialize();
      $.ajax({
         type : 'POST',
         url  : '../../../conn/data2/product/product_data.php/?createDataProduct',
         data : data,
          success :  function(data)
          { 
            $("#btnCreatedDataProduct").html('SIMPAN');
            alert('Data Berhasil Disimpan');
            $('#nama_produk').val('');
            $('#detail1_produk').val('');
            $('#detail2_produk').val('');
            $('#jumlah_stok').val('');
            table.ajax.reload();      
          } 
      });
      return false;
    }      
  });

  /*$('#createUpdateStokProduct').on('click',function(e){
    
    $.ajax({
      type: "GET",
      url: "../../../conn/data2/product/product_select_data.php/?callIDProduct",
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function(callIDProduct) { 
        var DataProduct = jQuery.parseJSON(callIDProduct);
        var html = '';
          for(var count = 0; count < DataProduct.length; count++)
          {
            html += '<option value="'+DataProduct[count].id_produk+'">'+DataProduct[count].nama_produk+'</option>';
          }
        $('#id_produk').html(html);
      }
    });
  });
  */

  $('#dataProduk tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[0];
    /*console.log(id);*/
    $('#dataProdukPage').load('productDataDetail.php?id='+id);
  });
  $('#dataProduk tbody').on( 'click', '.hapus-data', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var confirmation = confirm("Anda yakin akan menghapus item ini?");
    if (confirmation){
      var id = data[0];
      $.ajax({
        type:"POST",
        url:'../../../conn/data2/product/product_data.php/?deleteDataProduct='+id,
        data:data,
        success:function(data){
          if(data.success){
           table.ajax.reload();
           alert("Data berhasil dihapus");
          }
          else{
          alert('error while update data');
          }
        }
      });
    }
    else {
      alert("Data tidak dihapus!");
    } 
  });
 
});






