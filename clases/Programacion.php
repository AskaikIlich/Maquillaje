<?php
require_once('../config/bd.php');

class Programacion {

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addProgramacion(int $programa, $hora, $fecha){
        $this->programa = $programa;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $query = 'INSERT INTO public."PROGRAMACION"("FK_programa", "horaPrograma", "fechaPrograma")
            VALUES ( ?, ?, ?);';
        $insert = $this->conn->prepare($query);
        $arrData = array($this->programa, $this->hora, $this->fecha);
        $insertando = $insert->execute($arrData);
    }
    
    public function getProgramas(){
        $query = 'SELECT * FROM public."PROGRAMA"';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    
    public function getProgramacionTabla(){
        try {
            $query = 'SELECT * FROM public."PROGRAMACION"
            INNER JOIN public."PROGRAMA" ON "FK_programa" = "ID_programa";';
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