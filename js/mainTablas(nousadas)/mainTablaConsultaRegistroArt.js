
$(document).ready(function() {

    var table = $('#consultarRegisArt').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaConsultaRegDet.php",
        "method":"Get"}, 
        "columns": [        
            { "data": "ID_articulo"},
            { "data": "descripcion"},
            { "data": "nombreColor"},
            { "data": "detalle"},
            { "data": "nombreEstatus"}
        ],
        "order": [[ 0, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 ); 
    jQuery.noConflict();
});