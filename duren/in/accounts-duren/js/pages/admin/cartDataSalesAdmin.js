$(document).ready(function(){
  
    var table = $('#dataSales').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": "../../../conn/data2/cartProcess/cartSalesAdmin.php",
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

  $('#dataSales tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[0];
    console.log(id);
    $('#dataConfirmationPayment').load('historySalesDetailAdmin.php?id='+id);
  });
  
});