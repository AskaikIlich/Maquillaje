<?php 
 include("../templates/header.php");
?>
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="../images/ropa.png" alt="#"/> Inicio vestuario <br> 
                     </h2>
                  </div>
               </div>
            </div>

            
            <div class="row">
               <div class="col-md-3">
                  <a href="ingresar.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/guardarropa.png"  alt="#"/></i>
                     <h3>Ingresar Articulos</h3>
                  </div>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="reportes.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/reporte.png" alt="#"/></i>
                     <h3>Generar Reportes</h3>
                  </div>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="AdminUsuarios.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/usuario.png" alt="#"/></i>
                     <h3>Administrar Usuarios</h3>
                  </div>
               </div>
               <div class="col-md-3">
                  <a href="insumosV.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/costura.png" alt="#"/></i>
                     <h3>Insumos vestuario</h3>
                  </div>
               </div>

               <div class="col-md-3">
                  <a href="empleados.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/empleado.png" alt="#"/></i>
                     <h3>Administrar empleados</h3>
                  </div>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="programas.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/tele.png" alt="#"/></i>
                     <h3>Administrar Programas</h3>
                  </div>
               </div>

               <!-- <div class="col-md-3">                  
                  <div id="hoverchang" class="servicebox">
                     <div class="card-body">
                        <h3>Administrar</h3>
                     </div>
                     <div class="card-body">
                        <a href="Admin.php" class="card-link"><p>Detalles de las prendas</p></a>
                     </div>
                     <div class="card-body">
                        <a href="division.php" class="card-link"><p>Divisiones y gerencias</p></a>
                     </div>
                  </div>
               </div>       --> <?php
                           // $usuario = $_SESSION['usuario'];
                           //       if ($usuario['FK_tipoUsuario'] == 2 && $usuario['usuario'] == 'Hemi' || $usuario['usuario'] == 'desarrollo' ) {
                                    ?>
                                    <div class="col-md-3">
                                       <a href="../Public/chambista.php">
                                       <div id="hover_chang" class="service_box">
                                          <i><img src="../images/chamba.png" alt="#"/></i>
                                          <h3>Chambista</h3>
                                       </div>
                                    </div>
                                    <?php
                                 // } else {
                                 //} ?>
            </div>
         </div>
      </div>
      
      <?php include("../templates/footer.php"); ?>