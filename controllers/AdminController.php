<?php
    class AdminController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            echo 'index admin controller';
        }
        
    }

?>