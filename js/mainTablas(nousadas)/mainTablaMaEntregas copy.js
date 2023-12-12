$(document).ready(function() {
    var table = $('#tablaEntregasMa').DataTable( {
        ajax: {"url": "control/consultasTablas/tablaMaEntregas.php",
        "method":"Get"},    
        "columns": [        
            { "data": "maNombre"},
            { "data": "fechaEntrega" },
            { "data":null,
            "defaultContent":'<button type="submit" class="btn btn-primary verPro" name="verPro">Ver</button>'}],
        "order": [[ 1, "desc" ]]
    });
    setInterval( function () {
        table.ajax.reload();
    }, 30000 );
    verPro("#tablaEntregasMa tbody",table);
});

var verPro = function(tbody,table){
    $(tbody).on("click","button.verPro",function(){
        var data = table.row($(this).parents("tr")).data();
        // intID=data.ID_articulo;
        // id_registros=$('input:text[name=id_registro]').val();
        // id_estado=$('input:text[name=id_estado]').val();
        // id_arti=$('input:array[name=articulo]').val();
        idEn= data.ID_maEntrega;

        $.ajax({
            type: 'POST',
            url: 'maVerPro.php',
            data: {idEn:idEn},
            success:function(status){
                window.location.href = "maVerPro.php?id="+idEn;                
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }        
        })
        // para recargar página al darle a guardar
        setTimeout(function() {
            location.reload();
          }, 1000);

        $.ajax({
            type: 'GET',
            url: 'maVerPro.php',  
            data: {idEn:idEn},
            success:function(response){
                 window.location.href = "maVerPro.php?id="+idEn;
                // console.log('se envió "' + response + '"' );

// $.ajax({
        //     method: 'GET',
        //     url: 'consultaRegistroArt.php',  
        //     data: {ID_registro: ID_registro}, 
        //     success:function(status){                
        //         console.log('se envió "' + ID_registro + '"' );                    
        //         window.location.href="consultaRegistroArt.php?id="+ID_registro;
        //         // var varaid  = $("#ID_registro"). val(data.ID_registro)
        //     },
        //     error: function(status) {
        //         console.log('Disculpe, existió un problema');
        //     }
        // })

            },
            error : function(xhr, status, error) {
                alert('Disculpe, existió un problema');                
                    console.log(error);
            }
        })             ; 
        jQuery.noConflict();
        // $("#modalRegistro").modal('hide');
    }   );
}

// $(document).ready(function() {
//     var table = $('#myTable').DataTable();
//     // Agrega el botón de consulta
//     table.button().add(0, {
//       text: 'Consultar',
//       action: function(e, dt, node, config) {
//         // Obtiene el ID de la fila seleccionada
//         var selectedRow = table.rows({ selected: true }).data()[0][0];
//         // Ejecuta la consulta con el ID
//         // ...
//       }
//     });
//   });
  
// En el ejemplo anterior, el código JavaScript agrega un botón a la tabla de datos que ejecuta otra consulta de acuerdo al ID de la fila seleccionada. El botón se agrega en la primera columna de la tabla y ejecuta una función anónima que obtiene el ID de la fila seleccionada y ejecuta la consulta. El código para ejecutar la consulta es el que debe tener en cuenta el diseño de la base de datos y el lenguaje de programación utilizado.




// ---------------




var verProductos= function(tbody,table){
    $(tbody).on("click","button.verPro",function(){
        var data = table.row($(this).parents("tr")).data();

        var varId  = $("#maEn").val(data.ID_maEntrega),
        maEn=data.ID_maEntrega;
        $.ajax({
            type: 'POST',
            url: 'maVerPro.php',  
            data: {maEn:maEn},
            success:function(status){
                console.log('se envió "' + maEn + '"' );   
                // window.location = "maVerPro.php";             
            },
            error : function(status) {
                alert('Disculpe, existió un problema');
            }

        })        
        $(window).load(function(){
            window.location = "maVerPro.php";
        });
            //  jQuery.noConflict();
    });
}