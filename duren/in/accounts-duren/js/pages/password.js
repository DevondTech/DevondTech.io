
/*update password submit*/

$('document').ready(function()
{ 
	$('#SavePassword').on('click',function(e){
  var passwordUpdate = $('#passwordUpdate').val();
  var passwordUpdate_re = $('#passwordUpdate_re').val();
 
  if(passwordUpdate == ''){
    alert('Silahkan Isi Data Password')
  }  
  else if(passwordUpdate_re == ''){
    alert('Silahkan Isi Data Ulangi Password')
  }  
  else if(passwordUpdate_re != passwordUpdate){
    alert('Password Tidak Sama')
  }  
  else if(passwordUpdate != ''){
     var data = $("#updatePassword").serialize();
     /*console.log(data);*/
    $.ajax({

        type : 'POST',
        url  : '../../../conn/data2/user_login.php/?updatePassword',
        data : data,
        beforeSend: function()
        { 
          $("#error").fadeOut();
          $("#SavePassword").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
        }, 
        success :  function(response)
        {
          if(response == "updatePassword"){
            $("#SavePassword").html('SIMPAN');
            alert('Ubah password berhasil');
            $('#passwordUpdate').val('');
            $('#passwordUpdate_re').val('');
          }
          else
          {
            alert('Ubah password gagal, silahkan coba lagi');
            $("#SavePassword").html('SIMPAN');
            $('#passwordUpdate').val('');
            $('#passwordUpdate_re').val('');
          }
        }    
	    });
	    return false;
 	  } 
  });
});




/*update data profile user*/



/*update data profile user*/

/*
$('document').ready(function()
{ 
  $('#btnUpdateDataUser').on('click',function(e){

  var usernameUpdate = $('#usernameUpdate').val();
  var nama_lengkapUpdate = $('#nama_lengkapUpdate').val();
  var emailUpdate = $('#emailUpdate').val();
  var nomor_hpUpdate = $('#nomor_hpUpdate').val();
  var id_jenis_kelaminUpdate = $('#id_jenis_kelaminUpdate').val();
  var tanggal_lahirUpdate = $('#tanggal_lahirUpdate').val();
  var alamatUpdate = $('#alamatUpdate').val();
  var negaraUpdate = $('#negaraUpdate').val();  
  var provinsiUpdate = $('#provinsiUpdate').val();
  var kabupatenUpdate = $('#kabupatenUpdate').val();
  var kotaUpdate = $('#kotaUpdate').val();
  var kode_posUpdate = $('#kode_posUpdate').val();

  if(usernameUpdate == ''){
    alert('Silahkan Isi Data Username')
  }  
  else if(nama_lengkapUpdate == ''){
    alert('Silahkan Isi Data Nama Lengkap')
  }  
  else if(emailUpdate == ''){
    alert('Silahkan Isi Data Email')
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
  else if(kotaUpdate == ''){
    alert('Silahkan Isi Data Kota')
  }  
  else if(kode_posUpdate == ''){
    alert('Silahkan Isi Data Kode Pos')
  }  
  else if(provinsiUpdate == ''){
    alert('Silahkan Isi Data Provinsi')
  }  

  else if(usernameUpdate != ''){
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
          if(response == "kode404"){
            alert('Perbarui email / username, sudah dipakai');
            $('#usernameUpdate').val('');
            $('#emailUpdate').val('');
          }
          else
          {
            if(response == "updataUserProfile"){
              $("#btnUpdateDataUser").html('SIMPAN');
              alert('Ubah data berhasil');
              $('#usernameUpdate').val('');
              $('#emailUpdate').val('');
              $('#kabupatenUpdate').val('');
              $('#provinsiUpdate').val('');
              $('#tanggal_lahirUpdate').val('');
              $('#nama_lengkapUpdate').val('');
              $('#nomor_hpUpdate').val('');
              $('#alamatUpdate').val('');
              $('#negaraUpdate').val('');
              $('#kotaUpdate').val('');
              $('#kode_posUpdate').val('');
            }
            else{
              alert('Perbarui email / username, sudah dipakai');
              $("#btnUpdateDataUser").html('SIMPAN');
              $('#usernameUpdate').val('');
              $('#emailUpdate').val('');
            }
          }
        }    
      });
      return false;
    } 
  });
});
*/