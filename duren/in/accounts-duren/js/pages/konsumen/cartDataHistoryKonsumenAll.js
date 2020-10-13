
$(document).ready(function(){
  
    var table = $('#dataHistory').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": { 
        "url": "../../../conn/data2/cartProcess/cartProcessCallBackCustHistory.php",
        "dataSrc" : ""},
      "columns" : [
      {"data":"kode_pemesanan"},
      {"data":"waktu_pemesanan"},
      {"data":"nama_produk"},
      {"data":"proses_pemesanan"},
      ],
      "columnDefs": [ {
      "searchable": false,
      "orderable": false,
      "targets": -1,
      "data": null,
      "defaultContent": "<center><button class='buttonDetail-Table tblDetail' style='margin-bottom: 10px;' type='submit' >Detail Data</button></center>"
    },
    {
      "order": [[ 0, "asc" ]],
      "processing": true,
      "serverSide": true,
    },
    {
      "targets": 0,
      "className": "text-center",
    },
    {
      "targets": 1,
      "className": "text-center",
    },
    {
      "targets": 2,
      "className": "text-center",
    },
    ]
  });

  
  $('#dataHistory tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[3];
    console.log(id);
    $('#dataPageRetur').load('cartDataReturALLDetailKonsumen.php?id='+id);
  });
  
});




