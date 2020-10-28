$('document').ready(function(){ 
  $('#btnUpdateDataUser').on('click',function(e){

  var nama_lengkapUpdate = $('#nama_lengkapUpdate').val();
  var nomor_hpUpdate = $('#nomor_hpUpdate').val();
  var id_jenis_kelaminUpdate = $('#id_jenis_kelaminUpdate').val();
  var tanggal_lahirUpdate = $('#tanggal_lahirUpdate').val();
  var alamatUpdate = $('#alamatUpdate').val();
  var negaraUpdate = $('#negaraUpdate').val();  
  var provinsiUpdate = $('#provinsiUpdate').val();
  var kotaUpdate = $('#kotaUpdate').val();
  var kecamatanUpdate = $('#kecamatanUpdate').val();
  var kelurahanUpdate = $('#kelurahanUpdate').val();
  var kode_posUpdate = $('#kode_posUpdate').val();

  if(nama_lengkapUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Nama Lengkap",
      type: "error"
    });
  }  
  else if(nomor_hpUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Nomor HP",
      type: "error"
    });
  }  

  else if(tanggal_lahirUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Tanggal Lahir",
      type: "error"
    });
  }  
  else if(alamatUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Alamat",
      type: "error"
    });
  }  
  else if(negaraUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Negara",
      type: "error"
    });
  }  
  else if(kecamatanUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Kecamatan",
      type: "error"
    });
  }  
  else if(kelurahanUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Kelurahan",
      type: "error"
    });
  }  
  else if(kode_posUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Kode POS",
      type: "error"
    });
  }  
  else if(provinsiUpdate == ''){
    swal({
      title:"Gagal Menyimpan",
      text: "Silahkan Isi Data Provinsi",
      type: "error"
    });
  }  
  else if(nama_lengkapUpdate != ''){
     var data = $("#updateDataUser").serialize();
    $.ajax({
        type : 'POST',
        url  : '../../../conn/data2/user_login.php/?updataUserProfile',
        data : data,
        beforeSend: function()
        { 
          $("#error").fadeOut();
          $("#btnUpdateDataUser").html('<span class="glyphicon glyphicon-transfer"></span>   sending process ...');
        }, 
        success :  function(response)
        {
          if(response == "updataUserProfile"){
            $("#btnUpdateDataUser").html('SIMPAN');
            swal({
              title:"Sukses",
              text: "Ubah data berhasil",
              type: "success"
            });
          }
          else{
            swal({
              title:"Gagal Menyimpan",
              text: "Silahkan lengkapi data",
              type: "error"
            });
            $("#btnUpdateDataUser").html('SIMPAN');
            $('#usernameUpdate').val('');
            $('#emailUpdate').val('');
          }
        }    
      });
      return false;
    } 
  });
});
