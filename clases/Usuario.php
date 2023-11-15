<?php
require_once '../config/bd.php';

class Usuario {
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

    // public function getDatos($usuario) {
    //     $sql = 'SELECT * FROM "USUARIO" WHERE usuario = :este ';
    //     $query = $this->conn->prepare($sql);
    //     $query->bindParam(':este', $usuario);
    //     $query->execute();

    //     $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    //     $todo = $this->sqlData;
    //     return $todo;
    // }
    
    public function obtenerNombreApellido($usuario) {
        try {
            $query = 'SELECT * 
                      FROM "USUARIO" u 
                    JOIN "PERSONA" p ON u."FK_persona" = p."ID_persona" 
                    WHERE u.usuario = :usuario';

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado; // Devuelve un array con 'nombre' y 'apellido'
            } else {
                return false; // Si el usuario no se encuentra en la base de datos
            }
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}
?>
<!-- 
SELECT * FROM "USUARIO" u 
JOIN PERSONA ON USUARIO.FK_persona = PERSONA.ID_persona 
WHERE USUARIO.usuario = "hemi"


SELECT p.nombre, p.apellido 
FROM "USUARIO" u 
JOIN "PERSONA" p ON u."FK_persona" = p."ID_persona" 
WHERE u.usuario = 'hemi'; -->