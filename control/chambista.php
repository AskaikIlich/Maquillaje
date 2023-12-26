<?php
require_once ('../clases/chambista.php');

<<<<<<< Updated upstream
$consulta = new chambista();
$imprime= $consulta->consultar();
=======
if ($_POST) {
    $valor= $_POST['accion'];
} else {
    $valor= 0;
}

switch($valor){
    case 0:
    $consulta = new chambista();
    $imprime= $consulta->consultar();
    break;

    case 1:
    $inicio=$_POST['ingreso'];
    $final=$_POST['salida'];
    $division=$_POST['division'];
    $personal=$_POST['personal'];
        $inserta = new chambista();
        $insertar= $inserta->inserta($inicio,$final,$division,$personal);
        break;

        case 2:
            $id=$_POST['id_chamb'];
            $inicio=$_POST['ingreso'];
            $final=$_POST['salida'];
            $edita = new chambista();
            $editar= $edita->edicion($inicio,$final,$id);

        break;    

    }
>>>>>>> Stashed changes



?>