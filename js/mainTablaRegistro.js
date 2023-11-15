$(document).ready(function() {
    var table = $('#tablaingresoSel').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaingreso.php",
        "method":"Get"},    
        "columns": [
            { "data": "descripcion", render: function ( data, type, row ) {return `${row.tipoDeArticulo} ${row.descripcion}`; }},
            { "data": "nombreColor" },
            { "data": "detalle" },
            { "data": "nombreEstatus" },
            {"data":null,
            "defaultContent":'<form><button class="btn btn-primary selectbtn" id="btn-id">Seleccionar</button></form>',
            // "defaultContent":'<form><input type="checkbox" name="articulo[]" value="<?php echo $dato["ID_articulo"];> <button class="btn btn-primary selectbtn" name="selectbtn" id="selectbtn">Seleccionar</button></form>'
        }]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );  
    seleccionar("#tablaingresoSel tbody",table);   
});

//ask    PARA INSERT
    var seleccionar = function(tbody,table){
        $(tbody).on("click","button.selectbtn",function(){
            var data = table.row($(this).parents("tr")).data();
            intID=data.ID_articulo;
            id_registros=$('input:text[name=id_registro]').val();
            id_estado=$('input:text[name=id_estado]').val();
            // id_arti=$('input:array[name=articulo]').val();

            $.ajax({
                type: 'POST',
                url: 'control/AddArt.php',  
                // data: {id_arti:id_arti,id_registros:id_registros,id_estado:id_estado},
                data: {intID:intID,id_registros:id_registros,id_estado:id_estado},
                success:function(status){
                    console.log('se envió "' + status + '"' );                    
                },
                error : function(status) {
                    alert('Disculpe, existió un problema');
                }
            })            
                jQuery.noConflict();
                // $("#modalRegistro").modal('hide');
        });
    }