$(document).ready(function(){
  var table = $('#testimoniData').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": "../../../conn/data2/testimoni/testimoniData.php",
      "columnDefs": [ {
      "searchable": false,
      "orderable": false,
      "targets": -1,
      "data": null,
       "defaultContent": "<center><button id='editData' class='btnsuccess btn-xs editData' style='margin-bottom: 10px;' type='button' >Edit Data</button><form method='POST'>  <button id='HapusData' class='btndanger btn-xs hapus-data'>Hapus Data</button></form></center>"
    },
    {
      "order": [[ 2, "asc" ]],
      "processing": true,
      "serverSide": true,
    }]
  });

  table.on( 'order.dt search.dt', function(){
      table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          cell.innerHTML = i+1;
      } );
  }).draw();

  $('#testimoniData tbody').on( 'click', '.hapus-data', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var confirmation = confirm("Anda yakin akan menghapus user ini?");
    if (confirmation){
      var id = data[0];
      $.ajax({
        type:"POST",
        url:'../../../conn/data2/testimoni/testimoniData.php/?deleteData='+id,
        data:data,
        success:function(data){
          if(data.success){
           table.ajax.reload();
           alert("Data berhasil dihapus");
          }
          else{
          alert('error while update data');
          }
        }
      });
    }
    else {
      alert("Data tidak dihapus!");
    } 
  });

  $('#testimoniData tbody').on( 'click', '.editData', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    var id_testimoni = data[0];
    var nama_lengkap = data[1];
    var link_youtube = data[2];

    $('#actionAdminTestimoni').attr('style','display:none;');
    $('#actionUpdateAdminTestimoni').attr('style','display:block;');
    $('#actionCancelUpdateAdminTestimoni').attr('style','display:block;margin-left: 7px;');  

    $('#nama_lengkap').val(nama_lengkap);
    $('#id_testimoni').val(id_testimoni);
    $('#link_youtube').val(link_youtube);
  });

  $('#actionUpdateAdminTestimoni').on('click',function(e){
    var nama_lengkap = $('#nama_lengkap').val();
    var link_youtube = $('#link_youtube').val();    
    if(nama_lengkap == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Nama Lengkap",
        type: "error"
      });
    }  
    else if(link_youtube == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Link Youtube",
        type: "error"
      });
    }  
    else if(nama_lengkap != '' && link_youtube != ''){
      var data = $("#dataCreate").serialize();
      $.ajax({
        type : 'POST',
        url  : '../../../conn/data2/testimoni/testimoniData.php/?updateData',
        data : data,
        beforeSend: function()
        { 
          $("#error").fadeOut();
          $("#actionUpdateAdminTestimoni").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
        }, 
        success :  function(response)
        {      
          $("#actionUpdateAdminTestimoni").html('SIMPAN');
          swal({
            title:"Sukses",
            text: "Data Berhasil Diperbaharui",
            type: "success"
          }).then(function() {
            $('#nama_lengkap').val('');
            $('#link_youtube').val('');
            $('#id_testimoni').val('');
            table.ajax.reload();     
            $('#actionAdminTestimoni').attr('style','display:block;');  
            $('#actionUpdateAdminTestimoni').attr('style','display:none;');  
            $('#actionCancelUpdateAdminTestimoni').attr('style','display:none;');    
          });      
        }
      });
    return false;
    }      
  });

  $('#actionCancelUpdateAdminTestimoni').on('click',function(e){
    $('#nama_lengkap').val('');
    $('#link_youtube').val('');
    $('#id_testimoni').val('');
    $('#actionAdminTestimoni').attr('style','display:block;');  
    $('#actionUpdateAdminTestimoni').attr('style','display:none;');  
    $('#actionCancelUpdateAdminTestimoni').attr('style','display:none;');    
  });

  $('#actionAdminTestimoni').on('click',function(e){
    var nama_lengkap = $('#nama_lengkap').val();
    var link_youtube = $('#link_youtube').val();    
    if(nama_lengkap == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Nama Lengkap",
        type: "error"
      });
    }  
    else if(link_youtube == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Link Youtube",
        type: "error"
      });
    }  
    else if(nama_lengkap != '' && link_youtube != ''){
      var data = $("#dataCreate").serialize();
      $.ajax({
        type : 'POST',
        url  : '../../../conn/data2/testimoni/testimoni.php/?inputData',
        data : data,
        beforeSend: function()
        { 
          $("#error").fadeOut();
          $("#actionAdminTestimoni").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
        }, 
        success :  function(response)
        {      
          if(response == "already available"){
            swal({
              title:"Fatal",
              text: "Data Sudah Ada",
              type: "error"
            });
            $("#actionAdminTestimoni").html('SIMPAN');
            $('#link_youtube').val('');
          }
          else{
            $("#actionAdminTestimoni").html('SIMPAN');
            swal({
              title:"Sukses",
              text: "Data Berhasil Disimpan",
              type: "success"
            }).then(function() {
              $('#nama_lengkap').val('');
              $('#link_youtube').val('');
              table.ajax.reload();                    
            });
          }         
        }
      });
    return false;
    }      
  });
});



