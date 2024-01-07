<?php   
 include("../templates/header.php");
?>
<div id="service"  class="service">
  <br>  <center><h1>Personal Chambista</h1> </center><br><br>

  <center><button class="btn btn-success boton_agregar"data-toggle="modal" data-target="#agregar-chambista">Crear</button></center>
         

<div class="container">
    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="chambista" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cod.Chamba</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Fecha Culminación</th>
                                            <th>Acciones</th>                                           

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cod.Chamba</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Fecha Culminación</th> 
                                            <th>Acciones</th>               
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
<?php include("../templates/footer.php"); 
include("modal.php")
?>

<!-- Page datatables scripts -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-chambista.js"></script>