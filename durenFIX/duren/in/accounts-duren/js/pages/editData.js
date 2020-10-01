$('document').ready(function(){ 
  $('#btnUpdateDataUser').on('click',function(e){

  var nama_lengkapUpdate = $('#nama_lengkapUpdate').val();
  var nomor_hpUpdate = $('#nomor_hpUpdate').val();
  var id_jenis_kelaminUpdate = $('#id_jenis_kelaminUpdate').val();
  var tanggal_lahirUpdate = $('#tanggal_lahirUpdate').val();
  var alamatUpdate = $('#alamatUpdate').val();
  var negaraUpdate = $('#negaraUpdate').val();  
  var provinsiUpdate = $('#provinsiUpdate').val();
  var kabupatenUpdate = $('#kabupatenUpdate').val();
  var kotaUpdate = $('#kotaUpdate').val();
  var kecamatanUpdate = $('#kecamatanUpdate').val();
  var kelurahanUpdate = $('#kelurahanUpdate').val();
  var kode_posUpdate = $('#kode_posUpdate').val();


  if(nama_lengkapUpdate == ''){
    alert('Silahkan Isi Data Nama Lengkap')
  }  
  else if(nomor_hpUpdate == ''){
    alert('Silahkan Isi Data Nomor HP')
  }  

  else if(tanggal_lahirUpdate == ''){
    alert('Silahkan Isi Data Tanggal Lahir')
  }  
  else if(alamatUpdate == ''){
    alert('Silahkan Isi Data Alamat')
  }  
  else if(negaraUpdate == ''){
    alert('Silahkan Isi Data Negara')
  }  
  else if(kabupatenUpdate == ''){
    alert('Silahkan Isi Data Kabupaten')
  }  
  else if(kecamatanUpdate == ''){
    alert('Silahkan Isi Data Kecamatan')
  }  
  else if(kelurahanUpdate == ''){
    alert('Silahkan Isi Data Kelurahan')
  }  
  else if(kode_posUpdate == ''){
    alert('Silahkan Isi Data Kode Pos')
  }  
  else if(provinsiUpdate == ''){
    alert('Silahkan Isi Data Provinsi')
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
            alert('Ubah data berhasil');
            //location.reload();
          }
          else{
            alert('Silahkan lengkapi data');
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
