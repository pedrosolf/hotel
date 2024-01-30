<?php
    class PanelModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function getTheBook(){ 

            return $this->selectAll("SELECT a.id AS id, a.cod_book AS cod, b.name AS room, a.date_in AS date_in, a.date_out AS date_out, CONCAT (c.name, ' ', c.lastname) AS name, c.dni AS dni
            FROM bookings AS a
            INNER JOIN rooms AS b
                ON a.id_room = b.id AND a.activo=0
            INNER JOIN users AS c
                ON a.id_user = c.id
            ORDER BY a.date_in DESC");
        }

        public function deleteBook($id){
            return $this->save("UPDATE bookings SET activo = 1 WHERE id = ?", [$id]);
        }

    }
?>