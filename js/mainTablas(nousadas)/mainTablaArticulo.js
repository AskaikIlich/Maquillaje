$(document).ready(function() {

    var table = $('#tablaingreso').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaingresoArt.php",
        "method":"Get"},    
        "columns": [        
            { "data": "ID_articulo" },
            { "data": "descripcion" },
            { "data": "nombreColor" },
            { "data": "detalle" },
            { "data": "nombreEstatus" },
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalArt" data-toggle="modal" data-target="#modalArticulo">Modificar</button>',
        } ],
        "order": [[ 0, "desc" ]]    
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
    seleccionarUP("#tablaingreso tbody",table);
});

//ask    Para MOSTRAR EN EL MODAL
var seleccionarUP = function(tbody,table){
    $(tbody).on("click","button.modalArt",function(){
        var data = table.row($(this).parents("tr")).data();

        var varId  = $("#ID_articulo"). val(data.ID_articulo),
        varNom     = $("#Mdescripcion").val(data.FK_descripcion),
        varCol     = $("#Mcolor").      val(data.FK_color),
        varCol     = $("#Mdetalles").   val(data.FK_detalle),
        varEst     = $("#Mestatus").    val(data.FK_estatus);
    });
}