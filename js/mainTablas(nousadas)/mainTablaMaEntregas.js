$(document).ready(function() {
    var table = $('#tablaEntregasMa').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaMaEntregas.php",
        "method":"Get"},
        "columns": [
            { "data": "maNombre"},
            { "data": "fechaEntrega" },
            { "data":null,
            "defaultContent":'<button type="submit" class="btn btn-primary verPro">Ver</button>'}],
        "order": [[ 1, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );
    verProductos("#tablaEntregasMa tbody",table);
});

var verProductos= function(tbody,table){    
    $(tbody).on("click", "button.verPro",function(){
        var data = table.row($(this).parents("tr")).data();
        maEn=data.ID_maEntrega;
        $.ajax({
            type: 'POST',
            url: 'control/verProControl.php',  
            data: {maEn:maEn},
            dataType: "json",
            success:function(status){                
                //  console.log(' se envió "' + status + '" ' + maEn );                 
                var tablep = $('#tablaProductos table');
                  for (var i = 0; i < status.length; i++) {
                      var row = $("<tr>");                    
                      for (var key in status[i]) {
                          var cell = $("<td>");
                          cell.text(status[i][key]);
                          row.append(cell);
                      }
                      tablep.append(row);
                  }   // Imprime la tabla en el navegador.
                  $('#bodyPro tbody').append(tablep);
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }
        }) 
    });
}

const $cuerpoTabla = document.querySelector("#bodyPro");
const $btnLimpiar = document.querySelector("#vaciar");
$btnLimpiar.addEventListener("click", () => {       // Y en el click, limpiamos
    $cuerpoTabla.innerHTML = "";
});