<?php
include("../config/db.php");

if ($_POST) {
    $json = json_decode($_POST['nihao']);
    
    foreach ($json as $obj) {  
      $ID_persona =     $obj->ID_persona;
      $ID_programacion= $obj->ID_programacion;
      $ID_tipoCita =    $obj->ID_tipoCita;      
      $proEntre=$conexion->prepare('INSERT INTO public."PRESENTACION"("FK_programacion", "FK_persona", "FK_tipoCita") 
      VALUES (:ID_persona, :ID_programacion, :ID_tipoCita);');
      $proEntre->bindParam(':ID_persona',$ID_persona);
      $proEntre->bindParam(':ID_programacion',$ID_programacion );
      $proEntre->bindParam(':ID_tipoCita',$ID_tipoCita );
      $proEntre->execute();
      //   $query = 'INSERT INTO public."PRESENTACION"("FK_programacion", "FK_persona", "FK_tipoCita") VALUES ( ?, ?, ?);';
    }
}
?>