<?php
require_once('../config/bd.php');
session_start();
class Tarea
    {     
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar($id){
            
            try {
                $sql = 'SELECT * FROM public."CHAMBISTA_TAREA" 
                INNER JOIN public."TAREAS_ASIGNADAS" ON "FK_tareaAsignada"="FK_tarea" 
                JOIN public."TAREAS" ON "FK_tarea" = "ID_tarea"
                JOIN public."STATUS_TAREA" ON "FK_statusTarea"="ID_statusTarea"
                JOIN public."EVALUACION" ON "ID_evaluacionTarea"="FK_evaluacion"
                JOIN public."CHAMBISTA" ON "FK_chambista"="ID_chambista"
                JOIN public."PERSONA" ON "FK_persona" = "ID_persona" where "FK_chambista"=:id';
                $query = $this->conn->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                if(!$query){
                    die("ERROR");
                }else{
                    
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                    $arreglo["data"]= $data;
                    echo json_encode($arreglo);
                }

            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
        

        public function  mostrar_datos($id){
            try {
                $sql = 'SELECT * FROM public."CHAMBISTA_TAREA" 
                INNER JOIN public."TAREAS_ASIGNADAS" ON "FK_tareaAsignada"="FK_tarea" 
                JOIN public."TAREAS" ON "FK_tarea" = "ID_tarea"
                JOIN public."STATUS_TAREA" ON "FK_statusTarea"="ID_statusTarea"
                JOIN public."EVALUACION" ON "ID_evaluacionTarea"="FK_evaluacion"
                JOIN public."CHAMBISTA" ON "FK_chambista"="ID_chambista"
                JOIN public."PERSONA" ON "FK_persona" = "ID_persona" where "FK_chambista"=:id';

                $query = $this->conn->prepare($sql);
                $query->bindParam(':id', $id);
                $query->execute();
                if(!$query){
                    die("ERROR");
                }else{

                    foreach ($query as $clave) {
                        echo "<input type='hidden' name='chamb' class='form-control' value='".$clave['FK_chambista']."'> ";
                        echo "<input type='hidden' name='id_fktarea' class='form-control' value='".$clave['FK_tarea']."'> ";
                        echo "<input type='hidden' name='id_tarea' class='form-control' value='".$clave['FK_tareaAsignada']."'> ";
                        echo "<input type='text' name='tarea'class='form-control' value='".$clave['tarea']."' readonly> ";
                        echo "<input type='text' name='descripcion' class='form-control'value='".$clave['descripcionTarea']."'> ";
                        echo "<input type='date'name='fecha' class='form-control'value='".$clave['fechaInicio']."'readonly> ";
                        echo "<input type='date'name='fecha' class='form-control'value='".$clave['fechaInicio']."'readonly> ";
                        echo "<input type='date'name='fecha' class='form-control'value='".$clave['fechaInicio']."'readonly> ";
                        echo "<input type='date'name='fecha' class='form-control'value='".$clave['observacion']."'readonly> ";
                    }
                }

            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }


        public function editar($ID_tareasAsigna,$significado,$status,$observacion,$desc,$final,$chamb){
            
            try {
                $sql = 'UPDATE public."TAREAS_ASIGNADAS"
                SET  "fechaInicio"= :fecha,"descripcionTarea"= :descri,
                observacion=:observar,"FK_statusTarea"=:status_tarea, "FK_evaluacion"=:evaluacion
                WHERE "ID_tareasAsigna"= :id';

                $query = $this->conn->prepare($sql);
                $query->bindParam(':fecha', $final);
                $query->bindParam(':descri', $desc);
                $query->bindParam(':observar', $observacion);
                $query->bindParam(':status_tarea', $status);
                $query->bindParam(':evaluacion', $significado);
                $query->bindParam(':id', $ID_tareasAsigna);
                $query->execute();
                if(!$query){
                    die("ERROR");
                    
                }else{
                    header("Location:../Public/detalle.php?id=$chamb");
                }

            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
        public function  consultar_select(){
            try {
                $query = 'SELECT * FROM public."TAREAS" ';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $json[]= array(
                        'Id'=> $mostrar['ID_tarea'],
                        'tareas'=> $mostrar['tarea']
                    );
                 }
               echo json_encode($json);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
        
 
    }

 
    

  
?>