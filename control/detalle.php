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
        $chamb=$_POST['chamb'];
        $fecha=$_POST['fecha_ini'];
        $tareas=$_POST['tareas'];
        $desc=$_POST['desc'];
        $observacion = "En espera de evaluación";
        $status=1;
        $evaluacion=3;
        $insertar= new Tarea();
        $tnsertando=$insertar->insertar($chamb,$fecha,$tareas,$desc,$observacion,$status,$evaluacion); 
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

    case 3:
        $fk_asignada= $_POST['FK_asignada'];
        $chamb= $_POST['chambista'];
        $status=4;
        $eliminar = new Tarea();
        $elim=$eliminar->eliminar($status,$fk_asignada,$chamb);
        
    break;
   
}







?>
