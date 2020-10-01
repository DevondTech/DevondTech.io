$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/lokasi/lokasi.php/?selectDataLocationCity",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectDataLocationCity) { 
      var DataWeight = jQuery.parseJSON(selectDataLocationCity);
      var html = '';
        for(var count = 0; count < DataWeight.length; count++)
        {
          html += '<option value="'+DataWeight[count].id_kota+'">'+DataWeight[count].kota+'</option>';
        }
      $('#kotaUpdate').html(html);
    }
  });
	$.ajax({
     	type: "GET",
     	url: "../../../conn/data2/user_data.php/?callDetailUserDatas",
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(callDetailUserDatas) { 

 			var DataUser = jQuery.parseJSON(callDetailUserDatas);
 			var EditDataIdUser = DataUser[0].id_user;
 			var EditDataNamaLengkap = DataUser[0].nama_lengkap;
 			var EditDataFoto = DataUser[0].foto;
      var EditDataNomorHP = DataUser[0].nomor_hp;
      var EditDataJenisKelamin = DataUser[0].id_jenis_kelamin;
      var EditDataTanggalLahir = DataUser[0].tanggal_lahir;
      var EditDataAlamat = DataUser[0].alamat;
      var EditDataNegara = DataUser[0].negara;
      var EditDataProvinsi = DataUser[0].provinsi;
      var EditDataKabupaten = DataUser[0].kabupaten;
     // var EditDataKota = DataUser[0].id_kota;
      var EditDataKecamatan = DataUser[0].kecamatan;
      var EditDataKelurahan = DataUser[0].kelurahan;
      var EditDataKodePos = DataUser[0].kode_pos;

      
      $('#nama_lengkapUpdate').val(EditDataNamaLengkap);
      $('#nomor_hpUpdate').val(EditDataNomorHP);
      $('#id_jenis_kelaminUpdate').val(EditDataJenisKelamin);
      $('#tanggal_lahirUpdate').val(EditDataTanggalLahir);
      $('#alamatUpdate').val(EditDataAlamat);
      $('#negaraUpdate').val(EditDataNegara);
      $('#provinsiUpdate').val(EditDataProvinsi);
      $('#kabupatenUpdate').val(EditDataKabupaten);
      //$('#id_kota').val(EditDataKota);
      $('#kecamatanUpdate').val(EditDataKecamatan);
      $('#kelurahanUpdate').val(EditDataKelurahan);
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
