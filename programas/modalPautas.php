      <div class="modal fade" id="modalPautas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
   
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h3 class="modal-title">Definir pautas de la programacion</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
               </div>
               <div class="modal-body"> <!-- impresion de tabla para busqueda -->
                  <!-- <table class="table" id="tablaingresoSel" > no seria una tabla -->
                     <thead>
                        <tr>
                        <div>
                           <input type="text" id="programa" class="contactus border-0">
                           <input type="time" id="horaPrograma" class="contactus border-0">
                        </div>
                        <div>                              
                           <input type="date" id="fechaPrograma" name="fechaPrograma" class="contactus border-0">
                        </div>
                        </tr>
                     </thead>
                     <tbody>   
<!-- <div id="formId" name="formId">   
   <input type="text" id="ID_programacion" name="ID_programacion" style=display:none>
   </div> -->
   
                        <form class="main_form" id="formaddPresentacion"> 
                           <div>
                              <input type="text" id="ID_programacion" name="ID_programacion" >
                              <select name="ID_persona" id="ID_persona" class="contactus" required> 
                              <option id="persona" name="persona"  value="">Persona:</option>
                              <?php
                              foreach ($personasPre as $perso) {                            
                                 echo '<option value="'.$perso["ID_persona"].'">'.$perso["nombre"].' '.$perso["apellido"]. '</option>'; 
                              }
                              ?>
                              </select>
                           </div>
                           <div>
                              <select name="ID_tipoCita" id="ID_tipoCita" class="contactus" required> 
                                 <option value="">Tipo de cita:</option>
                                 <?php
                                 foreach ($citasPre as $cita) {                            
                                    echo '<option value="'.$cita["ID_tipoCita"].'">'.$cita["tipoCita"].'</option>'; 
                                 }?>
                              </select>
                           </div>
                           <div>
                              <button id="btnAdd" type="button" class="btn btn-danger">Agregar Otro</button>
                              <button id="btnSave" type="button" class="btn btn-info">Guardar</button>
                              <!-- <button class="btn btn-primary selectbtn" name="selectbtn" id="selectbtn">Seleccionar</button> -->
                           </div>
                        </form>
                     </tbody>
                  <!-- </table> -->                     
                  <div id="jsonDiv"></div>

                  <div class="col-md-7">
                     <button class="delete"></button>
                     <div id="divElements"></div>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
