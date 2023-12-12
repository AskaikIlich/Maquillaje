$(document).ready(function() {
    var table = $('#tablaInsumosMaqui').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaInsumosMaqui.php",
        "method":"Get"},    
        "columns": [        
            { "data": "descripcion"},
            { "data": "cantidad"},
            { "data": "UM" },
            { "data": "marca" },
            { "data": "observacion" },
            { "data": "fechaActual" },
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalInMa" data-toggle="modal" data-target="#modalInMa">Modificar</button>',
        }],
        "order": [[ 5, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );    
     modificarInma("#tablaInsumosMaqui tbody",table);
});
//ask    Para MOSTRAR EN EL MODAL
  var modificarInma = function(tbody,table){
      $(tbody).on("click","button.modalInMa",function(){
          var data = table.row($(this).parents("tr")).data();        
          var varI   = $("#aidi").    val(data.ID_maInsumos),
          varvarId   = $("#Descripcion").    val(data.descripcion),
          varIDEm    = $("#Cantidad").val(data.cantidad),
          varNomUs    = $("#UM").  val(data.UM),
          varCedEm    = $("#Marca").    val(data.marca),
          varApeUs    = $("#Observacion").  val(data.observacion)
      });
  }