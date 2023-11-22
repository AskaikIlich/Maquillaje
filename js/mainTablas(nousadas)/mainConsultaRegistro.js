$(buscar_datos());

function buscar_datos(consultaRegistro) {
    $.ajax({
        url: 'control/busquedaRegistroControl.php', 
        type: 'POST',
        dataType: 'html',
        data: {consultaRegistro:consultaRegistro},
    })
    .done(function(respuesta) {
        $("#datosRegistro").html(respuesta);
    })
    .fail(function() {
        console.log("error");
    })        
}

$(document).on('keyup','#caja_busca',function(){
    var valor = $(this).val();
    if (valor !=""){
        buscar_datos(valor);        
    } else{
        buscar_datos();
    }
});