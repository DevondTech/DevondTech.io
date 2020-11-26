$(document).ready(function(){   
    $.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/companyProfile/faqAdmin.php/?callData',
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(callData) { 

 			var CallData = jQuery.parseJSON(callData);
 			var PrintDetail_faq = CallData[0].faq;
            $('#PrintDetail_faq').val(PrintDetail_faq);
        }
    });   

    $("#faq_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_faq").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#faq_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_faq").prop('enable', true);
        $("#PrintDetail_faq").prop('disabled', false);
        $("#PrintDetail_faq").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#faq_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#faq_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#faq_ubahCancel').on('click', function(){
        $("#PrintDetail_faq").prop('enable', false);
        $("#PrintDetail_faq").prop('disabled', true);
        $("#PrintDetail_faq").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#faq_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#faq_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#faq_ubahSave').on('click',function(e){
    var PrintDetail_faq = $('#PrintDetail_faq').val();
      if(PrintDetail_faq == ''){
        swal({
          title: "Gagal Menyimpan",
          text: "Silahkan Isi Data FAQ",
          type: "error"
        });
      }  
      else{
        var data = $("#updateFAQ").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/faqAdmin.php/?updateDataFAQ',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                swal({
                  title: "Sukses",
                  text: "Ubah Data FAQ Berhasil",
                  type: "success"
                });
                $("#PrintDetail_faq").prop('enable', false);
                $("#PrintDetail_faq").prop('disabled', true);
                $("#PrintDetail_faq").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#faq_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#faq_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                swal({
                  title: "Gagal Menyimpan",
                  text: "Silahkan Isi Data FAQ",
                  type: "error"
                });
              }
            }    
          });
          return false;
        } 
    });
});