
<select name="descrip" id="descrip">
    <option>Descripcion</option>
  <?php      foreach ($ver as $clave) {    ?>
        <option value="<?php echo $clave['ID_descripcion']; ?>"> aja<?echo $clave['ID_descripcion'];?></option>
        <?php }
        ?> 
        </select>
<?php
            // indexo
// require_once('control/articuloControl.php');
// require_once('Articulo.php');

// $Objarticulo = new Articulo();
// $verDescrip = $Objarticulo->getDescripcion();

// $Objcolor = new Articulo();
// $verColor  = $Objcolor->getColor();

//  $ObjDetall = new Articulo();
//  $verDetall = $ObjDetall->getDetalles();
// // echo " Si";

// $todo = $_POST['descrip'] &&  $_POST['color'] && $_POST['detalle'];
// if ($todo) {
// $vardescrip = $_POST['descrip'];
// $varcolor = $_POST['color'];
// $vardetalle = $_POST['detalle'];

//     $agregar = new Articulo();
//     $agregando = $agregar->addArticulo($vardescrip, $varcolor, $vardetalle);
// } else {
//     // echo "Faltan datos para ingresar correctamente ";     AGREGAR UN ALERT Y EL BOTON
// }

// echo $agregando;
?>


<form method="post">    
    <select name="descrip" id="descrip" required>
    <option value="">Descripcion</option>
    <?php      foreach ($verDescrip as $clave) {    ?>
        <option value="<?php echo $clave['ID_descripcion']; ?>"> <?php echo $clave['descripcion']; ?></option>
        <?php }?> 
    </select>
    
    <select name="color" id="color" required>
    <option value="">Color</option>
    <?php      foreach ($verColor as $clave) {    ?>
        <option value="<?php echo $clave['ID_color']; ?>"> <?php echo $clave['nombreColor']; ?></option>
        <?php }?> 
    </select>

    <select name="detalle" id="detalle" required>
    <option value="">Detalle</option>
    <?php      foreach ($verDetall as $clave) {    ?>
        <option value="<?php echo $clave['ID_detalle']; ?>"> <?php echo $clave['detalle']; ?></option>
        <?php }?> 
    </select>

    <button type="submit" name="enviado">Enviar</button>
</form>
<?php                 

// $ver = $Objarticulo->getArticulos();
// foreach ($ver as $clave) {
//     // $array[3] se actualizará con cada valor de $array...
//      echo $clave['ID_articulo'] . "  ";
//      echo $clave['descripcion'] . "  ";
//      echo $clave['nombreColor'] . "  ";
//      echo $clave['detalle'] . "  ";
//      echo "<br>";
// }
?>


      <!-- fin indexo -->







      <?php 
class Conexion{
    private $host="localhost"; private $bd="bdVestuario"; private $user ="postgres";
    private $password='he290615';     private $conn;

    public function __construct(){
        try {
            $connection = "pgsql:host=" . $this->host . ";dbname=" . $this->bd;
            $conn = new PDO($connection, $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            $this->conn = 'error de conexion';
            echo "Error: " . $e->getMessage();
        }
        return $conn;

    }

    public function conectar(){
        return $this->conn;
    }

}




require_once('../config/conexion.php');
class Usuario extends Conexion {
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

    public function logUsuario($usuario, $clave){
        $sql = "SELECT * FROM usuario WHERE usuario = $usuario ";
        $query = $this->conexion->prepare($sql);
        // $query->bindParam(1, $usuario);
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
}





public function __construct(){
    try {
        $connection = "pgsql:host=" . $this->host . ";dbname=" . $this->bd;
        $this->conn = new PDO($connection, $this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $this->conn = 'error de conexion';
        echo "Error: " . $e->getMessage();
    }
}

try {
    $connection = "pgsql:host=" . $this->host . ";dbname=" . $this->bd;
    $conn = new PDO($connection, $this->user, $this->password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // return $conn;
} catch (PDOException $e) {
    $this->conn = 'error de conexion';
    echo "Error: " . $e->getMessage();
}