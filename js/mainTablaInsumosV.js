$(document).ready(function() {
    var table = $('#tablaInsumos').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaInsumos.php",
        "method":"Get"},    
        "columns": [        
            { "data": "descripcion"},
            { "data": "cantidad"},
            { "data": "UM" },
            { "data": "marca" },
            { "data": "observacion" },
            { "data": "fechaActual" },
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalIn" data-toggle="modal" data-target="#modalIn">Modificar</button>',
        }],
        "order": [[ 5, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
     modificarEm("#tablaInsumos tbody",table);
});
//ask    Para MOSTRAR EN EL MODAL
  var modificarEm = function(tbody,table){
      $(tbody).on("click","button.modalIn",function(){
          var data = table.row($(this).parents("tr")).data();        
          var varI   = $("#aidi").    val(data.ID_insumoV),
          varvarId   = $("#Descripcion").    val(data.descripcion),
          varIDEm    = $("#Cantidad").val(data.cantidad),
          varNomUs    = $("#UM").  val(data.UM),
          varCedEm    = $("#Marca").    val(data.marca),
          varApeUs    = $("#Observacion").  val(data.observacion)
      });
  }