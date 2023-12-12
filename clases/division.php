<?php
require_once('../config/bd.php');
session_start();
class Division
    {
        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }
    
        public function  consultar_select(){
            try {
                $query = 'SELECT "ID_division", division, "FK_gerencia"
                FROM public."DIVISION" where "FK_gerencia"=4 or "FK_gerencia"=8 order by division;';
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $json[]= array(
                        'Id'=> $mostrar['ID_division'],
                        'division'=> $mostrar['division']
                    );
                 }
               echo json_encode($json);
               
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
    }

  
?>