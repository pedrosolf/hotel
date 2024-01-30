<?php
    class PanelController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            if (!isset($_SESSION['log']) || $_SESSION['log'] !== true || $_SESSION['rol'] == 0) {
                header("Location: login");
                exit;
            }
            $data['book'] = $this->model->getTheBook();
            $this->views->getView('panel', $data);
        }

        public function delete(){
            if (isset($_GET['id'])){
                $id =  strClean($_GET['id']);
            }
            
            if ($cod_book!=="" && $_SESSION['rol'] == 1) {
                $this->model->deleteBook($id);
            }
            header("Location: ".MAIN_URL."panel");
            exit;
        }


        
    }

?>