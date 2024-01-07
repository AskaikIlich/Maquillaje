<?php   
 include("../templates/header.php");

?>
<div id="service"  class="service">
        <br><center> <h1>Listado de Tareas</h1></center>

<div class="container">
    <div class="card-body">
                            <div class="table-responsive">
                                <button class="btn btn-success boton_agregar"data-toggle="modal" data-target="#agregar-tarea">Crear</button> <br> <br>
                                <table class="table table-bordered" id="detalles" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tarea</th>
                                            <th>Descripción</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Culminaciòn</th>
                                            <th>Observaciòn</th>
                                            <th>Status </th>
                                            <th>Evaluacion </th>     
                                            <th>Accion </th>                                                                                                   
     

                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    
                                    <tfoot>
                                        <tr>
                                       <th>Tarea</th>
                                            <th>Descripción</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Culminaciòn</th>
                                            <th>Observaciòn</th>
                                            <th>Status </th>
                                            <th>Evaluaciòn </th>
                                            <th>Accion </th>                                                                                                   

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

</div>
          
      </div>
<?php include("../templates/footer.php");?>

<!-- Page datatables scripts -->
<script src="../js/jquery-3.0.0.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-detalle.js"></script>
<script src="../vendor/datatables/DateTime-1.5.1/js/dataTables.dateTime.min.js"></script>
<script src="../vendor/moment/moment.js"></script>
<script src="../vendor/moment/momento.js"></script>

<?php include('modal.php')  ?>