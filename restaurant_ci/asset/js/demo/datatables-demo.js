// Call the dataTables jQuery plugin
$(document).ready(function() {
  /*$('#dataTable').DataTable({
    dom: 'Bfrtip',
    lengthMenu: [
      [ 10, 25, 50, -1 ],
      [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    buttons: [
        'print', 'pdf', 'excel', 'pageLength'
    ]
  });
*/
  var table = $('#dataTable').DataTable( {
    lengthChange: false,
    buttons: [ 'copy', 'excel', 'pdf', 'print' ]
  } );

  table.buttons().container().appendTo( '#dataTable_wrapper .col-md-6:eq(0)' );
});
