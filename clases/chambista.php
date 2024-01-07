<?php
require_once('../config/bd.php');
class chambista
    {
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar(){
            try {
                $query = 'SELECT * FROM public."CHAMBISTA" INNER JOIN public."PERSONA" ON "ID_persona"="FK_persona" JOIN public."DIVISION" ON "FK_division" = "ID_division"';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                     $json["data"][]=$mostrar;
                 }
                echo json_encode($json);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }

        public function inserta($inicio,$final,$division,$personal){
            try{
                $sql='INSERT INTO public."CHAMBISTA"(
                    "ID_chambista", "FK_persona", "FK_division", "fechaIngreso", "fechaCulminacion")
                     VALUES (DEFAULT,:personal,:division,:inicio,:final)';
                    $query= $this->conn->prepare($sql);
                    $query->bindParam(':personal',$personal);
                    $query->bindParam(':division',$division);
                    $query->bindParam(':inicio',$inicio);
                    $query->bindParam(':final',$final);
                    $query->execute();
                    if(!$query){
                        die("ERROR");
                        
                    }else{
                        header("Location:../Public/chambista.php");

                    }

            }catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }


        public function edicion($inicio,$final,$id){
            try{
                $sql='UPDATE public."CHAMBISTA"
                SET  "fechaIngreso"=:inicio, "fechaCulminacion"=:final
                WHERE "ID_chambista"=:id';
                    $query= $this->conn->prepare($sql);
                    $query->bindParam(':inicio',$inicio);
                    $query->bindParam(':final',$final);
                    $query->bindParam(':id',$id);
                    $query->execute();
                    
                    if(!$query){
                        die("ERROR");
                        
                    }else{
                        header("Location:../Public/chambista.php");

                    }

            }catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
    }

  
?>