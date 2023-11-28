<?php
require_once('../config/conexion.php');
class Articulo extends Conexion {
    private $descripcion;
    private $color;
    private $detalle;
    private $estatus;
    private $todo;
    // public  $marca;
    // public function setColor($color){
    //     $this->color = $color;
    // }
    // public function getColor(){
    //     return $this->color;
    // }

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conectar();
    }
    
    public function addArticulo(int $Vardescripcion, int $Varcolor, int $Vardetalle){
        $this->descripcion = $Vardescripcion;
        $this->color = $Varcolor;
        $this->detalle = $Vardetalle;
        // $this->estatus = $Varestatus;
        // $this->marca = $Varmarca;

        $query = "INSERT INTO ARTICULO (FK_descripcion, FK_color, FK_detalle) VALUES (?,?,?);";
        $insert = $this->conexion->prepare($query);

        $arrData = array($this->descripcion, $this->color, $this->detalle);

        $insertando = $insert->execute($arrData);

        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }

    public function getArticulos(){
        $query = "SELECT * FROM ARTICULO
        INNER JOIN DESCRIPCION ON ARTICULO.FK_descripcion = DESCRIPCION.ID_descripcion
        INNER JOIN COLOR ON ARTICULO.FK_color = COLOR.ID_color
        INNER JOIN DETALLE ON ARTICULO.FK_detalle = DETALLE.ID_detalle
        INNER JOIN ESTATUS ON ARTICULO.FK_estatus = ESTATUS.ID_estatus
        ORDER BY `ARTICULO`.`ID_articulo` DESC;";
        $execute = $this->conexion->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function getDescripcion(){
        $query = "SELECT * FROM DESCRIPCION";
        $execute = $this->conexion->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getColor(){
        $query = "SELECT * FROM COLOR";
        $execute = $this->conexion->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
    public function getDetalles(){
        $query = "SELECT * FROM DETALLE";
        $execute = $this->conexion->query($query);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function updateArticulos(int $Vardescripcion, int $Varcolor, int $Vardetalle){
        $this->descripcion = $Vardescripcion;
        $this->color = $Varcolor;
        $this->detalle = $Vardetalle;

        $query= "UPDATE ARTICULO SET FK_descripcion = ?, FK_color   = ?, FK_detalle = ?
        WHERE ARTICULO.ID_articulo = ?";
        $update = $this->conexion->prepare($query);
        $arrData = array($this->descripcion, $this->color, $this->detalle);
    }
}

// $articuloUno = new Articulo();
// $articuloUno->setColor('Rojo');

// <!-- language: {
//         url: 'dataTables.spanish.json'
// }, -->
?>