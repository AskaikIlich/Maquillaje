$(document).ready(function() {

    var table = $('#tablaUsuarios').DataTable( {
        ajax: {"url": "control/consultasTablas/consultaUsuarios.php",
        "method":"Get"},    
        "columns": [        
            { "data": "nombre", render: function ( data, type, row ) {return `${row.nombre} ${row.apellido}`; }},
            { "data": "usuario" },
            { "data": "descripcionTipoUs" },
            { "data": "descripcionUsuario" },
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalUs" data-toggle="modal" data-target="#modalUsuario">Modificar</button>',
        } ],
        "order": [[ 2, "asc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
    modificarUs("#tablaUsuarios tbody",table);
});

//ask    Para MOSTRAR EN EL MODAL
var modificarUs = function(tbody,table){
    $(tbody).on("click","button.modalUs",function(){
        var data = table.row($(this).parents("tr")).data();
        var varId   = $("#ID_user"). val(data.ID_usuario),
        varNomUs    = $("#usuario").    val(data.usuario),
        varNomUs    = $("#nombre").     val(data.nombre),
        varApeUs    = $("#apellido").     val(data.apellido),
        varDesUs    = $("#descripUs").  val(data.FK_tipoUsuario),
        varEUs      = $("#estatusUs").  val(data.FK_estatusUs);
    });
}