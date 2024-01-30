<?php
    class RegisterModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function create($dni,$name,$lastname,$email,$phone,$address,$password){
            $sql = "INSERT INTO users (dni, name, lastname, email, phone, address, password) VALUES (?,?,?,?,?,?,?)";
            return $this->insert($sql, [$dni,$name,$lastname,$email,$phone,$address,$password]);
        }
    }
?>