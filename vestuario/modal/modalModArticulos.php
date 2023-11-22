<!-- MODAL --> 
<!-- modal para editar -->
        <div class = "main_form">
            <div class="modal fade" id="modalArticulo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">

                     <div class="modal-header">
                        <h3 class="modal-title">Modificar articulo</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                     </div>                     <!-- formulario -->
                     <form method="POST" id="modificacion" entype="multipart/form-data">                           
                        <div class="modal-body"> 
                        <input class="contactus" type="number" name="ID_articulo" id="ID_articulo" readonly>                            
                           
                           <h3>Descripcion</h3>
                           <select name="Mdescripcion" id="Mdescripcion" class="contactus"> 
                              <option>Seleccione:</option>
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
                           <select name="Mcolor" id="Mcolor" class="contactus"> 
                              <option>Seleccione:</option>
                              <?php
                           foreach ($verColor as $color) {
                              echo '<option value="'.$color["ID_color"].'">'.$color["color"].'</option>';
                           }?>
                           </select>
                           
                           <h3>Detalles</h3>
                           <select name="Mdetalles" id="Mdetalles" class="contactus"> 
                              <option value=" ">Seleccione:</option>
                              <?php
                           foreach ($verDetall as $deta) {
                              echo '<option value="'.$deta["ID_detalle"].'">'.$deta["detalle"].'</option>';
                           }?>
                           </select>
                        </div>  

                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary aplicarMod" name = "btnIngresar" value="2">Aplicar</button>                     
                              <!-- <input type="submit" class="btn btn-primary aplicarMod" name = "btnIngresar" value = "Aplicar"> -->
                              <!-- <input class="btn btn-primary" type="submit" name="btnIngresar" value="2">Aplicar</button> -->
                              
                           </div>
                     </form>
                  </div>
                     
               </div>
            </div>
         </div>
      