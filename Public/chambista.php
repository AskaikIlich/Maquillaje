<?php   
 include("../templates/header.php");
?>
<div id="service"  class="service">
         

<div class="container">
    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="chambista" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Division</th>
                                            <th>Cod.Chamba</th>                                         

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Division</th>
                                            <th>Cod.Chamba</th>    

                                           
                                           

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
<?php include("../templates/footer.php"); ?>

<!-- Page datatables scripts -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables/datatables-chambista.js"></script>