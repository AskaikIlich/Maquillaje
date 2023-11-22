<?php 
// require_once('../clases/Usuario.php');
require_once '../clases/Usuario.php';
$newcnx= new Database();

session_start();

//  if ($_POST['txtusuario'] &&  $_POST['txtpassword']) {
      $usuario = $_POST['txtusuario']??null ;
      $clave = $_POST['txtpassword']??null ;

if ($usuario && $clave) {
    // $usuario = $_POST['txtusuario'] ;
    // $clave = $_POST['txtpassword'] ;

    $newLog = new Usuario();
    $usuariolog = $newLog->login($usuario, $clave);

    if ($usuariolog) {
        $_SESSION['userLogeado'] = $usuario;
        header('Location:../inicio/inicio.php');
    } else {
        echo '<script type="text/javascript"> alert("' . $usuariolog .'");
        window.location.href="../index.php"; </script>'; 
    }
 }

// $DatosUsuar = new Usuario();
// $nombreUsuario = $DatosUsuar->getNombre($_SESSION['userLogeado']);

 $DatosUsuar = new Usuario();
 $nombreUsuario= $DatosUsuar->obtenerNombreApellido($_SESSION['userLogeado']);

// $tipoUs = $DatosUsuar->getUsuario($_SESSION['userLogeado']);

// $usuariologeado = Usuario::estaLogeado() ? $_SESSION["userLogeado"] : "";

// if($_POST['btnLogout'] == 'cerrar'){
//     // $newlogout = new usuario();
//     $usuariologout = $newlog->logout();
//     // echo $usuariologout;
// }




?>

                <!-- sesiones sesiones Control -->
                <?php
// include("control/indexcontrol.php");

// session_start();
// // if (!isset($_SESSION['usuario'])) {
// //    header('Location:index.php');   
// // } else { print_r($_SESSION['usuario']); }

// if ($_SESSION['usuario']){
// } else {   
//     header('Location:index.php'); }
//     //  print_r($_SESSION['usuario']);
//


//                 <!-- cerrar sesion -->
//                 
// session_start();
// session_destroy();
// header('Location:../index.php');

?>


