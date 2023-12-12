$(document).ready(function() {

    var table = $('#registroxArticulo').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaRegistroxArticulo.php",
        "method":"Get"},    
        "columns": [        
            { "data": "descripcion" },
            { "data": "nombreColor" },
            { "data": "detalle" },
            { "data": "nombreEstatus" },
            {"data":null,
            "defaultContent":'<form> <button value="quitar" name="quitar" class="btn btn-primary delbtn"> Quitar </button> </form>',
            }
        ],
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );   
    seleccionarDel("#registroxArticulo tbody",table);   
});

//ask    Para DELETE
var seleccionarDel = function(tbody,table){
    $(tbody).on("click","button.delbtn",function(){
        var data = table.row($(this).parents("tr")).data();
        var varId  = $("#intFK").val(data.FK_articulo),
        intFK=data.FK_articulo;
        id_registros=$('input:text[name=id_registro]').val();

        $.ajax({
            type: 'POST',
            url: 'control/deleteArt.php',  
            data: {intFK:intFK,id_registros:id_registros},
            success:function(status){
                console.log('se envió "' + status + '"' );                
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }
        })        
             jQuery.noConflict();
    });
}