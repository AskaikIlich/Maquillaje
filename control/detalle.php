<?php 
require_once ('../clases/tarea.php');
$valor= $_POST['accion'];
switch($valor){
    case null:
    $id=$_GET['id'];
    $consulta = new Tarea();
    $imprime= $consulta->consultar($id);
    break;


    case 1:
        $fecha=$_POST['fecha'];
        printf($fecha);

    break;

    case 2:
    $chamb = $_POST['chamb'];
    $final = $_POST['final'];
    $desc = $_POST['desc'];
    $observacion = $_POST['observacion'];
    $status = $_POST['status'];
    $significado = $_POST['significado'];
    $ID_tareasAsigna=$_POST['ID_tareasAsigna'];
    $editar = new Tarea();
    $edicion= $editar->editar($ID_tareasAsigna,$significado,$status,$observacion,$desc,$final,$chamb);
    
    break;
   
}







?>