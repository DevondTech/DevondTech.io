
$(document).ready(function(){
  
    var table = $('#dataRetur').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": "../../../conn/data2/cartProcess/cartProcessRetur.php",
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

  $('#dataRetur tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[3];
    /*console.log(id);*/
    $('#dataConfirmationRetur').load('cartDataReturDetailAdmin.php?id='+id);
  });
  
});




