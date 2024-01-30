<?php
    class BookingController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            $this->views->getView('booking');
        }

        public function verify(){
            if (isset($_GET['date-in']) && isset($_GET['date-out']) && isset($_GET['room'])){
                $date_in =  strClean($_GET['date-in']);
                $date_out = strClean($_GET['date-out']);
                $room =  strClean($_GET['room']);

                if ($room==''){
                    $room=1;
                }

                if ($date_in >= $date_out){
                    header('Location: ' . MAIN_URL . '?error=1');
                }else{
                    $data['booking'] = $this->model->getBookings($date_in, $date_out, $room);
                    $data['available'] = $this->model->getFreeRoom($date_in, $date_out, $room);
                    $data['room_type'] = $this->model->getRoomType();
                    $data['room_type_selected'] = $this->model->getRoomTypeSelected($room);
                    $this->views->getView('booking', $data);
                }
            }
        }

        public function list($params){
            $array = explode(',', $params);
            $f_in = (!empty($array[0])) ? $array[0] : null;
            $f_out = (!empty($array[1])) ? $array[1] : null;
            $room = (!empty($array[2])) ? $array[2] : null;
            $result = [];
            if ($f_in !== null && $f_out !== null && $room !== null){
                //$reservas = $this->model->getRooms($room);
                $booking = $this->model->getBookings($f_in, $f_out, $room);
                
                for ($i=0; $i< count($booking); $i++){
                    $datos['id'] = $booking[$i]['id'];
                    $datos['title'] = 'Ocupado ';
                    $datos['start'] = $booking[$i]['date_in'];
                    $datos['end'] = $booking[$i]['date_out'];
                    $datos['color'] = '#DC3545';
                    array_push($result, $datos);
                }
                $datos1['id'] = $room;
                $datos1['title'] = 'Comprobando';
                $datos1['start'] = $f_in;
                $datos1['end'] = $f_out;
                $datos1['color'] = '#FFC107';
                array_push($result, $datos1);
                echo json_encode($result, JSON_UNESCAPED_UNICODE);
            }

            die();
        }

        public function confirm(){
            $cod_book = generateUid();
            $id_room =  strClean($_POST['id_room']);
            $id_user =  strClean($_POST['id_user']);
            $date_in =  strClean($_POST['date_in']);
            $date_out = strClean($_POST['date_out']);

            $disponible = $this->model->getAvalNow($id_room, $date_in, $date_out);

            if (!(count($disponible) > 0)){
                $this->model->confirm($cod_book, $id_room, $id_user, $date_in, $date_out);
            }
        }
        
    }

?>