<?php
class Conec{  
  static function conectar(){
    $host="localhost"; $bd="bdVestuario"; $user ="postgres";
    $password='he290615';     $conn;
      try {
          $connection = "pgsql:host=" . $host . ";dbname=" . $bd;
          $conn = new PDO($connection, $user, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "conectado";
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        
        return $conn;
  }
}                   //SI ESTA CONECTANDO
  ?>        