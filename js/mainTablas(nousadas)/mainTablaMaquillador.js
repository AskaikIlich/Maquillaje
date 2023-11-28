$(document).ready(function() {
    var table = $('#tablaMaqui').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaMaquillador.php",
        "method":"Get"},    
        "columns": [        
            { "data": "maNombre"},
            { "data": "telefono"},
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalMaqui" data-toggle="modal" data-target="#modalMaqui">Modificar</button>',
        }],
        "order": [[ 0, "asc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
    modificarEm("#tablaMaqui tbody",table);
});
//ask    Para MOSTRAR EN EL MODAL
 var modificarEm = function(tbody,table){
     $(tbody).on("click","button.modalMaqui",function(){
         var data = table.row($(this).parents("tr")).data();        
         var varId   = $("#nombre"). val(data.maNombre),
         varIDEm    = $("#ID_empleado").val(data.ID_maMaquilladores),
         varNomUs    = $("#telefono").val(data.telefono)
     });
 }