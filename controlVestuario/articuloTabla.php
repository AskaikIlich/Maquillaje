<?php
include('../clases/Articulo.php');

$Objarticulo = new Articulo();
$verArticulos = $Objarticulo->getArticulosTabla();
?>