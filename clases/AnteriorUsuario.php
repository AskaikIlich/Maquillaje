<?php
require_once('../config/conexion.php');
class Usuario {
    private $usuario;
    private $clave;
    private $nombre;
    private $apellido;
    private $tipoUs;
    private $estatusUs;
    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conectar();
    }

                        // trae todos los datos del usuario
    // public function consulta($usuario){
    //     $sentencia = ("SELECT * FROM USUARIO WHERE usuario = :usuario");
    //     $query = $this->conexion->prepare($sentencia);
    //     $query->bindparam(":usuario", $usuario);
    //     $query->execute();
    //     $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    // }

    // desde el header echo $usuarioData->getNombre()

    // public function logUsuario($usuario, $clave){
    //     $sql = "SELECT * FROM public."USUARIO" WHERE usuario = ':este' ";
    //     $query = $this->conexion->prepare($sql);
    //     $query->bindParam(':este', $usuario);
    //     $query->execute();

    //     if ($query->rowCount() == 1) {
    //         $row = $query->fetch(PDO::FETCH_ASSOC);
    //         $passwordHashed = $row["clave"];

    //         if ($clave == $passwordHashed) {
    //             if ($row['FK_status'] == 1) {
    //                 $_SESSION['datosUs']= $row;
    //                 return "si";
    //             } else {
    //                 return 'Usuario Inactivo';
    //             }
    //         } else {
    //             return "Clave incorrecta" ;
    //         }
    //     } else {
    //         return "Usuario incorrecto";
    //     }
    //                 // para retener la informacion del usuario
    //     $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    // }

    public function logUsuario($usuario, $clave){
        $sql = "SELECT * FROM USUARIO WHERE usuario = $1 ";
        $query = $this->conexion->prepare($sql);
        $query->bindParam(1, $usuario);
        $query->execute();
    
        if ($query->rowCount() == 1) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $passwordHashed = $row["clave"];
    
            if ($clave == $passwordHashed) {
                if ($row['FK_status'] == 1) {
                    $_SESSION['datosUs']= $row;
                    return "si";
                } else {
                    return 'Usuario Inactivo';
                }
            } else {
                return "Clave incorrecta" ;
            }
        } else {
            return "Usuario incorrecto";
        }
                    // para retener la informacion del usuario
        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    }

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function login($usuario, $contrasena) {
        try {
            $query = 'SELECT * FROM "USUARIO" WHERE usuario = :usuario AND clave = :contrasena';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                // Usuario válido, iniciar sesión o realizar otras acciones necesarias
                return true;
            } else {
                // Usuario inválido
                return false;
            }
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    

    // public static function estaLogeado(){
    //     return isset($_SESSION["usuarioLogeado"]);
    // }

    public function getNombre($usuario) {
        $sql = "SELECT * FROM USUARIO WHERE usuario = :este ";
        $query = $this->conexion->prepare($sql);
        $query->bindParam(':este', $usuario);
        $query->execute();
        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        $otra= $this->sqlData["nombre"] ." ". $this->sqlData["apellido"] ;
        return $otra;
        // return $this->sqlData;
    }

    public function getDatos($usuario) {
        $sql = "SELECT * FROM USUARIO WHERE usuario = :este ";
        $query = $this->conexion->prepare($sql);
        $query->bindParam(':este', $usuario);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        $todo = $this->sqlData;
        return $todo;
    // Asignar datos consultados al objeto para las validaciones, retornar el objeto ya hecho?¿
        // $datosUs = new Usuario;
        // $this->nombre= $this->sqlData["nombre"];
        // $this->tipoUs= $this->sqlData["FK_tipoUsuario"];
        // $this->estatusUs= $this->sqlData["FK_estatusUs"];

        // $this->nombre=    $sqlData["nombre"];
        // $this->tipoUs=    $sqlData["FK_tipoUsuario"];
        // $this->estatusUs= $sqlData["FK_estatusUs"];

        // $otra= $this->sqlData["nombre"] ." ". $this->sqlData["apellido"] ;
        // return $otra;
        // return $this->sqlData;
        // return $this->datosUs;
    }


    // public function addUsuario($Varusuario, int $Varclave, $Varnombre, $Varapellido){
    //     $this->nombre = $Varnombre;
    //     $this->apellido = $Varapellido;
    //     $this->usuario = $Varusuario;
    //     $this->clave = $Varclave;
    //     $this->tipoUs = $VartipoUs;
    //     $query = "INSERT INTO USUARIO (nombre, apellido, usuario, password, FK_tipoUsuario, FK_estatusUs)
    //     VALUES (?,?,?,?,?,1);";
    //     $insert = $this->conexion->prepare($query);
    //     $arrData = array($this->nombre,$this->apellido,$this->usuario,$this->clave,$this->tipoUs);
    //     $insertando = $insert->execute($arrData);
    //     $idInsert = $this->conexion->lastInsertId();
    //     return $idInsert;
    // }



     // public function getArticulos(){
    //     $query = "SELECT * FROM ARTICULO
    //     INNER JOIN DESCRIPCION ON ARTICULO.FK_descripcion = DESCRIPCION.ID_descripcion
    //     INNER JOIN COLOR ON ARTICULO.FK_color = COLOR.ID_color
    //     INNER JOIN DETALLE ON ARTICULO.FK_detalle = DETALLE.ID_detalle
    //     INNER JOIN ESTATUS ON ARTICULO.FK_estatus = ESTATUS.ID_estatus
    //     ORDER BY `ARTICULO`.`ID_articulo` DESC;";
    //     $execute = $this->conexion->query($query);
    //     $request = $execute->fetchall(PDO::FETCH_ASSOC);
    //     return $request;
    // }


        // $query= "UPDATE ARTICULO SET FK_descripcion = ?, FK_color   = ?, FK_detalle = ?
        // WHERE ARTICULO.ID_articulo = ?";
        // $update = $this->conexion->prepare($query);
        // $arrData = array($this->descripcion, $this->color, $this->detalle);

    // fijarse si funciona el update de articulos y a partir de ahi hacer la busqueda de usuarios

    // public function getColor(){
    //     $query = "SELECT * FROM COLOR";
    //     $execute = $this->conexion->query($query);
    //     $request = $execute->fetchall(PDO::FETCH_ASSOC);
    //     return $request;
    // }

    // public function getDetalles(){
    //     $query = "SELECT * FROM DETALLE";
    //     $execute = $this->conexion->query($query);
    //     $request = $execute->fetchall(PDO::FETCH_ASSOC);
    //     return $request;
    // }

    // public function updateArticulos(int $Vardescripcion, int $Varcolor, int $Vardetalle){
    //     $this->descripcion = $Vardescripcion;
    //     $this->color = $Varcolor;
    //     $this->detalle = $Vardetalle;

    //     $query= "UPDATE ARTICULO SET FK_descripcion = ?, FK_color   = ?, FK_detalle = ?
    //     WHERE ARTICULO.ID_articulo = ?";
    //     $update = $this->conexion->prepare($query);
    //     $arrData = array($this->descripcion, $this->color, $this->detalle);
    // }

}

// $articuloUno = new Articulo();
// $articuloUno->setColor('Rojo');

?>