<?php
require_once ('../clases/persona.php');

$valor=$_POST['accion'];
if($valor== null){
    $valor=0;
}

switch($valor){
    case 0:
    $consulta = new Persona();
    $imprime= $consulta->consultar();
    break;

    case 1:
    $nombre=$_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula= $_POST['cedula'];
    $telef = $_POST['telef'];
    $correo = $_POST['correo'];
        $inserta = new Persona();
        $verificar=$inserta->existencia($cedula);
        if($verificar==0){
        
        $insertar= $inserta->insertar($nombre,$apellido,$cedula,$telef,$correo);
        
        }else{
            header("Location:../Public/persona.php?error=1");
            
        }

        break;

        case 2:
      $id=$_POST['id'];    
      $nombre=$_POST['nombre'];
      $apellido = $_POST['apellido'];
      $cedula= $_POST['cedula'];
      $telef = $_POST['telef'];
      $correo = $_POST['correo'];
      $edicion= new Persona();
      $editar= $edicion->editar($nombre,$apellido,$cedula,$telef,$correo,$id);

        break;  
        case 3:
            $idpersona= $_POST['id_person'];
            $eliminar = new Persona();
            $elim=$eliminar->eliminar($idpersona);
            
            
        break;  

    }



?>