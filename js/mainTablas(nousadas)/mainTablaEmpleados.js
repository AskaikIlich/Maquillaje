$(document).ready(function() {
    var table = $('#tablaEmpleado').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaEmpleados.php",
        "method":"Get"},    
        "columns": [        
            { "data": "nombreEmpleado"},
            { "data": "apellidoEmpleado"},
            { "data": "cedula" },
            { "data": "nombreDivision" },
            { "data": "nombreGerencia" },
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalEm" data-toggle="modal" data-target="#modalEm">Modificar</button>',
        }],
        "order": [[ 0, "asc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
    modificarEm("#tablaEmpleado tbody",table);
});
//ask    Para MOSTRAR EN EL MODAL
 var modificarEm = function(tbody,table){
     $(tbody).on("click","button.modalEm",function(){
         var data = table.row($(this).parents("tr")).data();        
         var varId   = $("#nombre"). val(data.nombreEmpleado),
         varIDEm    = $("#ID_empleado").val(data.ID_empleados),
         varNomUs    = $("#apellido").val(data.apellidoEmpleado),
         varCedEm    = $("#cedula").  val(data.cedula),
         varApeUs    = $("#division").  val(data.ID_division)
     });
 }