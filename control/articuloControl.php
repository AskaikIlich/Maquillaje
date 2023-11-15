<?php
require_once('../clases/Articulo.php');

$Objarticulo = new Articulo();
$verDescrip = $Objarticulo->getDescripcion();

$Objcolor = new Articulo();
$verColor  = $Objcolor->getColor();

 $ObjDetall = new Articulo();
 $verDetall = $ObjDetall->getDetalles();
// echo " Si";

$todo = $_POST['descrip'] &&  $_POST['color'] && $_POST['detalle'] && $_POST['cantidad'];
if ($todo) {
    $vardescrip = $_POST['descrip'];
    $varcolor = $_POST['color'];
    $vardetalle = $_POST['detalle'];
    $varcantidad= $_POST['cantidad'];
    $a=1;
    while ($a <= $varcantidad) {
        $a = $a+1;
        $agregar = new Articulo();
        $agregando = $agregar->addArticulo($vardescrip, $varcolor, $vardetalle);
    }
?><script src="../js/vaciarUrl.js"></script><?php
} else {
    // echo "Faltan datos para ingresar correctamente ";     AGREGAR UN ALERT Y EL BOTON
}

?>
<!-- <script src="js/vaciarUrl.js"></script> -->