<?php
require_once('../config/bd.php');
session_start();
class Evaluacion
    {
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar_select(){
            try {
                $query = 'SELECT * FROM public."EVALUACION" ';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $json[]= array(
                        'Id'=> $mostrar['ID_evaluacionTarea'],
                        'significado'=> $mostrar['significado']
                    );
                 }
               echo json_encode($json);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
    }

  
?>