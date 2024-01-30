<?php
    class Conexion{
        private $conn;

        public function __construct(){
            $pdo = "mysql:host=" . HOST . ";dbname=" . DATABASE . ";" . CHARSET;
            
            try {
                $this->conn = new PDO($pdo, USER, PASS);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error en conexion: ". $e->getMessage();
            }
        }

        public function getConn(){
            return $this->conn;
        }
    }
?>