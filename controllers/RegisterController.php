<?php
    class RegisterController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            if (isset($_SESSION['log'])) {
                header("Location: ". MAIN_URL);
                exit;
            }
            $this->views->getView('register');
        }

        public function create(){
            $name =  strClean($_POST['name']);
            $lastname =  strClean($_POST['lastname']);
            $dni =  strClean($_POST['dni']);
            $email =  strClean($_POST['email']);
            $phone =  strClean($_POST['phone']);
            $address =  strClean($_POST['address']);
            $password =  password_hash(strClean($_POST['password']), PASSWORD_DEFAULT);

            if($this->model->create($dni,$name,$lastname,$email,$phone,$address,$password)){
                echo "1";
            }
        }
        
    }

?>