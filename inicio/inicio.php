<?php 
 include ("../templates/header.php");
?>
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <br><h2> INICIO 
                        <?php // echo $_SESSION['userLogeado']; ?></h2>
                  </div>
               </div>
            </div>
            <?php      //esta mierda puede servir para que depende del usuario se muestren las opciones
            // if ($nombreUsuario['FK_tipoUsuario'] == 2) {
            //    echo '<a class="nav-link" href="homeAdmi.php">Inicio 2</a>';
            // } else {
            //    echo '<a class="nav-link" href="home.php">Inicio 1</a>';
            // }
            ?>
            <div class="row">
               <div class="col-md-3"> </div> 
               <div class="col-md-3">
                  <a href="../vestuario/inicioVest.php">
                  <div id="hover_chang" class="service_box">
                     <i><img src="../images/ropa.png"  alt="#"/></i>
                     <h3>Vestuario</h3>
                  </div>
                  </a>
                </div>
                <div class="col-md-3">
                    <div class="maquillaje_box">                        
                    <a href="../maquillaje/inicioMaqui.php">
                        <div id="hover_chang" class="service_box">
                            <i><img src="../images/adminMA.png" alt="#"/></i>
                            <h3>Maquillaje</h3>
                        </div>
                    </a>
                    </div>
                </div>
              
            </div>
         </div>
      </div>
      
      <?php include("../templates/footer.php"); ?>