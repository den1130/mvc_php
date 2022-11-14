<?php
    /*
     * Base Controller
     * Loads the models and views
     */
    class Controller {
        // Load model
        public function model($model){
            // Require model file
            require_once '../app/models/' . $model . '.php';
            // Instantiate model
            return new $model();
        }

        // Load view
        public function view($view, $data = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
                return new $view();
            } else {
                die('No such view!');
            }
        }
    }
