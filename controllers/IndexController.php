<?php
    class IndexController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            $data['room_type'] = $this->model->getRoomType();
            $this->views->getView('index', $data);
        }
        
    }

?>