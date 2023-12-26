<?php 
include("../templates/header.php");
include("../controlVestuario/articuloControl.php"); 
?>
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">

               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Detalles de los artículos</h2>
                  </div>
                  
                  <form method="POST" name="newarticulo" class="main_form">
                     <div class="row">

                        <h3>Descripcion</h3>
                        <select name="descrip" class="contactus" required> 
                           <option value="">Seleccione:</option>
                           <?php
                           foreach ($verDescrip as $descri) {
                              if ($descri["FK_tipoArticulo"] == '2') {
                                 echo '<option value="'.$descri["ID_descripcion"].'">'. 'Calzado '  .$descri["descripcion"].'</option>';
                              } else {
                              echo '<option value="'.$descri["ID_descripcion"].'">'.$descri["descripcion"].'</option>'; 
                              }
                           }?>
                        </select>
                        <h3>Color</h3>    
                        <select name="color" class="contactus" required> 
                           <option value="">Seleccione:</option>
                           <?php
                           foreach ($verColor as $color) {
                              echo '<option value="'.$color["ID_color"].'">'.$color["color"].'</option>';
                           }?>
                        </select>
                        
                        <h3>Detalles</h3>
                        <select name="detalle" class="contactus" required> 
                           <option value="">Seleccione:</option>
                           <?php
                           foreach ($verDetall as $deta) {
                              echo '<option value="'.$deta["ID_detalle"].'">'.$deta["detalle"].'</option>';
                           }?>
                        </select>

                        <h3>Cantidad de piezas con esta descripcion</h3>
                        <input class="contactus" type="number" name="cantidad" required>
                        
                        <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                           <button class="send_btn" type="submit" name="btnIngresar" value="1">Guardar</button>
                        </div>
                     </div>
                  </form>
               </div>

               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> <img src="../images/ganc.png" alt="#"/>Artículos cargados<span class="white"> </span></h2>
                  </div>
                  <!-- table-bordered -->
                  <table class="table" id="articulos" >
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Descripcion</th>
                           <th>Color</th>
                           <th>Detalles</th>
                           <th>Estatus</th>
                           <th> </th>
                        </tr>
                     </thead>
                     <tbody>                        

                     </tbody>
                  </table>
               </div>
               

                  <?php  include("modal\modalModArticulos.php"); ?>                  
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->      
<?php include("../templates/footer.php"); ?>


<!-- scripts -->
<!-- <script src="lib/DataTables/DataTables-1.13.1/js/jquery.dataTables.js"></script>
<script src="lib/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
<script src="js/mainTablaArticulo.js"></script> -->

<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-articulos.js"></script>

