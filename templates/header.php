<?php include("../control/indexControl.php"); 
// echo $nombreUsuario['FK_estatusUs'];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vestuario</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="../css/netdna.font-awesome.css">
      <link rel="stylesheet" href="../css/cloudflare.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">

                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                              <!-- <a class="nav-link" href="homeAdmi.php">Inicio</a> -->
                                 <?php
                                 // if ($nombreUsuario['FK_tipoUsuario'] == 2) {
                                 //    echo '<a class="nav-link" href="homeAdmi.php">Inicio2</a>';
                                 // } else {
                                 //    echo '<a class="nav-link" href="home.php">Inicio1</a>';
                                 // }
                                 ?>
                              </li>                              
                              <li class="nav-item">
                                 <a class="nav-link" href="registro.php"> Nuevo Registro</a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Consultar                                    
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="consultaRegistro.php">Consulta de Prestamos</a>
                                    <a class="dropdown-item" href="consultaLavan.php">Consulta de Lavanderia</a>
                                    <a class="dropdown-item" href="consulta.php">Consulta de Prendas</a>
                                 </div>                                   
                              </li>      
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="cerrarSesion.php">Cerrar sesion</a>
                              </li>     -->
                           </ul>
                        </div>                        
                     </nav>
                  </div>

                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="home.php"><img src="../images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>    


                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <div class="usuarioInfo">
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <?php echo $nombreUsuario['nombre'] . " " . $nombreUsuario['apellido'] ; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                       <a class="dropdown-item" href="cambioClave.php">Cambiar contraseña</a>
                                       <a class="dropdown-item" href="../control/cerrar.php">Cerrar Sesion</a>                                       
                                    </div>
                                 </li>                           
                              </div>    
                           </ul>
                        </div>                        
                     </nav>
                  </div>
                  


               </div>
            </div>
         </div>
      </header>
      
<body>

