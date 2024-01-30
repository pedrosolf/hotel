<?php
    class BookingModel extends Query{

        public function __construct(){
            parent::__construct();
        }

        public function getValidate($date_in, $date_out, $room){
            return $this->selectAll("SELECT * FROM bookings 
            WHERE date_in <= '$date_out'
            AND date_out >= '$date_in'
            AND id_room = $room
            AND activo = 0");
        }

        public function getBookings($date_in, $date_out, $room){ 

            return $this->selectAll("SELECT *
            FROM `bookings`
            INNER JOIN `rooms` ON `bookings`.id_room = `rooms`.id
            WHERE `rooms`.type = $room
            AND date_in <= '$date_out'
            AND date_out >= '$date_in'
            AND activo = 0");
        }



        public function getRooms($room){
            return $this->selectAll("SELECT * FROM rooms 
            WHERE id = $room");
        }

        public function getRoomType(){
            return $this->selectAll("SELECT * FROM  room_type");
        }

        public function getRoomTypeSelected($room){
            return $this->select("SELECT * FROM  room_type WHERE id = $room");
        }

        public function getFreeRoom($date_in, $date_out, $room){
            return $this->select("SELECT *
                FROM `rooms`
                WHERE `type` = $room
                AND `id` NOT IN (
                    SELECT `id_room`
                        FROM `bookings`
                        WHERE date_in <= '$date_out'
                        AND date_out >= '$date_in' AND activo=0
                    )LIMIT 1;
            ");
        }

        public function confirm($cod_book, $id_room, $id_user, $date_in, $date_out){
            $sql = "INSERT INTO bookings (cod_book, id_room, id_user, date_in, date_out) VALUES (?,?,?,?,?)";
            return $this->insert($sql, [$cod_book, $id_room, $id_user, $date_in, $date_out]);
        }

        public function getAvalNow($id_room, $date_in, $date_out){
            return $this->selectAll("SELECT * FROM  bookings WHERE id_room=$id_room AND date_in <= '$date_out' AND date_out >= '$date_in' AND activo=0"); 
        }
    }
?>