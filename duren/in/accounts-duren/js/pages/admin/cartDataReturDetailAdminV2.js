$(document).ready(function(){
	var IDProdukCallBack = $('#a').val();
    var id = IDProdukCallBack;
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/cartProcess/cartProcessAdminSelect.php?dataReturCallData='+id,
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(dataReturCallData) { 

   			var DataDetailRetur = jQuery.parseJSON(dataReturCallData);
   			var id_retur = DataDetailRetur[0].id_retur; 
   			var kode_retur = DataDetailRetur[0].kode_retur; 
        var idPemesanan = DataDetailRetur[0].id_pemesanan; 
   			var waktu_retur = DataDetailRetur[0].waktu_retur; 
   			var nama_lengkap = DataDetailRetur[0].nama_lengkap; 
   			var pesan_retur = DataDetailRetur[0].pesan_retur; 
        var nomor_hp = DataDetailRetur[0].nomor_hp; 
        var email = DataDetailRetur[0].email;
        var nama_pemilik_rekening = DataDetailRetur[0].nama_pemilik_rekening;
        var no_rekening = DataDetailRetur[0].no_rekening; 
        var bank_asal = DataDetailRetur[0].bank_asal; 
        var total_harga_yang_harus_dibayar = DataDetailRetur[0].total_harga_yang_harus_dibayar;
        var gambar_barang_retur = DataDetailRetur[0].gambar_barang_retur; 
        var nama_produk = DataDetailRetur[0].nama_produk;
        var id_produk = DataDetailRetur[0].id_produk;
        var jumlah_pemesanan = DataDetailRetur[0].jumlah_pemesanan;
        var satuan_produk = DataDetailRetur[0].satuan_produk; 
        var teks_berat_produk = DataDetailRetur[0].teks_berat_produk; 

        $('#kode_pemesanan_call_back').val(idPemesanan);
        $('#kode_pemesanan_call_back_refuse').val(idPemesanan);
        $('#kode_retur').val(kode_retur); 
        $('#waktu_retur').val(waktu_retur); 
        $('#nama_lengkap').val(nama_lengkap); 
        $('#pesan_retur').val(pesan_retur); 
        $('#nomor_hp').val(nomor_hp); 
        $('#email').val(email);
        $('#nama_pemilik_rekening').val(nama_pemilik_rekening); 
        $('#no_rekening').val(no_rekening); 
        $('#bank_asal').val(bank_asal);
        $('#total_harga_yang_harus_dibayar').val(total_harga_yang_harus_dibayar); 
        $('#gambar_barang_retur').val(gambar_barang_retur); 
        $('#id_pemesanan').val(idPemesanan); 

        $('#id_produk').val(id_produk);
        $('#nama_produk').val(nama_produk); 
        $('#jumlah_pemesanan').val(jumlah_pemesanan+' '+satuan_produk); 
        $('#teks_berat_produk').val(teks_berat_produk);
        $('#id_pemesanan_confir').val(idPemesanan); 

        $('#kode_retur_send_mail').val(kode_retur); 
        $('#kode_retur_send_mail').val(kode_retur); 
        $('#email_send_mail').val(email); 
        $('#nama_lengkap_send_mail').val(nama_lengkap); 
        $('#nama_produk_send_mail').val(nama_produk); 
        $('#jumlah_pemesanan_send_mail').val(jumlah_pemesanan+' '+satuan_produk); 
        $('#teks_berat_produk_send_mail').val(teks_berat_produk);

        $('#kode_retur_send_mail_show').val(kode_retur); 
        $('#email_send_mail_show').val(email); 

        
        var totalNumberString = total_harga_yang_harus_dibayar.toString(),
            totalSisa    = totalNumberString.length % 3,
            totalRupiah  = totalNumberString.substr(0, totalSisa),
            totalRibuan  = totalNumberString.substr(totalSisa).match(/\d{3}/g);         
        if (totalRibuan) {
            totalSeparator = totalSisa ? '.' : '';
            totalRupiah += totalSeparator + totalRibuan.join('.');
        }

        $('#total_harga_yang_harus_dibayar').val('Rp '+totalRupiah+',00');

        var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
        if(gambar_barang_retur == '' || gambar_barang_retur == null){
            $('#gambar_barang_retur').attr('src', PrintDetail_DataFotoNull);
        }
        else{
            $('#gambar_barang_retur').attr('src', gambar_barang_retur);
            $('#a_gambar_barang_retur').attr('href', gambar_barang_retur);
        } 
	    }
	});
});

