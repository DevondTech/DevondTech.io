$(window).on('load',function(e){
	
    $("#content-profile").load("profile.php");
	$.ajax({
		
     	type: "GET",
     	url: "conn/data2/durianIndexCust.php/?viewDataDurianIndexCust",
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(viewDataDurianIndexCustCallBack) { 
		
 			var DataDuren = jQuery.parseJSON(viewDataDurianIndexCustCallBack);
 			var print_nama_produk = DataDuren[0].nama_produk;
 			var print_detail1_produk = DataDuren[0].detail1_produk;
 			var print_detail2_produk = DataDuren[0].detail2_produk;
 			var print_harga = DataDuren[0].harga;
 			var print_gambar1_produk = DataDuren[0].gambar1_produk;
 			var print_gambar2_produk = DataDuren[0].gambar2_produk;
 			var print_gambar3_produk = DataDuren[0].gambar3_produk;
 			var print_gambar4_produk = DataDuren[0].gambar4_produk;
 			var print_persentase_penilaian = DataDuren[0].persentase_penilaian;
 			var print_rata_rata_bintang_penilaian = DataDuren[0].rata_rata_bintang_penilaian;
			
			/*console.log(DataDuren);
			console.log(print_rata_rata_bintang_penilaian);*/
			
            $('#insert_nama_produk').text(print_nama_produk);
            $('#insert_detail1_produk').text(print_detail1_produk);
            $('#insert_detail2_produk').text(print_detail2_produk);
            $('#insert_harga').text(print_harga);
			$('#insert_persentase_penilaian').text(print_persentase_penilaian);
            $('#insert_rata_rata_bintang_penilaian').text(print_rata_rata_bintang_penilaian);
			
            var PrintDetail_DataFotoNull = 'in/accounts-duren/images/seimpleProduk.png';
            if(print_gambar1_produk == '' || print_gambar1_produk == null){
                $('#print_gambar1_produk').attr('src', PrintDetail_DataFotoNull);
            }
            else{
                $('#print_gambar1_produk').attr('src', print_gambar1_produk);
            } 
            if(print_gambar2_produk == '' || print_gambar2_produk == null){
                $('#print_gambar2_produk').attr('src', PrintDetail_DataFotoNull);
            }
            else{
                $('#print_gambar2_produk').attr('src', print_gambar2_produk);
            } 
            if(print_gambar3_produk == '' || print_gambar3_produk == null){
                $('#print_gambar3_produk').attr('src', PrintDetail_DataFotoNull);
            }
            else{
                $('#print_gambar3_produk').attr('src', print_gambar3_produk);
            }
            if(print_gambar4_produk == '' || print_gambar4_produk == null){
                $('#print_gambar4_produk').attr('src', PrintDetail_DataFotoNull);
            }
            else{
                $('#print_gambar4_produk').attr('src', print_gambar4_produk);
            }   
        }
	});

    $.ajax({
        type: "GET",
        url: "conn/data2/durianIndexCust.php/?viewDataMedsosFB",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(viewDataMedsosFBCallBack) { 
            var DataMedsosFB = jQuery.parseJSON(viewDataMedsosFBCallBack);
            var print_nama_medsosFB = DataMedsosFB[0].nama_medsos;
            var print_link_medsosFB = DataMedsosFB[0].link_medsos;
            $('#insert_nama_medsosFB').text(print_nama_medsosFB);
            $('#insert_link_medsosFB').text(print_link_medsosFB);
        }
    });

    $.ajax({ 
        type: "GET",
        url: "conn/data2/durianIndexCust.php/?viewDataMedsosIG",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(viewDataMedsosIGCallBack) { 
            var DataMedsosIG = jQuery.parseJSON(viewDataMedsosIGCallBack);
            var print_nama_medsosIG = DataMedsosIG[0].nama_medsos;
            var print_link_medsosIG = DataMedsosIG[0].link_medsos;
            $('#insert_nama_medsosIG').text(print_nama_medsosIG);
            $('#insert_link_medsosIG').text(print_link_medsosIG);
        }
    });

    $.ajax({
        type: "GET",
        url: "conn/data2/durianIndexCust.php/?viewDataMedsosWA",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(viewDataMedsosWACallBack) { 
            var DataMedsosWA = jQuery.parseJSON(viewDataMedsosWACallBack);
            var print_nama_medsosWA = DataMedsosWA[0].nama_medsos;
            var print_link_medsosWA = DataMedsosWA[0].link_medsos;
            $('#insert_nama_medsosWA').text(print_nama_medsosWA);
            $('#insert_link_medsosWA').text(print_link_medsosWA);
        }
    });

    $.ajax({
        type: "GET",
        url: "conn/data2/durianIndexCust.php/?viewDataMedsosTW",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(viewDataMedsosTWCallBack) { 
            var DataMedsosTW = jQuery.parseJSON(viewDataMedsosTWCallBack);
            var print_nama_medsosTW = DataMedsosTW[0].nama_medsos;
            var print_link_medsosTW = DataMedsosTW[0].link_medsos;
            $('#insert_nama_medsosTW').text(print_nama_medsosTW);
            $('#insert_link_medsosTW').text(print_link_medsosTW);
        }
    });

    $.ajax({
        type: "GET",
        url: "conn/data2/durianIndexCust.php/?viewDataAboutUS",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(viewDataAboutUSCallBack) { 
            var DataAboutUS = jQuery.parseJSON(viewDataAboutUSCallBack);
            var print_alamat = DataAboutUS[0].alamat;
            var print_nomor_hp1 = DataAboutUS[0].nomor_hp1;
            var print_nomor_hp2 = DataAboutUS[0].nomor_hp2;
            var print_email = DataAboutUS[0].email;
            $('#insert_alamat').text(print_alamat);
            $('#insert_nomor_hp1').text(print_nomor_hp1);
            $('#insert_nomor_hp2').text(print_nomor_hp2);
            $('#insert_email').text(print_email);
        }
    });
});