<?php
    class LoginController extends Controller{
        public function __construct(){
            parent::__construct();
            session_start();
        }

        public function index(){
            if (isset($_SESSION['log'])) {
                header("Location: ". MAIN_URL);
                exit;
            }
            $this->views->getView('login');
        }

        public function validate() {
            $email = strClean($_POST['email']);
            $password = strClean($_POST['password']);
            
            $user = $this->model->getUser($email);
            
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $res = ['tipo' => 'success', 'msg' => "Bienvenido"];
                    $_SESSION['log']=true;
                    $_SESSION['id_user']=$user['id'];
                    $_SESSION['rol']=$user['rol'];
                } else {
                    $res = ['tipo' => 'error', 'msg' => "Contraseña incorrecta"];
                }
            } else {
                $res = ['tipo' => 'error', 'msg' => "E-mail no registrado"];
            }
            
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
        
        public function out(){
            session_unset();
            session_destroy();
            header("Location: ". MAIN_URL);
            exit;
        }
        
    }

?>