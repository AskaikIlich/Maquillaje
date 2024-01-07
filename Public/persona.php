<?php 
 include("../templates/header.php"); 
?> 
    <center><h1 style="margin-top: 8%;">Personas</h1></center><br></div> 
<div class="container">
<div class="card-body">
     <div class="table-responsive">
                <table class="table table-bordered" id="persona" width="100%" cellspacing="0">
                <button class="btn btn-success" data-toggle="modal" data-target="#ingresar-persona"> Registrar</button>
                        <thead>
                         <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>

                         </tr>
                        </thead>
                        <tfoot>
                             <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<?php include("../templates/footer.php"); ?>
<?php include("modal_Persona.php"); ?>
<!-- Page datatables scripts -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-persona.js"></script>
<!-- Page Sweet Alert scripts -->
<script src="../vendor/sweet/dist/sweetalert2.all.min.js"></script>
<script src="../js/alerts.js"></script>
