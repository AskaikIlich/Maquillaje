<?php
require_once ('../clases/chambista.php');

$valor= $_POST['accion'];


switch($valor){
    case null:
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



?>