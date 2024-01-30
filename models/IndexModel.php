<?php
    class IndexModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function getRoomType(){
            return $this->selectAll("SELECT * FROM  room_type");
        }

    }
?>