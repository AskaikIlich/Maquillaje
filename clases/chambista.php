<?php
require_once('../config/bd.php');
session_start();
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
 
    }

  
?>