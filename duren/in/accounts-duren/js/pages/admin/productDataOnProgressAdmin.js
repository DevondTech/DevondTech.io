
$(document).ready(function(){
  
    var table = $('#dataProdukDalamProses').DataTable({ 
      "searchable": false,
      "orderable": false,
      "targets": 0,
      "ajax": "../../../conn/data2/product/product_data_on_progress.php",
      "columnDefs": [ {
      /* "searchable": false,
       "orderable": false,
       "targets": -1,
       "data": null,
       "defaultContent": "<center><button class='buttonDetail-Table tblDetail' style='margin-bottom: 10px;' type='submit' >Detail Data</button><form method='POST'>  <button id='HapusData' class='buttonDelete-Table hapus-data'>Hapus Data</button></form></center>"
*/    },
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
    {
      "targets": 3,
      "className": "text-center",
    },
    {
      "targets": 4,
      "className": "text-center",
    },]
  });

  table.on( 'order.dt search.dt', function(){
      table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          cell.innerHTML = i+1;
      } );
  }).draw();
});