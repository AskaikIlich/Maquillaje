<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'BDVestuario1611';
    private $username = 'postgres';
    private $password = 'he290615';
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("pgsql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            echo phpinfo();
        }
        return $this->conn;
    }
}
?>