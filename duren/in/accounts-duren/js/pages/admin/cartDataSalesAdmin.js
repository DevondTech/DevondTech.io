$(document).ready(function(){
  var buttonCommon = {
      exportOptions: {
          format: {
              body: function ( data, row, column, node ) {
                  // Strip $ from salary column to make it numeric
                  return column === 5 ?
                      data.replace( /[$,]/g, '' ) :
                      data;
              }
          }
      }
  };
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
  ],
  dom: 'Bfrtip',
      buttons: [
           'excel', 'pdf'
      ]
  });

  $('#dataSales tbody').on( 'click', '.tblDetail', function (e){
    var data = table.row( $(this).parents('tr') ).data();
    e.preventDefault();
    var id = data[0];
    /*console.log(id);*/
    $('#dataConfirmationPayment').load('historySalesDetailAdmin.php?id='+id);
  });

  $('#selectDate').on('click', function(e){
    var buttonCommon = {
        exportOptions: {
            format: {
                body: function ( data, row, column, node ) {
                    // Strip $ from salary column to make it numeric
                    return column === 5 ?
                        data.replace( /[$,]/g, '' ) :
                        data;
                }
            }
        }
    };
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
    ],
    dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf'
        ]
    });

    $('#dataSales tbody').on( 'click', '.tblDetail', function (e){
      var data = table.row( $(this).parents('tr') ).data();
      e.preventDefault();
      var id = data[0];
      $('#dataConfirmationPayment').load('historySalesDetailAdmin.php?id='+id);
    });
  });
});