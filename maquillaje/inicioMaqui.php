<?php 
 include ("../templates/header.php");
?>
      <div id="service"  class="maquillaje">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="../images/thr1.png" alt="#"/>Maquillaje y Peluqueria<br> 
                     </h2>
                  </div>
               </div>
            </div>

            
            <div class="row">
                <div class="col-md-3">
                    <div class="maquillaje_box">
                        <a href="maquillajeDisponible.php">
                            <div id="hover_chang" class="service_box">
                                <i><img src="../images/thr.png"  alt="#"/></i>
                                <h3>Ver Disponibles</h3>
                            </div>
                        </a>
                    </div>               
                </div>

                <div class="col-md-3">
                    <div class="maquillaje_box">
                       <a href="maEntregas.php">
                       <div id="hover_chang" class="service_box">
                          <i><img src="../images/cosmetico.png" alt="#"/></i>
                          <h3>Realizar Entregas</h3>
                       </div>                       
                       </a>
                    </div>
                </div>

                <div class="col-md-3">
                <div class="maquillaje_box">
                   <a href="maNoEntregable.php">
                    <div id="hover_chang" class="service_box">
                       <i><img src="../images/secador.png" alt="#"/></i>
                       <h3>Insumos Maquillaje</h3>
                    </div>
                    </a>
                </div>
                </div>

                <div class="col-md-3">
                <div class="maquillaje_box">
                   <a href="maquilladores.php">
                   <div id="hover_chang" class="service_box">
                      <i><img src="../images/maquilladores.png" alt="#"/></i>
                      <h3>Maquilladores</h3>
                   </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="maquillaje_box">                    
                  <a href="AdminMaquillaje.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/adminMA.png"  alt="#"/></i>
                     <h3>Descripcion Maquillaje</h3>
                  </div>
                  </a>
               </div>
               </div>

            </div>
         </div>
      </div>
      
      <?php include("../templates/footer.php"); ?>