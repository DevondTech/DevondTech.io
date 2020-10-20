$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataWeightProduct",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectDataWeightProduct) { 
          var DataWeight = jQuery.parseJSON(selectDataWeightProduct);
          var html = '';
            for(var count = 0; count < DataWeight.length; count++)
            {
              html += '<option value="'+DataWeight[count].id_berat_produk+'">'+DataWeight[count].teks_berat_produk+'</option>';
            }
          $('#id_berat_produk').html(html);
        }
    });


    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUser",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(callDetailUserDatas) { 
            var DataUser = jQuery.parseJSON(callDetailUserDatas);
            if(DataUser == ''){
                $("#content-profile").load("cartDataNull.php");
            }
            else{
                var DataIdUser = DataUser[0].id_user;
                var DataProsesPemesanan = DataUser[0].id_proses_pemesanan;
                if(DataProsesPemesanan == '1'){
                    $('#cardDataUser').attr('style','display:block;')
                    var DataIdUser = DataUser[0].id_user;
                    var DataNamaLengkap = DataUser[0].nama_lengkap;
                    var DataNomorHP = DataUser[0].nomor_hp;
                    var DataAlamat = DataUser[0].alamat;
                    var DataNegara = DataUser[0].negara;
                    var DataProvinsi = DataUser[0].provinsi;
                    var DataKecamatan = DataUser[0].kecamatan;
                    var DataKelurahan = DataUser[0].kelurahan;
                    var DataKota = DataUser[0].kota;
                    var DataKodePos = DataUser[0].kode_pos;
                    var DataNamaProduk = DataUser[0].nama_produk;
                    var DataJenisProduk = DataUser[0].jenis_produk;
                    var DataHarga = DataUser[0].harga;  
                    var DataDiskon = DataUser[0].diskon;  
                    var DataHargaSetelahDiskon = DataUser[0].harga_setelah_diskon;  
                    var gambarProductView = DataUser[0].gambar1_produk;
                    var dataOngkir = DataUser[0].ongkos_kirim;
                    var dataBerat = DataUser[0].konfersi_berat_produk_perkilogram;
                    var email_send = DataUser[0].email;
                    var kode_pemesanan_send = DataUser[0].kode_pemesanan;
                    var produk_send = DataNamaProduk;
                    
                    var waktu_pemesanan_send = DataUser[0].waktu_pemesanan;
                   
                    $('#email_send').val(email_send);
                    $('#kode_pemesanan_send').val(kode_pemesanan_send);
                    $('#produk_send').val(produk_send);
                    $('#jumlah_send_data').val('1');
                    $('#waktu_pemesanan_send').val(waktu_pemesanan_send);
            
                    $('#namaLengkapPrint').text(DataNamaLengkap);
                    $('#nomorHpPrint').text(DataNomorHP);

                    if(DataAlamat == '' || DataAlamat == null){
                        $('#alamatPrint').text('( Silahkan Lengkapi Data Alamat Anda )');
                        $('#alamatPrint').attr('style','color:red');
                    }
                    else{
                        $('#alamatPrint').text(DataAlamat+' , Kelurahan '+DataKelurahan+' , Kecamatan '+DataKecamatan+' , Kota '+DataKota+' , '+DataProvinsi+' , '+DataNegara+' (Kode POS :'+DataKodePos+') ');
                        $('#alamatPrint').attr('style','color:#333');
                    }
                    $('#dataNegara').val(DataNegara);
                    $('#dataProvinsi').val(DataProvinsi);
                    $('#dataKota').val(DataKota);
                    $('#dataKodePos').val(DataKodePos);
                    $('#nama_lengkap').val(DataNamaLengkap);
                    $('#nomor_hp').val(DataNomorHP);
                    $('#alamatInput').val(DataAlamat);
                    $('#negaraInput').val(DataNegara);
                    $('#provinsiInput').val(DataProvinsi);
                    $('#kotaInput').val(DataKota);
                    $('#kecamatanInput').val(DataKecamatan);
                    $('#kelurahanInput').val(DataKelurahan);
                    $('#nama_produk').text(DataNamaProduk);
                    $('#jenis_produk').val(DataJenisProduk);
                    $('#harga_sebelum_diskon').val(DataHarga);
                    $('#harga_tampil').val(DataHargaSetelahDiskon);
                    $('#harga').val(DataHargaSetelahDiskon);          
                    $('#ongkir').val('0');
                    $('#ongkir_tampil').val('0');
                    var ongkir = $('#ongkir').val();
                    var ongkirNumberString = ongkir.toString(),
                        ongkirSisa    = ongkirNumberString.length % 3,
                        ongkirRupiah  = ongkirNumberString.substr(0, ongkirSisa),
                        ongkirRibuan  = ongkirNumberString.substr(ongkirSisa).match(/\d{3}/g);         
                    if (ongkirRibuan) {
                        ongkirSeparator = ongkirSisa ? '.' : '';
                        ongkirRupiah += ongkirSeparator + ongkirRibuan.join('.');
                    }
                    $('#ongkir_tampil').val('Rp '+ongkirRupiah+',00');
                    var ongkirMin = $('#ongkir_tampil').val('Rp '+ongkirRupiah+',00');
                    var PrintDetail_DataFotoNull = '../images/seimpleProduk.png';
                    if(gambarProductView == '' || gambarProductView == null){
                        $('#gambarProductView').attr('src', PrintDetail_DataFotoNull);
                    }
                    else{
                        $('#gambarProductView').attr('src', '../images/produk/'+gambarProductView);
                    } 

                    var hargaSebelumDiskon = $('#harga_sebelum_diskon').val();
                    var hargaSebelumDiskonNumberString = hargaSebelumDiskon.toString(),
                        hargaSebelumDiskonSisa    = hargaSebelumDiskonNumberString.length % 3,
                        hargaSebelumDiskonRupiah  = hargaSebelumDiskonNumberString.substr(0, hargaSebelumDiskonSisa),
                        hargaSebelumDiskonRibuan  = hargaSebelumDiskonNumberString.substr(hargaSebelumDiskonSisa).match(/\d{3}/g);         
                    if (hargaSebelumDiskonRibuan) {
                        hargaSebelumDiskonSeparator = hargaSebelumDiskonSisa ? '.' : '';
                        hargaSebelumDiskonRupiah += hargaSebelumDiskonSeparator + hargaSebelumDiskonRibuan.join('.');
                    }
                    $('#harga_sebelum_diskon').val('Rp '+hargaSebelumDiskonRupiah+',00');
                    var harga = $('#harga').val();
                    var hargaNumberString = harga.toString(),
                        hargaSisa    = hargaNumberString.length % 3,
                        hargaRupiah  = hargaNumberString.substr(0, hargaSisa),
                        hargaRibuan  = hargaNumberString.substr(hargaSisa).match(/\d{3}/g);         
                    if (hargaRibuan) {
                        hargaSeparator = hargaSisa ? '.' : '';
                        hargaRupiah += hargaSeparator + hargaRibuan.join('.');
                    }
                    $('#harga_tampil').val('Rp '+hargaRupiah+',00');
                    $('#total_harga_pemesanan_tampil').val('Rp '+hargaRupiah+',00');
                    $('#total_harga_pemesanan').val(harga);
                    $('#total_harga_pemesanan_tampil2').val('Rp '+hargaRupiah+',00');
                    $('#total_harga_pemesanan2').val(harga);
                    $('#totalBayarKeseluruhan').val(+harga + +ongkir);

                    var totalBayarKeseluruhanCall = $('#totalBayarKeseluruhan').val();
                    var totalBayarKeseluruhanCallNumberString = totalBayarKeseluruhanCall.toString(),
                        totalBayarKeseluruhanCallSisa    = totalBayarKeseluruhanCallNumberString.length % 3,
                        totalBayarKeseluruhanCallRupiah  = totalBayarKeseluruhanCallNumberString.substr(0, totalBayarKeseluruhanCallSisa),
                        totalBayarKeseluruhanCallRibuan  = totalBayarKeseluruhanCallNumberString.substr(totalBayarKeseluruhanCallSisa).match(/\d{3}/g);         
                        if (totalBayarKeseluruhanCallRibuan) {
                            totalBayarKeseluruhanCallSeparator = totalBayarKeseluruhanCallSisa ? '.' : '';
                            totalBayarKeseluruhanCallRupiah += totalBayarKeseluruhanCallSeparator + totalBayarKeseluruhanCallRibuan.join('.');
                        }
                        $('#totalBayarKeseluruhan_tampil').val('Rp '+totalBayarKeseluruhanCallRupiah+',00');
                        var total_harga_yang_harus_dibayar_send = 'Rp '+totalBayarKeseluruhanCallRupiah+',00';
                        $('#total_harga_yang_harus_dibayar_send').val(total_harga_yang_harus_dibayar_send);

                    $('#btnPlus, #btnMinus').click(function () {
                        if (this.id == 'btnPlus') {
                            var checkDataJumlah = $('#jumlah_pemesanan').val();
                            var jumlahPemesanan = +$('#jumlah_pemesanan').val() + 1;
                            $('#jumlah_pemesanan').val(jumlahPemesanan);
                            $('#jumlahPemesanan').val(jumlahPemesanan);
                            $('#jumlah_send_data').val(jumlahPemesanan);
                            var harga = $('#harga').val();
                            var totalHarga = jumlahPemesanan * harga;
                        }
                        else if (this.id == 'btnMinus') {
                            var checkDataJumlah = $('#jumlah_pemesanan').val();
                            if(checkDataJumlah < 2){
                                var totalHarga = $('#harga').val();
                                $('#ongkir_tampil').val(ongkirMin);
                            }
                            else{
                                var jumlahPemesanan = +$('#jumlah_pemesanan').val() - 1;
                                $('#jumlah_pemesanan').val(jumlahPemesanan);
                                $('#jumlahPemesanan').val(jumlahPemesanan);
                                $('#jumlah_send_data').val(jumlahPemesanan);
                                var harga = $('#harga').val();
                                var totalHarga = jumlahPemesanan * harga;
                            }
                        }

                        jumlahPemesanan = $('#jumlah_pemesanan').val();
                        var ongkirCallBack =  '0';
                        var dataBeratPemesanan = jumlahPemesanan * ongkirCallBack;
                        $('#jumlah_send_data').val(jumlahPemesanan);
                        
                        //$('#ongkir').val();
                        //$('#ongkir_tampil').val();
                        //$('#ongkir').val(dataBeratPemesanan);
                        //$('#ongkir_tampil').val(dataBeratPemesanan);

                        if(jumlahPemesanan<11){
                            var ongkir = ongkirCallBack;
                            var ongkirNumberString = ongkir.toString(),
                                ongkirSisa    = ongkirNumberString.length % 3,
                                ongkirRupiah  = ongkirNumberString.substr(0, ongkirSisa),
                                ongkirRibuan  = ongkirNumberString.substr(ongkirSisa).match(/\d{3}/g);         
                            if (ongkirRibuan) {
                                ongkirSeparator = ongkirSisa ? '.' : '';
                                ongkirRupiah += ongkirSeparator + ongkirRibuan.join('.');
                            }
                            $('#ongkir_tampil').val('Rp '+ongkirRupiah+',00');
                            $('#ongkir').val(ongkir);
                        }
                        else{
                            var ongkirCallBackToCount = ongkirCallBack;
                            var dataJoinToCountOngkir = (+jumlahPemesanan - 1) / 10;
                            var callBackDataJoinToCountOngkir = Math.floor(dataJoinToCountOngkir);
                            var callBackDataJoinToCountOngkirPlus = +callBackDataJoinToCountOngkir + 1;
                            var ongkir = callBackDataJoinToCountOngkirPlus * ongkirCallBackToCount ; 
                            var ongkirNumberString = ongkir.toString(),
                                ongkirSisa    = ongkirNumberString.length % 3,
                                ongkirRupiah  = ongkirNumberString.substr(0, ongkirSisa),
                                ongkirRibuan  = ongkirNumberString.substr(ongkirSisa).match(/\d{3}/g);         
                            if (ongkirRibuan) {
                                ongkirSeparator = ongkirSisa ? '.' : '';
                                ongkirRupiah += ongkirSeparator + ongkirRibuan.join('.');
                            }
                            $('#ongkir_tampil').val('Rp '+ongkirRupiah+',00');
                            $('#ongkir').val(ongkir);
                        }
                        var totalHargaNumberString = totalHarga.toString(),
                        totalHargaSisa    = totalHargaNumberString.length % 3,
                        totalHargaRupiah  = totalHargaNumberString.substr(0, totalHargaSisa),
                        totalHargaRibuan  = totalHargaNumberString.substr(totalHargaSisa).match(/\d{3}/g);         
                        if (totalHargaRibuan) {
                            totalHargaSeparator = totalHargaSisa ? '.' : '';
                            totalHargaRupiah += totalHargaSeparator + totalHargaRibuan.join('.');
                        }
                        $('#total_harga_pemesanan_tampil').val('Rp '+totalHargaRupiah+',00');
                        $('#total_harga_pemesanan').val(totalHarga);
                        $('#total_harga_pemesanan_tampil2').val('Rp '+totalHargaRupiah+',00');
                        $('#total_harga_pemesanan2').val(totalHarga);
                        var total_harga_pemesanan2 = $('#total_harga_pemesanan2').val();
                        var ongkirCallback = $('#ongkir').val();
                        var totalYangHarusDibayar = +total_harga_pemesanan2 + +ongkir;
                        
                        var totalBayarKeseluruhanNumberString = totalYangHarusDibayar.toString(),
                        totalBayarKeseluruhanSisa    = totalBayarKeseluruhanNumberString.length % 3,
                        totalBayarKeseluruhanRupiah  = totalBayarKeseluruhanNumberString.substr(0, totalBayarKeseluruhanSisa),
                        totalBayarKeseluruhanRibuan  = totalBayarKeseluruhanNumberString.substr(totalBayarKeseluruhanSisa).match(/\d{3}/g);         
                        if (totalBayarKeseluruhanRibuan) {
                            totalBayarKeseluruhanSeparator = totalBayarKeseluruhanSisa ? '.' : '';
                            totalBayarKeseluruhanRupiah += totalBayarKeseluruhanSeparator + totalBayarKeseluruhanRibuan.join('.');
                        }

                        var total_harga_yang_harus_dibayar_send = 'Rp '+totalBayarKeseluruhanRupiah+',00';
                        $('#totalBayarKeseluruhan_tampil').val('Rp '+totalBayarKeseluruhanRupiah+',00');
                        $('#totalBayarKeseluruhan').val(totalYangHarusDibayar);

                        /*var total_harga_yang_harus_dibayar_send = +harga + +ongkir;*/
                        $('#total_harga_yang_harus_dibayar_send').val(total_harga_yang_harus_dibayar_send);
                        

                    });
                }
                else{
                    if(DataProsesPemesanan == '2'){
                        $("#content-profile").load("cartDataConfirmation.php");
                    }
                    if(DataProsesPemesanan == '3'){
                        $("#content-profile").load("cartDataProcessConfirmation.php");
                    }
                    if(DataProsesPemesanan == '4'){
                        $("#content-profile").load("cartDataProcessFinishConfirmation.php");
                    }
                    if(DataProsesPemesanan == '5'){
                        $("#content-profile").load("cartDataProcessBeingShipped.php");
                    }
                    if(DataProsesPemesanan == '6'){
                        $("#content-profile").load("cartDataFinish.php");
                    }
                    if(DataProsesPemesanan == '7'){
                        $("#content-profile").load("cartDataNull.php");
                    }  
                    if(DataProsesPemesanan == '8'){
                        $("#content-profile").load("cartDataNull.php");
                    }    
                    if(DataProsesPemesanan == '9'){
                        $("#content-profile").load("cartDataProcessReturSeeing.php");
                    }                    
                }
            }
          
        }
    });

    $('#buttonUbahAlamat').on('click',function(){
        $('#ubahAlamat').attr('style','display:block');
        $('#alamatUser').attr('style','display:none');
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
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
              $('#id_kota').html(html);
            }
        });
    });

    $('#btnCancelUpdateDataAlamatUser').on('click', function(){
        $('#ubahAlamat').attr('style','display:none');
        $('#alamatUser').attr('style','display:block');
        $('#alamatUpdate').val('');  
        $('#provinsiUpdate').val('');
        $('#kotaUpdate').val('');
        $('#kecamatanUpdate').val('');
        $('#kelurahanUpdate').val('');
        $('#kode_posUpdate').val('');
    });

    $('#btnUpdateDataAlamatUser').on('click', function(){
        var alamatUpdate = $('#alamatUpdate').val();
        var negaraUpdate = $('#negaraUpdate').val();  
        var provinsiUpdate = $('#provinsiUpdate').val();
        var kotaUpdate = $('#kotaUpdate').val();
        var kecamatanUpdate = $('#kecamatanUpdate').val();
        var kelurahanUpdate = $('#kelurahanUpdate').val();
        var kode_posUpdate = $('#kode_posUpdate').val();

        if(alamatUpdate == ''){
            alert('Silahkan Isi Data Alamat')
        }  
        else if(negaraUpdate == ''){
            alert('Silahkan Isi Data Negara')
        }  
        else if(kotaUpdate == ''){
            alert('Silahkan Isi Data Kota')
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

        else if(alamatUpdate != ''){
            var data = $("#updateDataAlamatUser").serialize();
            $.ajax({

                type : 'POST',
                url  : '../../../conn/data2/user_login.php/?updataAlamatUserProfile',
                data : data,
                beforeSend: function()
                { 
                  $("#error").fadeOut();
                  $("#btnUpdateDataAlamatUser").html('<span class="glyphicon glyphicon-transfer"></span>   sending process ...');
                }, 
                success :  function(response)
                {
                  if(response == "updataUserProfile"){
                    $("#btnUpdateDataAlamatUser").html('SIMPAN');
                    $('#ubahAlamat').attr('style','display:none');
                    $('#alamatUser').attr('style','display:block');
                    $('#alamatUpdate').val('');
                    $('#provinsiUpdate').val('');
                    $('#id_kota').val('');
                    $('#kecamatanUpdate').val('');
                    $('#kelurahanUpdate').val('');
                    $('#kode_posUpdate').val('');
                    $.ajax({
                        type: "GET",
                        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataUserDetailAlamat",
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(callDetailUserDatas) { 
                            var DataUser = jQuery.parseJSON(callDetailUserDatas);
                            var DataIdUser = DataUser[0].id_user;
                            var DataNamaLengkap = DataUser[0].nama_lengkap;
                            var DataNomorHP = DataUser[0].nomor_hp;
                            var DataAlamat = DataUser[0].alamat;
                            var DataNegara = DataUser[0].negara;
                            var DataProvinsi = DataUser[0].provinsi;
                            var DataKecamatan = DataUser[0].kecamatan;
                            var DataKelurahan = DataUser[0].kelurahan;
                            var DataKota = DataUser[0].kota;
                            var DataKodePos = DataUser[0].kode_pos;

                            $('#namaLengkapPrint').text(DataNamaLengkap);
                            $('#nomorHpPrint').text(DataNomorHP);
                            if(DataAlamat == '' ){
                                $('#alamatPrint').text('( Silahkan Lengkapi Data Alamat Anda )');
                                $('#alamatPrint').attr('style','color:red')
                            }
                            else{
                                $('#alamatPrint').text(DataAlamat+' , Kelurahan '+DataKelurahan+' , Kecamatan '+DataKecamatan+' , Kota '+DataKota+' , '+DataProvinsi+' , '+DataNegara+' (Kode POS :'+DataKodePos+') ');
                                $('#alamatPrint').attr('style','color:#333');
                                alert("Alamat berhasil ditambahkan");
                            }
                            $('#dataNegara').val(DataNegara);
                            $('#dataProvinsi').val(DataProvinsi);
                            $('#dataKota').val(DataKota);
                            $('#dataKodePos').val(DataKodePos);
                            $('#nama_lengkap').val(DataNamaLengkap);
                            $('#nomor_hp').val(DataNomorHP);
                            $('#alamatInput').val(DataAlamat);
                            $('#negaraInput').val(DataNegara);
                            $('#provinsiInput').val(DataProvinsi);
                            $('#kotaInput').val(DataKota);
                            $('#kecamatanInput').val(DataKecamatan);
                            $('#kelurahanInput').val(DataKelurahan);
                            $('#kodePOSInput').val(DataKodePos);
                        }
                    });
                  }
                  else{
                    alert('Silahkan lengkapi data');
                    $("#btnUpdateDataAlamatUser").html('SIMPAN');
                  }
                }    
            });
            return false;
        } 
    });
});
