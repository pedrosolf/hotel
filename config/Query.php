<?php
    class Query extends Conexion{
        private $con, $pdo;

        public function __construct(){
            $this->con = new Conexion();
            $this->pdo = $this->con->getConn();
        }

        public function select($sql){
            $result = $this->pdo->prepare($sql);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function selectAll($sql){
            $result = $this->pdo->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert($sql, $array){
            $result = $this->pdo->prepare($sql);
            $data = $result->execute($array);

            if ($data){
                $res = $this->pdo->lastInsertId();
            }else{
                $res = 0;
            }

            return $res;
        }

        public function save($sql, $array){
            $result = $this->pdo->prepare($sql);
            $data = $result->execute($array);

            if ($data){
                $res = 1;
            }else{
                $res = 0;
            }

            return $res;
        }
    }
?>