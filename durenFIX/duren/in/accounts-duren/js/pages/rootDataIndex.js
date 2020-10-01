$(window).on('load',function(e){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/product_data.php/?ProductDataIndexRoot",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(callUserData) { 

            var ProductDataIndexRootCallBack = jQuery.parseJSON(ProductDataIndexRootCallBack);
            var id_product = ProductDataIndexRootCallBack[0].id_product;
            var nama_product = ProductDataIndexRootCallBack[0].nama_product;
            var detail1_produk = ProductDataIndexRootCallBack[0].detail1_produk;
            var detail2_produk = ProductDataIndexRootCallBack[0].detail2_produk;
            var gambar1_produk = ProductDataIndexRootCallBack[0].gambar1_produk;
            var gambar2_produk = ProductDataIndexRootCallBack[0].gambar2_produk;
            var gambar3_produk = ProductDataIndexRootCallBack[0].gambar3_produk;
            var gambar4_produk = ProductDataIndexRootCallBack[0].gambar4_produk;

            $('#nama_lengkap_OnLoginPageHome_Small').text(DataNamaLengkap);
            $('#nama_lengkap_OnLoginPageHome_Large').text(DataNamaLengkap);
            $('#email_OnLoginPageHome_Small').text(DataEmail);
            $('#email_OnLoginPageHome_Large').text(DataEmail);
            var DataFotoNull = '../images/userProfile.png';
            var DataFotoNull2 = '../images/userProfile2.png';
            if(DataFoto == '' || DataFoto == null){
                $('#foto_OnLoginPageHome_Small').attr('src', DataFotoNull);
                $('#foto_OnLoginPageHome_Large').attr('src', DataFotoNull2);
                $('#foto_OnLoginPageHome_Large_Down').attr('src', DataFotoNull2);
            }
            else{
                $('#foto_OnLoginPageHome_Small').attr('src', DataFoto);
                $('#foto_OnLoginPageHome_Large').attr('src', DataFoto); 
                $('#foto_OnLoginPageHome_Large_Down').attr('src', DataFoto);
            } 
        }
    });
});