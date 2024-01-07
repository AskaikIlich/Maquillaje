<!-- Modal Registrar Persona-->
<div class="modal fade" id="ingresar-persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="container">
                <form action="../control/persona.php" method="post">
                <input type="hidden" name="accion" value="1">
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nombre:</label>           
                    <input class="form-control" name="nombre" type="text" required> 
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Apellido:</label>           
                    <input class="form-control" name="apellido" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Cedula:</label>           
                    <input class="form-control" name="cedula" type="text" pattern="[0-9]{7,8}" title="Ingrese una Cedula valida" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Telefono:</label>           
                    <input class="form-control"  name="telef" type="tel" pattern="[0-9]{11}" title="Ingrese un numero de telefono valido" required>
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Correo:</label>           
                    <input class="form-control"  name="correo" type="email" required>
                 </div>
             </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="Post" class="btn btn-primary">Guardar</button>
        </form>

      </div>
    </div>
  </div>
</div>


<!-- Inicio Eliminar(Persona)-->
<div class="modal fade" id="eliminar-persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Estas Seguro?</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../control/persona.php" method="post">
        <input type="hidden" value="3" name="accion">
        <input type="hidden" name="id_person"  id="eliminar"> 
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

<!-- Inicio Editar(Persona)-->

<div class="modal fade" id="editar-persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="container">
                <form action="../control/persona.php" method="post">
                <input type="hidden" name="accion" value="2">
                <input type="hidden" name="id" id="id-per">
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nombre:</label>           
                    <input class="form-control" name="nombre" id="nombre" type="text" required> 
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Apellido:</label>           
                    <input class="form-control" name="apellido"id="apellido" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Cedula:</label>           
                    <input class="form-control" name="cedula" id="cedula"type="text" pattern="[0-9]{7,8}" title="Ingrese una Cedula valida" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Telefono:</label>           
                    <input class="form-control"  name="telef" id="telef" type="tel" pattern="[0-9]{11}" title="Ingrese un numero de telefono valido" required>
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Correo:</label>           
                    <input class="form-control"  name="correo" id="correo" type="email" required>
                 </div>
             </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="Post" class="btn btn-primary">Guardar</button>
        </form>

      </div>
    </div>
  </div>
</div>