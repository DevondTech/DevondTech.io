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
           /* $('#putID').val(idPemesanan); */
            
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

    var admin_nama_pemilik_rekening = $('#admin_nama_pemilik_rekening').val();
    var admin_tanggal_transfer = $('#admin_tanggal_transfer').val();
    var admin_nomor_rekening = $('#admin_nomor_rekening').val();
    var admin_bank_asal = $('#admin_bank_asal').val();
    var admin_total_pengembalian_dana = $('#admin_total_pengembalian_dana').val();
 
    if(admin_nama_pemilik_rekening == '' ){
        swal({
          title: "Transaksi Gagal",
          text: "Isi Data Nama Pemilik Rekening",
          type: "error"
        });
    }
    else{
        if(admin_tanggal_transfer == '' ){
            swal({
              title: "Transaksi Gagal",
              text: "Isi Data Tanggal Transfer",
              type: "error"
            });
        }
        else{
            if(admin_nomor_rekening == '' ){
                swal({
                  title: "Transaksi Gagal",
                  text: "Isi Data Nomor Rekening",
                  type: "error"
                });
            }
            else{
                if(admin_bank_asal == '' ){
                    swal({
                      title: "Transaksi Gagal",
                      text: "Isi Data Bank Untuk Mentransfer",
                      type: "error"
                    });
                }
                else{ 
                    if(admin_total_pengembalian_dana == '' ){
                        swal({
                          title: "Transaksi Gagal",
                          text: "Isi Data Total Pengembalian Dana",
                          type: "error"
                        });
                    }
                    else{
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
                              if(response == "updateConfirmationReturTransferSuccess"){
                                $("#btnSaveConfir").html('SIMPAN');
                                swal({
                                  title: "Transaksi Sukses",
                                  text: "Data Berhasil Disimpan",
                                  type: "success"
                                });
                                $("#content-profile").load("cartDataReturAdmin.php");
                              }
                              else{
                                swal({
                                  title: "Transaksi Gagal",
                                  text: "Silahkan Lengkapi Data",
                                  type: "error"
                                });
                                $("#btnSaveConfir").html('SIMPAN');
                              }
                            }    
                        });
                        return false;
                    }
                    
                }
            }
        }
    }
    
});


$('#btnRefuseRetur').on('click',function(e){

    var b = $('#b').val();
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
                  $("#content-profile").load("cartDataReturAdmin.php");
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