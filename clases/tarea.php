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
                INNER JOIN public."TAREAS_ASIGNADAS" ON "FK_tareaAsignada"="ID_tareasAsigna" 
                JOIN public."TAREAS" ON "FK_tarea" = "ID_tarea"
                JOIN public."STATUS_TAREA" ON "FK_statusTarea"="ID_statusTarea"
                JOIN public."EVALUACION" ON "ID_evaluacionTarea"="FK_evaluacion"
                JOIN public."CHAMBISTA" ON "FK_chambista"="ID_chambista"
                JOIN public."PERSONA" ON "FK_persona" = "ID_persona" where "FK_chambista"=:id
                and "FK_statusTarea" <> 4';
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
                if($final==null){
                    $sql = 'UPDATE public."TAREAS_ASIGNADAS"
                    SET "descripcionTarea"= :descri,
                    observacion=:observar,"FK_statusTarea"=:status_tarea, "FK_evaluacion"=:evaluacion
                    WHERE "ID_tareasAsigna"= :id';
    
                    $query = $this->conn->prepare($sql);
                    $query->bindParam(':descri', $desc);
                    $query->bindParam(':observar', $observacion);
                    $query->bindParam(':status_tarea', $status);
                    $query->bindParam(':evaluacion', $significado);
                    $query->bindParam(':id', $ID_tareasAsigna);
                    $query->execute();

                }else{

                $sql = 'UPDATE public."TAREAS_ASIGNADAS"
                SET  "fechaFinal"= :fecha,"descripcionTarea"= :descri,
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
            }
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

        public function insert($chamb,$fk_tareaAsigna){
            try{
                $sql='INSERT INTO public."CHAMBISTA_TAREA"( "ID_chamTarea", "FK_chambista",
                 "FK_tareaAsignada")
                    VALUES (DEFAULT,:fk_chambista,:fk_tareasAsigna)';
                    $query= $this->conn->prepare($sql);
                    $query->bindParam(':fk_chambista',$chamb);
                    $query->bindParam(':fk_tareasAsigna',$fk_tareaAsigna);
                    $query->execute();
                    if(!$query){
                        die("ERROR");
                        
                    }else{
                        header("Location:../Public/detalle.php?id=$chamb");

                    }

            }catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }


        public function insertar($chamb,$fecha,$tareas,$desc,$observacion,$status,$evaluacion){
            
            try {
                $sql='INSERT INTO public."TAREAS_ASIGNADAS"("ID_tareasAsigna",
                    "fechaInicio", "descripcionTarea", observacion, "FK_tarea", "FK_statusTarea", "FK_evaluacion")
                    VALUES ( DEFAULT,:fecha, :descri, :observ, :fk_tarea,:fk_status ,:fk_eval );';

                $query = $this->conn->prepare($sql);
                $query->bindParam(':fecha', $fecha);
                $query->bindParam(':descri', $desc);
                $query->bindParam(':observ', $observacion);
                $query->bindParam(':fk_tarea', $tareas);
                $query->bindParam(':fk_status', $status);
                $query->bindParam(':fk_eval', $evaluacion);
                $query->execute();
                if(!$query){
                    die("ERROR");
                    
                }else{
                    $obtenerid='SELECT * FROM public."TAREAS_ASIGNADAS"
                     order by "ID_tareasAsigna" DESC LIMIT 1';
                     $consulta=$this->conn->prepare($obtenerid);
                     $consulta->execute();
                     if(!$consulta){
                        die("ERROR");
                        
                    }else{
                        $result=$consulta->fetch(PDO::FETCH_ASSOC);
                        $fk_tareaAsigna=$result['ID_tareasAsigna'];
                        $insertar= new Tarea();
                        $tnsertando=$insertar->insert($chamb,$fk_tareaAsigna);
                    }
                     

                }

            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
        
        public function eliminar($status,$fk_tarea,$chamb){
            try {
                $query = 'UPDATE public."TAREAS_ASIGNADAS"
                SET "FK_statusTarea"=:status_tarea WHERE "ID_tareasAsigna"= :id';
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':status_tarea', $status);
                $stmt->bindParam(':id', $fk_tarea);
                $stmt->execute();

                if(!$stmt){
                    die("ERROR");

                }else{
                    header("Location:../Public/detalle.php?id=$chamb");

                }
                
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
        
 
    }

 
    

  
?>