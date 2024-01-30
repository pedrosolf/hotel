<?php
    class Views{
        public function getView($view, $data = ''){
            $view = 'views/' . $view . '.php';
            require $view;
        }
    }