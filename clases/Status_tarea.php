<?php
require_once('../config/bd.php');
session_start();
class STATUS_TAREA
    {
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar_select(){
            try {
                $query = 'SELECT * FROM public."STATUS_TAREA" ';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $json[]= array(
                        'Id'=> $mostrar['ID_statusTarea'],
                        'Status'=> $mostrar['statusTarea']
                    );
                 }
               echo json_encode($json);
               
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
    }

  
?>