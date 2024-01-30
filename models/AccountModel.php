<?php
    class AccountModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function getMyBook($id_user){ 

            return $this->selectAll("SELECT *
            FROM bookings AS a
            INNER JOIN rooms AS b
                ON a.id_room = b.id AND a.id_user = $id_user AND a.activo=0
            INNER JOIN room_type AS c
                ON b.type = c.id
            ORDER BY a.date_book DESC");
        }

        public function deleteBook($cod_book){
            return $this->save("UPDATE bookings SET activo = 1 WHERE cod_book = ?", [$cod_book]);
        }

    }
?>