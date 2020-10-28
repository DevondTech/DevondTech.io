/*function validateForm1() {
  var a = document.forms["gambar1"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}

function validateForm2() {
  var a = document.forms["gambar2"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}

function validateForm3() {
  var a = document.forms["gambar3"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}

function validateForm4() {
  var a = document.forms["gambar4"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}*/

$('#btnuploadGambar1Produk').on('click', function(e){
  var foto = $('#foto1').val();
  if(foto == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan pilih file foto",
      type: "error"
    });
  }  
  else{
    var dataIDFoto1 = $('#id_barangGambar1').val();
    var fd = new FormData();
    var files = $('#foto1')[0].files[0];
    fd.append('foto',files);
    $.ajax({
      url  : '../../../conn/data2/product/upload_gambar.php?uploadGambar1='+dataIDFoto1,
      type : 'POST',
      data : fd,
      contentType: false,
      processData: false,
      beforeSend: function()
      { 
      $("#error").fadeOut();
      $("#btnuploadGambar1Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
      }, 
      success :  function(d)
      { 
        if(d.success){
          swal({
            title:"Sukses",
            text: "Update Data Foto Berhasil",
            type: "success"
          }).then(function() {
            window.location = "../open-admin/?textData=7b7b34345d77bf183a1f960594c40d87daa7c583";
          });
          $("#btnuploadGambar1Produk").html('SIMPAN');
          $('#foto1').val('');
        }  
        else if(d.error){
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar1Produk").html('SIMPAN');
            $('#foto1').val('');
          });
        }
        else{
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar1Produk").html('SIMPAN');
            $('#foto1').val('');
          });
        }           
      } 
    });
    return false;
  }
});

$('#btnuploadGambar2Produk').on('click', function(e){
  var foto = $('#foto2').val();
  if(foto == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan pilih file foto",
      type: "error"
    });
  }  
  else{
    var dataIDFoto2 = $('#id_barangGambar2').val();
    var fd = new FormData();
    var files = $('#foto2')[0].files[0];
    fd.append('foto',files);
    $.ajax({
      url  : '../../../conn/data2/product/upload_gambar.php?uploadGambar2='+dataIDFoto2,
      type : 'POST',
      data : fd,
      contentType: false,
      processData: false,
      beforeSend: function()
      { 
      $("#error").fadeOut();
      $("#btnuploadGambar2Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
      }, 
      success :  function(d)
      { 
        if(d.success){
          swal({
            title:"Sukses",
            text: "Update Data Foto Berhasil",
            type: "success"
          }).then(function() {
            window.location = "../open-admin/?textData=7b7b34345d77bf183a1f960594c40d87daa7c583";
          });
          $("#btnuploadGambar2Produk").html('SIMPAN');
          $('#foto2').val('');
        }  
        else if(d.error){
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar2Produk").html('SIMPAN');
            $('#foto2').val('');
          });
        }
        else{
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar2Produk").html('SIMPAN');
            $('#foto2').val('');
          });
        }           
      } 
    });
    return false;
  }
});

$('#btnuploadGambar3Produk').on('click', function(e){
  var foto = $('#foto3').val();
  if(foto == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan pilih file foto",
      type: "error"
    });
  }  
  else{
    var dataIDFoto3 = $('#id_barangGambar3').val();
    var fd = new FormData();
    var files = $('#foto3')[0].files[0];
    fd.append('foto',files);
    $.ajax({
      url  : '../../../conn/data2/product/upload_gambar.php?uploadGambar3='+dataIDFoto3,
      type : 'POST',
      data : fd,
      contentType: false,
      processData: false,
      beforeSend: function()
      { 
      $("#error").fadeOut();
      $("#btnuploadGambar3Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
      }, 
      success :  function(d)
      { 
        if(d.success){
          swal({
            title:"Sukses",
            text: "Update Data Foto Berhasil",
            type: "success"
          }).then(function() {
            window.location = "../open-admin/?textData=7b7b34345d77bf183a1f960594c40d87daa7c583";
          });
          $("#btnuploadGambar3Produk").html('SIMPAN');
          $('#foto3').val('');
        }  
        else if(d.error){
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar3Produk").html('SIMPAN');
            $('#foto3').val('');
          });
        }
        else{
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar3Produk").html('SIMPAN');
            $('#foto3').val('');
          });
        }           
      } 
    });
    return false;
  }
});

$('#btnuploadGambar4Produk').on('click', function(e){
  var foto = $('#foto4').val();
  if(foto == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan pilih file foto",
      type: "error"
    });
  }  
  else{
    var dataIDFoto4 = $('#id_barangGambar4').val();
    var fd = new FormData();
    var files = $('#foto4')[0].files[0];
    fd.append('foto',files);
    $.ajax({
      url  : '../../../conn/data2/product/upload_gambar.php?uploadGambar4='+dataIDFoto4,
      type : 'POST',
      data : fd,
      contentType: false,
      processData: false,
      beforeSend: function()
      { 
      $("#error").fadeOut();
      $("#btnuploadGambar4Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
      }, 
      success :  function(d)
      { 
        if(d.success){
          swal({
            title:"Sukses",
            text: "Update Data Foto Berhasil",
            type: "success"
          }).then(function() {
            window.location = "../open-admin/?textData=7b7b34345d77bf183a1f960594c40d87daa7c583";
          });
          $("#btnuploadGambar4Produk").html('SIMPAN');
          $('#foto4').val('');
        }  
        else if(d.error){
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar4Produk").html('SIMPAN');
            $('#foto4').val('');
          });
        }
        else{
          swal({
            title:"Gagal Menyimpan",
            text: "Silahkan pilih file type foto",
            type: "error"
          }).then(function() {
            $("#btnuploadGambar4Produk").html('SIMPAN');
            $('#foto4').val('');
          });
        }           
      } 
    });
    return false;
  }
});