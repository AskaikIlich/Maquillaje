<?php
require_once('../clases/Programacion.php');
require_once('../clases/Presentacion.php');

$Objarticulo = new Programacion();
$programa = $Objarticulo->getProgramas();

$Objpresen = new Presentacion();
$citasPre = $Objpresen->getCitas();

$Objperso = new Presentacion();
$personasPre = $Objperso->getPersonas();


if ($_POST) {
    $accion= $_POST['btnIngresar'];
    switch ($accion) {
        case '1':
            $todo = $_POST['programa'] && $_POST['hora'] && $_POST['fecha'];
            if ($todo) {
                    $varprograma = $_POST['programa'];
                    $varhora =   $_POST['hora'];
                    $varfecha = $_POST['fecha'];                
                    $agregar = new Programacion();
                    $agregando = $agregar->addProgramacion($varprograma,$varhora, $varfecha);
               
            } else {
            //    echo "Faltan datos para ingresar correctamente ";  //   AGREGAR UN ALERT Y EL BOTON
            }            
        break;
    }
}

// if ($_POST) {
//     $accion= $_POST['btnIngresar'];
//     switch ($accion) {
//         case '1':
//             $todo = $_POST['descrip'] && $_POST['color'] && $_POST['detalle'] && $_POST['cantidad'];
//             if ($todo) {
//                 $vardescrip = $_POST['descrip'];
//                 $varcolor = $_POST['color'];
//                 $vardetalle = $_POST['detalle'];
//                 $varcantidad= $_POST['cantidad'];
//                 $a=1;
//                 while ($a <= $varcantidad) {
//                     $a = $a+1;
//                     $agregar = new Articulo();
//                     $agregando = $agregar->addArticulo($vardescrip, $varcolor, $vardetalle);
//                 }
//                 ?><script src="../js/vaciarUrl.js"></script><?php
//             } else {
//             //    echo "Faltan datos para ingresar correctamente ";  //   AGREGAR UN ALERT Y EL BOTON
//             }
//         break;

//         case '2':
//             $modificar = $_POST['ID_articulo'] && $_POST['Mdescripcion'] && $mCol = $_POST['Mcolor'] && $_POST['Mdetalles'];
//             if ($modificar) {
//                 $mID  = $_POST['ID_articulo'];
//                 $mDes = $_POST['Mdescripcion'];
//                 $mCol = $_POST['Mcolor']; 
//                 $mDet = $_POST['Mdetalles'];

//                 $edit= new Articulo();
//                 $editando= $edit->updateArticulos($mDes, $mCol, $mDet, $mID);
//             }
//             ?><script src="../js/vaciarUrl.js"></script><?php
//             break;        
//         default:
//             break;
//     }
// }

//   header('Location:../ingresarArticulos.php');   

?>