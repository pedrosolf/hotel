<?php
    class Controller{
        protected $model, $views;

        public function __construct(){
            $this->views = new Views();
            $this->loadModel();
        }

        public function loadModel(){
            
            //$isAdminUrl = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false; 
            $className = get_class($this);
            $pattern = "/Controller$/";
            $className = preg_replace($pattern, "", $className);
            
            $nameModel = $className . 'Model';
            //$route = ($isAdminUrl) ? 'models/admin/' . $nameModel . '.php' : 'models/main/'. $nameModel . '.php';
            $route = 'models/'. $nameModel . '.php';
            
            if (file_exists($route)){
                require_once $route;
                $this->model = new $nameModel();
            }
        }
    }
?>