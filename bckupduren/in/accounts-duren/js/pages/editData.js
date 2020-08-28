$(document).ready(function () {
	$.ajax({
     	type: "GET",
     	url: "../../../conn/data2/user_data.php/?callDetailUserDatas",
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(callDetailUserDatas) { 

 			var DataUser = jQuery.parseJSON(callDetailUserDatas);
 			var EditDataIdUser = DataUser[0].id_user;
 			/*var EditDataUserName = DataUser[0].username;*/
 			var EditDataNamaLengkap = DataUser[0].nama_lengkap;
 			/*var EditDataEmail = DataUser[0].email;*/
 			var EditDataFoto = DataUser[0].foto;
      var EditDataNomorHP = DataUser[0].nomor_hp;
      var EditDataJenisKelamin = DataUser[0].id_jenis_kelamin;
      var EditDataTanggalLahir = DataUser[0].tanggal_lahir;
      var EditDataAlamat = DataUser[0].alamat;
      var EditDataNegara = DataUser[0].negara;
      var EditDataProvinsi = DataUser[0].provinsi;
      var EditDataKabupaten = DataUser[0].kabupaten;
      var EditDataKota = DataUser[0].kota;
      var EditDataKodePos = DataUser[0].kode_pos;
      
      /*$('#usernameUpdate').val(EditDataUserName);*/
      $('#nama_lengkapUpdate').val(EditDataNamaLengkap);
      /*$('#emailUpdate').val(EditDataEmail);*/
      $('#nomor_hpUpdate').val(EditDataNomorHP);
      $('#id_jenis_kelaminUpdate').val(EditDataJenisKelamin);
      $('#tanggal_lahirUpdate').val(EditDataTanggalLahir);
      $('#alamatUpdate').val(EditDataAlamat);
      $('#negaraUpdate').val(EditDataNegara);
      $('#provinsiUpdate').val(EditDataProvinsi);
      $('#kabupatenUpdate').val(EditDataKabupaten);
      $('#kotaUpdate').val(EditDataKota);
      $('#kode_posUpdate').val(EditDataKodePos);

      var DataFotoNull = '../images/userProfile.png';
      if(EditDataFoto == '' || EditDataFoto == null){
          $('#fotoOnProfile').attr('src', DataFotoNull);

      }
      else{
          $('#fotoOnProfile').attr('src', EditDataFoto);
      } 
    
	   }
	});
});



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
  else if(kotaUpdate == ''){
    alert('Silahkan Isi Data Kota')
  }  
  else if(kode_posUpdate == ''){
    alert('Silahkan Isi Data Kode Pos')
  }  
  else if(provinsiUpdate == ''){
    alert('Silahkan Isi Data Provinsi')
  }  

  else if(nama_lengkapUpdate != ''){
     var data = $("#updateDataUser").serialize();
     /*console.log(data);*/
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
           /* $('#kabupatenUpdate').val('');
            $('#provinsiUpdate').val('');
            $('#tanggal_lahirUpdate').val('');
            $('#nama_lengkapUpdate').val('');
            $('#nomor_hpUpdate').val('');
            $('#alamatUpdate').val('');
            $('#negaraUpdate').val('');
            $('#kotaUpdate').val('');
            $('#kode_posUpdate').val('');*/
            location.reload();
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
