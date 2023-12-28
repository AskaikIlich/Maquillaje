<?php 
include("../templates/headerPro.php");
include("../controlProgramas/ProgramacionControl.php"); 
?>
      <div id="contact" class=" ">
         <div class="container">
            <div class="row">

               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Agregar programacion</h2>
                  </div>
                  
                  <form method="POST" name="newarticulo" class="main_form">
                     <div class="row">

                        <h3>Programa</h3>
                        <select name="programa" class="contactus" required> 
                           <option value="">Seleccione:</option>
                           <?php
                           foreach ($programa as $pro) {                            
                              echo '<option value="'.$pro["ID_programa"].'">'.$pro["programa"].'</option>'; 
                              }
                           ?>
                        </select>
                        <h3>Hora</h3>  
                        <input type="Time" name="hora" class="contactus">
                        
                        <h3>Fecha</h3>
                        <input type="Date" name="fecha" class="contactus">

                        <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                           <button class="send_btn" type="submit" name="btnIngresar" value="1">Generar</button>
                        </div>
                     </div>
                  </form>
               </div>

               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> <img src="../images/ganc.png" alt="#"/>Programacion registrada<span class="white"> </span></h2>
                  </div>
                  <!-- table-bordered -->
                  <table class="table" id="programacion" >
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Programa</th>
                           <th>Hora</th>
                           <th>Fecha</th>
                           <th>Definir pautas</th>
                        </tr>
                     </thead>
                     <tbody>                        

                     </tbody>
                  </table>
               </div>
               

                  <?php include("modalPautas.php"); ?>                  
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->      
<?php include("../templates/footerPro.php"); ?>

<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-programacion.js"></script>

<script src="../js/registroPresentacion.js"></script>

<!-- <script src="../js/jquery.min.js"></script>
<script src="../js/jquery-3.0.0.min.js"></script> -->
<!-- ------------ -->
<!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/dataRender/datetime.js"></script>
  