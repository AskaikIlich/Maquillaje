$(document).ready(function() {

    var table = $('#tablaMaquillajeDisponible').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaMaDisponible.php",
        "method":"Get"},    
        "columns": [        
            { "data": "maProducto"},
            { "data": "marca" },
            { "data": "maColor" },
            { "data": "maCantExistencia", render: function ( data, type, row ){return `${row.maCantExistencia} ${row.maUnidad}`; }},
            { "data": "ultimaAct"},
            { "data":null,
            "defaultContent":'<button type="button" class="btn btn-primary modalPro" data-toggle="modal" data-target="#modalProDis">Modificar</button>'}],
        "order": [[ 4, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );
    modificarPro("#tablaMaquillajeDisponible tbody",table);
});

//ask    Para MOSTRAR EN EL MODAL
 var modificarPro = function(tbody,table){
     $(tbody).on("click","button.modalPro",function(){
         var data = table.row($(this).parents("tr")).data();        
         var maProducto= $("#maProductoM"). val(data.FK_producto),
         varunidad     = $("#unidadM").val(data.FK_maUnidad),
         varmaCantidad = $("#maCantidadM").val(data.maCantExistencia),
         varmarca      = $("#marcaM").  val(data.FK_maMarca),
         varcolor      = $("#colorM").  val(data.FK_maColor)
         varcolor      = $("#usuarioM").  val(data.FK_maUsuario)
         varcolor      = $("#maquillajeDis").  val(data.ID_maquillajeDis)
     });
}