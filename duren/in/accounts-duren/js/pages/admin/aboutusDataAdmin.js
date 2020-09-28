$(document).ready(function(){   
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/companyProfile/about_us_data.php/?alamat',
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(alamatCallBack) { 

 			var DataAlamat = jQuery.parseJSON(alamatCallBack);

 			var PrintDetail_link_alamat = DataAlamat[0].alamat;
            
            $('#PrintDetail_link_alamat').val(PrintDetail_link_alamat);
         
        }
    });       
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/about_us_data.php/?nomorhp1',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(nomorhp1CallBack) { 

            var DataNomorHP1 = jQuery.parseJSON(nomorhp1CallBack);

            var PrintDetail_link_nomor_hp1 = DataNomorHP1[0].nomor_hp1;

            $('#PrintDetail_link_nomor_hp1').val(PrintDetail_link_nomor_hp1);
         
        }
    });       
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/about_us_data.php/?nomorhp2',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(nomorhp2CallBack) { 

            var DataNomorHP2 = jQuery.parseJSON(nomorhp2CallBack);

            var PrintDetail_link_nomor_hp2 = DataNomorHP2[0].nomor_hp2;

            $('#PrintDetail_link_nomor_hp2').val(PrintDetail_link_nomor_hp2);
         
        }
    }); 
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/about_us_data.php/?email',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(emailCallBack) { 

            var DataEmail = jQuery.parseJSON(emailCallBack);

            var PrintDetail_link_email = DataEmail[0].email;
            
            $('#PrintDetail_link_email').val(PrintDetail_link_email);
         
        }
    });             

    /*Alamat edit*/
    $("#alamat_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_alamat").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#alamat_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_alamat").prop('enable', true);
        $("#PrintDetail_link_alamat").prop('disabled', false);
        $("#PrintDetail_link_alamat").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#alamat_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#alamat_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#alamat_ubahCancel').on('click', function(){
        $("#PrintDetail_link_alamat").prop('enable', false);
        $("#PrintDetail_link_alamat").prop('disabled', true);
        $("#PrintDetail_link_alamat").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#alamat_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#alamat_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#alamat_ubahSave').on('click',function(e){
    var PrintDetail_link_alamat = $('#PrintDetail_link_alamat').val();
      if(PrintDetail_link_alamat == ''){
        alert('Silahkan Isi Data Alamat')
      }  
      else{
        var data = $("#updateAlamat").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_about_us_data.php/?updateAlamat',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_alamat").prop('enable', false);
                $("#PrintDetail_link_alamat").prop('disabled', true);
                $("#PrintDetail_link_alamat").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#alamat_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#alamat_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*No HP edit*/
    $("#nomor_hp1_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_nomor_hp1").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#nomor_hp1_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_nomor_hp1").prop('enable', true);
        $("#PrintDetail_link_nomor_hp1").prop('disabled', false);
        $("#PrintDetail_link_nomor_hp1").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#nomor_hp1_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#nomor_hp1_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#nomor_hp1_ubahCancel').on('click', function(){
        $("#PrintDetail_link_nomor_hp1").prop('enable', false);
        $("#PrintDetail_link_nomor_hp1").prop('disabled', true);
        $("#PrintDetail_link_nomor_hp1").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#nomor_hp1_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#nomor_hp1_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#nomor_hp1_ubahSave').on('click',function(e){
    var PrintDetail_link_nomor_hp1 = $('#PrintDetail_link_nomor_hp1').val();
      if(PrintDetail_link_nomor_hp1 == ''){
        alert('Silahkan Isi Data Nomor HP 1')
      }  
      else{
        var data = $("#updateNomorHP1").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_about_us_data.php/?updateNomorHP1',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_nomor_hp1").prop('enable', false);
                $("#PrintDetail_link_nomor_hp1").prop('disabled', true);
                $("#PrintDetail_link_nomor_hp1").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#nomor_hp1_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#nomor_hp1_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*No HP edit*/
    $("#nomor_hp2_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_nomor_hp2").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#nomor_hp2_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_nomor_hp2").prop('enable', true);
        $("#PrintDetail_link_nomor_hp2").prop('disabled', false);
        $("#PrintDetail_link_nomor_hp2").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#nomor_hp2_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#nomor_hp2_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#nomor_hp2_ubahCancel').on('click', function(){
        $("#PrintDetail_link_nomor_hp2").prop('enable', false);
        $("#PrintDetail_link_nomor_hp2").prop('disabled', true);
        $("#PrintDetail_link_nomor_hp2").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#nomor_hp2_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#nomor_hp2_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#nomor_hp2_ubahSave').on('click',function(e){
    var PrintDetail_link_nomor_hp2 = $('#PrintDetail_link_nomor_hp2').val();
      if(PrintDetail_link_nomor_hp2 == ''){
        alert('Silahkan Isi Data Nomor HP 2')
      }  
      else{
        var data = $("#updateNomorHP2").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_about_us_data.php/?updateNomorHP2',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_nomor_hp2").prop('enable', false);
                $("#PrintDetail_link_nomor_hp2").prop('disabled', true);
                $("#PrintDetail_link_nomor_hp2").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#nomor_hp2_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#nomor_hp2_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*Mail edit*/
    $("#email_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_email").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#email_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_email").prop('enable', true);
        $("#PrintDetail_link_email").prop('disabled', false);
        $("#PrintDetail_link_email").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#email_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#email_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#email_ubahCancel').on('click', function(){
        $("#PrintDetail_link_email").prop('enable', false);
        $("#PrintDetail_link_email").prop('disabled', true);
        $("#PrintDetail_link_email").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#email_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#email_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#email_ubahSave').on('click',function(e){
    var PrintDetail_link_email = $('#PrintDetail_link_email').val();
      if(PrintDetail_link_email == ''){
        alert('Silahkan Isi Data Email')
      }  
      else{
        var data = $("#updateEmail").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_about_us_data.php/?updateEmail',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_email").prop('enable', false);
                $("#PrintDetail_link_email").prop('disabled', true);
                $("#PrintDetail_link_email").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#email_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#email_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

});
