<?php
require_once('../config/bd.php');

class Articulo {
    // private $descripcion;
    // private $color;
    // private $detalle;
    // private $estatus;
    // private $todo;
    // public function setColor($color){
    //     $this->color = $color;
    // }
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function addArticulo(int $Vardescripcion, int $Varcolor, int $Vardetalle){
        $this->descripcion = $Vardescripcion;
        $this->color = $Varcolor;
        $this->detalle = $Vardetalle;    
        $query = 'INSERT INTO public."ARTICULO"("FK_descripcion", "FK_color", "FK_detalle", "FK_statusArt") 
                VALUES (?, ?, ?,2);';
        $insert = $this->conn->prepare($query);
        $arrData = array($this->descripcion, $this->color, $this->detalle);
        $insertando = $insert->execute($arrData);
    }

    public function getArticulosTabla(){
        try {
            $query = 'SELECT * FROM public."ARTICULO"
            INNER JOIN public."DESCRIPCION" ON "FK_descripcion" = "ID_descripcion"
                  JOIN public."COLOR"   ON "FK_color"   = "ID_color"
                  JOIN public."DETALLE" ON "FK_detalle" = "ID_detalle"
                  JOIN public."STATUS_ARTICULO" ON "FK_statusArt" = "ID_statusArt"';
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
    public function getDescripcion(){
        $query = 'SELECT * FROM public."DESCRIPCION"';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getColor(){
        $query = 'SELECT * FROM public."COLOR" ORDER BY "color" ASC';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getDetalles(){
        $query = 'SELECT * FROM public."DETALLE"';
        $execute = $this->conn->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function updateArticulos(int $Vardescripcion, int $Varcolor, int $Vardetalle, int $id){
        $this->descripcion = $Vardescripcion;
        $this->color = $Varcolor;
        $this->detalle = $Vardetalle;        
        $this->id = $id;        
        $query= 'UPDATE public."ARTICULO" SET "FK_descripcion"=?, "FK_color"=?, "FK_detalle"=?
        WHERE "ID_articulo"= ?;';
        $update = $this->conn->prepare($query);
        $arrData = array($this->descripcion, $this->color, $this->detalle, $this->id);
        $actualizando = $update->execute($arrData);
    }
    
    public function editar($ID_tareasAsigna,$significado,$status,$observacion,$desc,$final,$chamb){            
        try {
            $sql = 'UPDATE public."TAREAS_ASIGNADAS"
            SET  "fechaInicio"= :fecha,"descripcionTarea"= :descri,
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
            if(!$query){
                die("ERROR");
                
            }else{
                header("Location:../Public/detalle.php?id=$chamb");
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
        }
    }
}

// $articuloUno = new Articulo();
// $articuloUno->setColor('Rojo');

// <!-- language: {
//         url: 'dataTables.spanish.json'
// }, -->
?>