$(document).ready(function() {

    var table = $('#tablaMaquillajeEntregando').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaMaEntregando.php",
        "method":"Get"},    
        "columns": [        
            { "data": "maProducto"},
            { "data": "marca" },
            { "data": "maColor" },
            { "data": "cantMaEntregada"},
            { "data":null,
            "defaultContent":'<form><button type="button" class="btn btn-primary delbtn">Quitar </button><form>'}],
        "order": [[ 0, "desc" ]]

    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );
     deleteMa("#tablaMaquillajeEntregando tbody",table);
});

//  Para quitar
var deleteMa = function(tbody,table){
    $(tbody).on("click","button.delbtn",function(){
        var data = table.row($(this).parents("tr")).data();
        idMaqui =data.ID_maquillajeDis;
        cantEntrega =data.cantMaEntregada;
        idRegis=$('input:text[name=IDentrega]').val();

        $.ajax({
            type: 'POST',
            url: 'control/maDeleteArt.php',  
            data: {idMaqui:idMaqui,idRegis:idRegis,cantEntrega:cantEntrega},
            success:function(status){
                console.log('se envió "' + status + '"' );     
                window.location.reload()           
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }
        })        
             jQuery.noConflict();
    });
}