$('#btnHiddenReturConfir').on('click', function(){
    $('#hiddenReturConfir').attr('style','display:block;');
    $('#contentRetur').attr('style','display:none;');
});
$('#btnCancelConfir').on('click', function(){
    $('#hiddenReturConfir').attr('style','display:none;');
    $('#contentRetur').attr('style','display:block;');
});

$('#btnSaveConfir').on('click',function(e){

  var mail_content = $('#mail_content').val();
 
  if(mail_content == '' ){
      swal({
        title: "Transaksi Gagal",
        text: "Isi Pesan Pengembalian",
        type: "error"
      });
  }
  else{
      var email_send_mail = $('#email_send_mail').val()
      var nama_lengkap_send_mail = $('#nama_lengkap_send_mail').val()
      var nama_produk_send_mail = $('#nama_produk_send_mail').val()
      var jumlah_pemesanan_send_mail = $('#jumlah_pemesanan_send_mail').val()
      var teks_berat_produk_send_mail = $('#teks_berat_produk_send_mail').val()
      var kode_retur_send_mail = $('#kode_retur_send_mail').val();
      var data = $("#confirmationFormDataTransfer").serialize();
      $.ajax({
          type : 'POST',
          url  : '../../../conn/data2/cartProcess/cartProcess.php/?updateConfirmationReturTransfer',
          data : data,
          beforeSend: function()
          { 
            $("#error").fadeOut();
            $("#btnSaveConfir").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
          }, 
          success :  function(response)
          {
            $("#btnSaveConfir").html('SIMPAN');
            swal({
              title: "Transaksi Sukses",
              text: "Data Berhasil Disimpan",
              type: "success"
            }).then(function() {
              window.location = '../../../conn/data2/mail/adminSendConfirmApproved/index.php?email_send_mail='+email_send_mail+'&&nama_lengkap_send_mail='+nama_lengkap_send_mail+'&&nama_produk_send_mail='+nama_produk_send_mail+'&&jumlah_pemesanan_send_mail='+jumlah_pemesanan_send_mail+'&&teks_berat_produk_send_mail='+teks_berat_produk_send_mail+'&&kode_retur_send_mail='+kode_retur_send_mail+'&&mail_content='+mail_content;
            });
          }    
      });
      return false;
  }
                  
              

    
});

$('#btnRefuseRetur').on('click',function(e){
  var b = $('#b').val();
  /*var emailToMailSendRefund = $('#email').val();*/
  var kodeReturToMailSendRefund = $('#kode_retur').val(); 
  var idPemesananSendRefund = $('#id_pemesanan').val(); 
  if(b == '' ){
      alert('Error');
  }
  else{
    var data = $("#confirmationFormDataRefuse").serialize();
    $.ajax({

      type : 'POST',
      url  : '../../../conn/data2/cartProcess/cartProcess.php/?confirmationFormDataRefuse',
      data : data,
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#btnRefuseRetur").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
      }, 
      success :  function(response)
      {
        if(response == "confirmationFormDataRefuseSuccess"){
          $("#btnRefuseRetur").html('Tolak Pengajuan');
          swal({
            title:"Sukses",
            text: "Tolak Pengajuan Berhasil",
            type: "success"
          }).then(function() {
            $('#contentRetur').load('cartDataReturDetailAdminRefuseRetur.php?idPemesananSendRefund='+idPemesananSendRefund+'&&kodeReturToMailSendRefund='+kodeReturToMailSendRefund);
            /*window.location = '../open-admin/?textData=c654df45910f95fda1f13b5475faf323643621bc';*/
          });
        }
        else{
          swal({
            title: "System Error",
            text: "Data Not Found",
            type: "error"
          });
          $("#btnRefuseRetur").html('Tolak Pengajuan');
        }
      }    
    });
    return false;
  }
});