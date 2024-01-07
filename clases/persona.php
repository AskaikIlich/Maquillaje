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
                $query = 'SELECT * FROM public."PERSONA"';
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
     
        public function existencia($cedula){
            try {
                $sql = 'SELECT * FROM public."PERSONA" WHERE cedula = :cedula';
                $query= $this->conn->prepare($sql);
                $query->bindParam(':cedula',$cedula);
                $query->execute();
                $cuenta= $query->rowCount();
                    return $cuenta;
               

            }catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }

        public function  insertar($nombre,$apellido,$cedula,$telef,$correo){
            try {
                $query = 'INSERT INTO public."PERSONA"(
                    nombre, apellido, cedula, telefono, correo)
                    VALUES ( :nombre, :apellido, :cedula, :telefono, :correo)';
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':nombre',$nombre);
                $stmt->bindParam(':apellido',$apellido);
                $stmt->bindParam(':cedula',$cedula);
                $stmt->bindParam(':telefono',$telef);
                $stmt->bindParam(':correo',$correo);
                $stmt->execute();
                if(!$stmt){
                    die("ERROR");

                }else{
                    header("Location:../Public/persona.php?exito=1");

                }
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

        public function eliminar($idpersona){
            try {
                $query = 'DELETE FROM public."PERSONA"
                WHERE "ID_persona"=:elim';
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':elim',$idpersona);
                $stmt->execute();
                if(!$stmt){
                    die("ERROR");
                }else{
                    header("Location:../Public/persona.php?exito=3");
                }
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }

        public function editar($nombre,$apellido,$cedula,$telef,$correo,$id){
            try {
                $query = 'UPDATE public."PERSONA"
                SET  nombre=:nombre, apellido=:apellido, cedula=:cedula, telefono=:telef, correo=:correo
                WHERE "ID_persona"=:id';
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':nombre',$nombre);
                $stmt->bindParam(':apellido',$apellido);
                $stmt->bindParam(':cedula',$cedula);
                $stmt->bindParam(':telef',$telef);
                $stmt->bindParam(':correo',$correo);
                $stmt->bindParam(':id',$id);
                $stmt->execute();
                if(!$stmt){
                    die("ERROR");
                }else{
                    header("Location:../Public/persona.php?exito=2");
                }
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage();
            }
        }
 
    }

  
?>