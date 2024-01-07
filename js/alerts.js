/**
 * @param String name
 * @return String
 */
 function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var id = getParameterByName('error');
var exito = getParameterByName('exito');
if (id==1 ){
    Swal.fire(
        'Error',
        'Este Usuario ya se encuentra registrado.',
        'error'
      )
}
if (id==2 ){
    Swal.fire(
        'Error',
        'Ingrese una imagen en formato JPEG o PNG.',
        'error'
      )
}

if (id==3 ){
    Swal.fire(
        'Error',
        'Usuario no Registrado porfavor comuniquece con Desarrollo ext 1642.',
        'error'
      )
}
if (id==4 ){
    Swal.fire(
        'Error',
        'Las contraseñas no coinciden.',
        'error'
      )
}
if (id==5 ){
  Swal.fire(
      'Error',
      'Usuario no Actualizado porfavor comuniquece con Desarrollo ext 1642.',
      'error'
    )
}


if (exito ==1){
Swal.fire(
    '',
    'Datos Registrados.',
    'success'
  )
}
if (exito ==2){
    Swal.fire(
        '',
        'Datos Actualizados.',
        'success'
      )
    }

    if (exito ==3){
      Swal.fire(
          '',
          'Datos Eliminados.',
          'success'
        )
      }