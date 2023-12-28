<!-- Modal Editar-->
<div class="modal fade" id="editar-tarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/detalle.php" method="post">
          <input type="hidden" name="accion" value="2">
          <input type="hidden" name="ID_tareasAsigna" id="ID_tareasAsigna">
          <input type="hidden" name="chamb" id="chamb">

          <div class="form-group col">
                  <label for="recipient-name" class="col-form-label">Tarea:</label>
                  <input type="text" class="form-control"  id="tarea" readonly>
              </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                    <label for="recipient-name" class="col-form-label">Fecha de Inicio:</label>
                    <input type="date" class="form-control" id="inicio" readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="recipient-name" class="col-form-label">Fecha De Culminación:</label>
                  <input type="date" class="form-control" name="final" id="final">
              </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción de Tarea:</label>
            <textarea class="form-control" name="desc" id="desc"></textarea>
          </div>
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Observación:</label>
            <textarea class="form-control" name="observacion"id="observacion"></textarea>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Status:</label>
                <select type="text" class="form-control" name="status" id="status"> 
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Evaluación:</label>
                <select type="text" class="form-control" name="significado" id="significado"> 
                </select>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Fin Modal Editar(Detalle)-->


<!-- Modal Agregar(Detalle)-->
<div class="modal fade" id="agregar-tarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/detalle.php" method="post">
        <input type="text" value="1" name="accion">
        <input type="hidden" name="chamb" value="<?php echo $_GET['id']?>" id="chamb">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Tarea:</label>
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>





<!-- FinModal Agregar(Detalle)-->


<!-- Inicio Eliminar(Detalle)-->
<div class="modal fade" id="eliminar-tarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Estas Seguro?</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/detalle.php" method="post">
        <input type="hidden" value="3" name="accion">
        <input type="hidden" name="chambista" id="chambista">
        <input type="hidden" name="FK_asignada"  id="eliminar"> 
        <p>Los registros seran elminados permanentemente</p>             
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- FIN Eliminar(Detalle)-->
<!-- Modal Agregar(Chambista)-->
<div class="modal fade" id="agregar-chambista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/chambista.php" method="post">
          <input type="hidden" name="accion" value="1">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Persona:</label>           
            <select type="text" class="form-control" name="personal" id="personal"> 
                </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Division:</label>           
            <select type="text" class="form-control" name="division" id="division"> 
                </select>
          </div>
         
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fecha de Ingreso:</label>           
            <input class="form-control" name="ingreso" type="date">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fecha de Culminación:</label>           
            <input class="form-control"  name="salida" type="date">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- FinModal Agregar(Chambista)-->

<!-- Inicio Editar(Chambista)-->
<div class="modal fade" id="editar-chambista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Editar</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/chambista.php" method="post">
          <input type="hidden" name="accion" value="2">
          <input type="hidden"name="id_chamb" id="id_chamb">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Fecha de Ingreso:</label>           
            <input class="form-control" id="ingreso" name="ingreso" type="date">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fecha de Culminación:</label>           
            <input class="form-control" id="salida" name="salida" type="date">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- FIN Editar(Chambista)-->

