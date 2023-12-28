<?php
require_once('../config/bd.php');

class Presentacion {

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function addPresentacion($persona, $tipoCita, $programacion){
        $this->persona = $persona;
        $this->tipoCita = $tipoCita;
        $this->programacion = $programacion;
        $query = 'INSERT INTO public."PRESENTACION"("FK_programacion", "FK_persona", "FK_tipoCita") VALUES ( ?, ?, ?);';
        $insert = $this->conn->prepare($query);
        $arrData = array($this->persona, $this->tipoCita, $this->programacion);
        $insertando = $insert->execute($arrData);
    }
    
    public function getCitas(){
        $query = 'SELECT * FROM public."TIPO_CITA"';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function getPersonas(){
        $query = 'SELECT * FROM public."PERSONA"';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    
    // public function getPresentacionTabla(){
    //     try {
    //         $query = 'SELECT * FROM public."PRESENTACION"
    //         -- INNER JOIN public."PROGRAMA" ON "FK_programa" = "ID_programa";
    //         ';
    //         $stmt = $this->conn->prepare($query);
    //         $stmt->execute();
    //         while( $mostrar=$stmt->fetch(PDO::FETCH_ASSOC))
    //         {
    //              $json["data"][]=$mostrar;
    //          }
    //         echo json_encode($json);
    //     } catch (PDOException $e) {
    //         print "Error!: " . $e->getMessage();
    //     }
    // }
}

?>