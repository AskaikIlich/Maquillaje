// Call the dataTables jQuery plugin
$(document).ready(function() {
    

        const valores = window.location.search;
        console.log(valores);
        const urlParams = new URLSearchParams(valores);
        //Accedemos a los valores
        var id = urlParams.get('id');
    

    
        var table=  $('#detalles').DataTable({
      autoWidth: false,
      language: {
          "processing": "Procesando...",
          "lengthMenu": "Mostrar _MENU_ registros",
          "zeroRecords": "No se encontraron resultados",
          "emptyTable": "Ningún dato disponible en esta tabla",
          "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "infoThousands": ",",
          "loadingRecords": "Cargando...",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          },
          "aria": {
              "sortAscending": ": Activar para ordenar la columna de manera ascendente",
              "sortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
              "copy": "Copiar",
              "colvis": "Visibilidad",
              "collection": "Colección",
              "colvisRestore": "Restaurar visibilidad",
              "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
              "copySuccess": {
                  "1": "Copiada 1 fila al portapapeles",
                  "_": "Copiadas %ds fila al portapapeles"
              },
              "copyTitle": "Copiar al portapapeles",
              "csv": "CSV",
              "excel": "Excel",
              "pageLength": {
                  "-1": "Mostrar todas las filas",
                  "_": "Mostrar %d filas"
              },
              "pdf": "PDF",
              "print": "Imprimir",
              "renameState": "Cambiar nombre",
              "updateState": "Actualizar",
              "createState": "Crear Estado",
              "removeAllStates": "Remover Estados",
              "removeState": "Remover",
              "savedStates": "Estados Guardados",
              "stateRestore": "Estado %d"
          },
          "autoFill": {
              "cancel": "Cancelar",
              "fill": "Rellene todas las celdas con <i>%d<\/i>",
              "fillHorizontal": "Rellenar celdas horizontalmente",
              "fillVertical": "Rellenar celdas verticalmentemente"
          },
          "decimal": ",",
          "searchBuilder": {
              "add": "Añadir condición",
              "button": {
                  "0": "Constructor de búsqueda",
                  "_": "Constructor de búsqueda (%d)"
              },
              "clearAll": "Borrar todo",
              "condition": "Condición",
              "conditions": {
                  "date": {
                      "after": "Despues",
                      "before": "Antes",
                      "between": "Entre",
                      "empty": "Vacío",
                      "equals": "Igual a",
                      "notBetween": "No entre",
                      "notEmpty": "No Vacio",
                      "not": "Diferente de"
                  },
                  "number": {
                      "between": "Entre",
                      "empty": "Vacio",
                      "equals": "Igual a",
                      "gt": "Mayor a",
                      "gte": "Mayor o igual a",
                      "lt": "Menor que",
                      "lte": "Menor o igual que",
                      "notBetween": "No entre",
                      "notEmpty": "No vacío",
                      "not": "Diferente de"
                  },
                  "string": {
                      "contains": "Contiene",
                      "empty": "Vacío",
                      "endsWith": "Termina en",
                      "equals": "Igual a",
                      "notEmpty": "No Vacio",
                      "startsWith": "Empieza con",
                      "not": "Diferente de",
                      "notContains": "No Contiene",
                      "notStarts": "No empieza con",
                      "notEnds": "No termina con"
                  },
                  "array": {
                      "not": "Diferente de",
                      "equals": "Igual",
                      "empty": "Vacío",
                      "contains": "Contiene",
                      "notEmpty": "No Vacío",
                      "without": "Sin"
                  }
              },
              "data": "Data",
              "deleteTitle": "Eliminar regla de filtrado",
              "leftTitle": "Criterios anulados",
              "logicAnd": "Y",
              "logicOr": "O",
              "rightTitle": "Criterios de sangría",
              "title": {
                  "0": "Constructor de búsqueda",
                  "_": "Constructor de búsqueda (%d)"
              },
              "value": "Valor"
          },
          "searchPanes": {
              "clearMessage": "Borrar todo",
              "collapse": {
                  "0": "Paneles de búsqueda",
                  "_": "Paneles de búsqueda (%d)"
              },
              "count": "{total}",
              "countFiltered": "{shown} ({total})",
              "emptyPanes": "Sin paneles de búsqueda",
              "loadMessage": "Cargando paneles de búsqueda",
              "title": "Filtros Activos - %d",
              "showMessage": "Mostrar Todo",
              "collapseMessage": "Colapsar Todo"
          },
          "select": {
              "cells": {
                  "1": "1 celda seleccionada",
                  "_": "%d celdas seleccionadas"
              },
              "columns": {
                  "1": "1 columna seleccionada",
                  "_": "%d columnas seleccionadas"
              },
              "rows": {
                  "1": "1 fila seleccionada",
                  "_": "%d filas seleccionadas"
              }
          },
          "thousands": ".",
          "datetime": {
              "previous": "Anterior",
              "next": "Proximo",
              "hours": "Horas",
              "minutes": "Minutos",
              "seconds": "Segundos",
              "unknown": "-",
              "amPm": [
                  "AM",
                  "PM"
              ],
              "months": {
                  "0": "Enero",
                  "1": "Febrero",
                  "10": "Noviembre",
                  "11": "Diciembre",
                  "2": "Marzo",
                  "3": "Abril",
                  "4": "Mayo",
                  "5": "Junio",
                  "6": "Julio",
                  "7": "Agosto",
                  "8": "Septiembre",
                  "9": "Octubre"
              },
              "weekdays": [
                  "Dom",
                  "Lun",
                  "Mar",
                  "Mie",
                  "Jue",
                  "Vie",
                  "Sab"
              ]
          },
          "editor": {
              "close": "Cerrar",
              "create": {
                  "button": "Nuevo",
                  "title": "Crear Nuevo Registro",
                  "submit": "Crear"
              },
              "edit": {
                  "button": "Editar",
                  "title": "Editar Registro",
                  "submit": "Actualizar"
              },
              "remove": {
                  "button": "Eliminar",
                  "title": "Eliminar Registro",
                  "submit": "Eliminar",
                  "confirm": {
                      "_": "¿Está seguro que desea eliminar %d filas?",
                      "1": "¿Está seguro que desea eliminar 1 fila?"
                  }
              },
              "error": {
                  "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
              },
              "multi": {
                  "title": "Múltiples Valores",
                  "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                  "restore": "Deshacer Cambios",
                  "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
              }
          },
          "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
          "stateRestore": {
              "creationModal": {
                  "button": "Crear",
                  "name": "Nombre:",
                  "order": "Clasificación",
                  "paging": "Paginación",
                  "search": "Busqueda",
                  "select": "Seleccionar",
                  "columns": {
                      "search": "Búsqueda de Columna",
                      "visible": "Visibilidad de Columna"
                  },
                  "title": "Crear Nuevo Estado",
                  "toggleLabel": "Incluir:"
              },
              "emptyError": "El nombre no puede estar vacio",
              "removeConfirm": "¿Seguro que quiere eliminar este %s?",
              "removeError": "Error al eliminar el registro",
              "removeJoiner": "y",
              "removeSubmit": "Eliminar",
              "renameButton": "Cambiar Nombre",
              "renameLabel": "Nuevo nombre para %s",
              "duplicateError": "Ya existe un Estado con este nombre.",
              "emptyStates": "No hay Estados guardados",
              "removeTitle": "Remover Estado",
              "renameTitle": "Cambiar Nombre Estado"
          }
      },"ajax": {
          "url":"../control/detalle.php?id="+id+"",
          "method":"Get",
      },
      
      "columns": [
        { "data": "tarea" },
        { "data": "descripcionTarea" },
        { "data": "fechaInicio" },
        { "data": "fechaFinal" },
        { "data": "observacion" },
        { "data": "statusTarea" },
        { "data": "significado" },
        {"data":null,
        "defaultContent":'<center><button type="button" class="btn btn-primary editar " data-toggle="modal" data-target="#editar-tarea"><i class="fa-solid fa-square-pen"></i></button>&nbsp;<button class="btn btn-danger elim" data-toggle="modal" data-target="#eliminar-tarea"><i class="fa-solid fa-trash-can"></i></button></center>',
        }      
     
]
    
      });
      setInterval( function () {
        table.ajax.reload(null,false);
    }, 1000 );

      editar("#detalles tbody",table);
      eliminar("#detalles tbody",table);

      let eval= document.querySelector('#significado');
      let statusTarea= document.querySelector('#status');
      let tareas= document.querySelector('#tareas');


        // Cargar Select Editar
     function evaluacion(){
        $.ajax({
            type:"GET",
            url:"../control/eval.php",
            success: function(response){
                const evaluar= JSON.parse(response)
                let template= '<option class="form-control" selected disabled> -- Evaluacion -- </option>'
                evaluar.forEach(evaluacion =>{
                    template += `<option value="${evaluacion.Id}">${evaluacion.significado}</option>`
                })
                eval.innerHTML= template;
            }
        })
    }
    evaluacion();

    function status(){
        $.ajax({
            type:"GET",
            url:"../control/Status_tarea.php",
            success: function(response){
                const estatus= JSON.parse(response)
                let template= '<option class="form-control" selected disabled> -- Status -- </option>'
                estatus.forEach(st =>{
                    template += `<option value="${st.Id}">${st.Status}</option>`
                })
                statusTarea.innerHTML= template;
            }
        })
    }
    status();
 //Cargar Select Agregar

 function tarea(){
    $.ajax({
        type:"GET",
        url:"../control/tarea.php",
        success: function(response){
            const get_tarea= JSON.parse(response)
            let template= '<option class="form-control" selected disabled> -- Tarea -- </option>'
            get_tarea.forEach(tarea =>{
                template += `<option value="${tarea.Id}">${tarea.tareas}</option>`
            })
            tareas.innerHTML= template;
        }
    })

 }
 tarea();

    
  });
 // Cargar datos Modal Editar
  var editar= function(tbody,table){
    
    $(tbody).on("click","button.editar",function(){
    var data = table.row($(this).parents("tr")).data();
    var tarea = $("#tarea").val(data.tarea)
    var inicio = $("#inicio").val(data.fechaInicio)
    var desc = $("#desc").val(data.descripcionTarea)
    var final = $("#final").val(data.fechaFinal)
    var observacion = $("#observacion").val(data.observacion)
    var status = $("#status").val(data.ID_statusTarea)
    var significado = $("#significado").val(data.ID_evaluacionTarea)
    var ID_tareasAsigna=$("#ID_tareasAsigna").val(data.ID_tareasAsigna)
    var chamb=$("#chamb").val(data.ID_chambista)

     });}

     //Cargar id Modal Eliminar
      var eliminar =  function(tbody,table){
    
        $(tbody).on("click","button.elim",function(){
        var data = table.row($(this).parents("tr")).data();
        var id = $("#eliminar").val(data.ID_tareasAsigna)
        var chamb = $("#chambista").val(data.ID_chambista)
       
         });}

      

  
      



   
