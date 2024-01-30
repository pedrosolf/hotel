<?php
    class LoginModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function getUser($email){
            $sql = "SELECT * FROM users WHERE email='$email'";
            return $this->select($sql);
        }
    }
?>