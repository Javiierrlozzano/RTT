datatable(document).ready(function() {
    datatable('#demo-dt-basic').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5'
        ]
    } );
    
} );