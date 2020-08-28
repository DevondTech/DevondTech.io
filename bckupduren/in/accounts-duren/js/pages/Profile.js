$(document).ready(function () {
	$.ajax({
     	type: "GET",
     	url: "../../../conn/data2/user_data.php/?callDetailUserDatas",
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(callDetailUserDatas) { 

 			var DataUser = jQuery.parseJSON(callDetailUserDatas);
 			var DataIdUser = DataUser[0].id_user;
 			var DataUserName = DataUser[0].username;
 			var DataNamaLengkap = DataUser[0].nama_lengkap;
 			var DataEmail = DataUser[0].email;
 			var DataFoto = DataUser[0].foto;
            var DataNomorHP = DataUser[0].nomor_hp;
            var DataJenisKelamin = DataUser[0].jenis_kelamin;
            var DataTanggalLahir = DataUser[0].tanggal_lahir;
            var DataAlamat = DataUser[0].alamat;
            var DataNegara = DataUser[0].negara;
            var DataProvinsi = DataUser[0].provinsi;
            var DataKabupaten = DataUser[0].kabupaten;
            var DataKota = DataUser[0].kota;
            var DataKodePos = DataUser[0].kode_pos;
            
            $('#dataUsername').val(DataUserName);
            $('#dataNamaLengkap').val(DataNamaLengkap);
            $('#dataEmail').val(DataEmail);
            $('#dataNomorHP').val(DataNomorHP);
            $('#dataJenisKelamin').val(DataJenisKelamin);
            $('#dataTanggalLahir').val(DataTanggalLahir);
            $('#dataAlamat').val(DataAlamat);
            $('#dataNegara').val(DataNegara);
            $('#dataProvinsi').val(DataProvinsi);
            $('#dataKabupaten').val(DataKabupaten);
            $('#dataKota').val(DataKota);
            $('#dataKodePos').val(DataKodePos);
    

            var DataFotoNull = '../images/userProfile.png';
            if(DataFoto == '' || DataFoto == null){
                $('#fotoOnProfile').attr('src', DataFotoNull);

            }
            else{
                $('#fotoOnProfile').attr('src', DataFoto);
            } 
	    }
	});
});
