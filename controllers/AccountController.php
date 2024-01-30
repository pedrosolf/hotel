<?php
    class AccountController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            if (!isset($_SESSION['log']) || $_SESSION['log'] !== true) {
                header("Location: login");
                exit;
            }
            $data['book'] = $this->model->getMyBook($_SESSION['id_user']);
            $this->views->getView('account', $data);
        }

        public function delete(){
            $cod_book =  strClean($_POST['cod_book']);
            if ($cod_book!=="") {
                $this->model->deleteBook($cod_book);
            }
            header("Location: ".MAIN_URL."account");
            exit;
        }
        
    }

?>