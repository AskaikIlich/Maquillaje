<?php
require_once('../config/bd.php');
session_start();
class Persona
    {
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar_select(){
            try {
                $query = 'SELECT "ID_persona", CONCAT(nombre,apellido) AS full_name 
                FROM public."PERSONA" order by full_name';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $json[]= array(
                        'Id'=> $mostrar['ID_persona'],
                        'persona'=> $mostrar['full_name']
                    );
                 }
               echo json_encode($json);
               
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
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


        public function  insertar(){
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

        public function  consultar_ext(){
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
 
    }

  
?>