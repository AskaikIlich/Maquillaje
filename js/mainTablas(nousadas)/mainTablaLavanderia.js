$(document).ready(function() {

    var table = $('#tablaUsuarios').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaConsultaLavanderia.php",
        "method":"Get"},    
        "columns": [        
            { "data": "articuloLimpieza"},
            { "data": "cantEntregada" },
            { "data": "responsable" },
            { "data": "usuario" },
            { "data": "fechaEntregado" }
        ],
        "order": [[ 3, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );
});