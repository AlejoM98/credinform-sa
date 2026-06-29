$("#table-unidades").DataTable({
    responsive: true,
    'columnDefs': [ {
        'targets': [0,3], /* table column index */
        'orderable': false, /* true or false */
    }]
});

$(".nuevo-registro").on('click',function(){
    $(".customizer-contain").addClass("open");
});