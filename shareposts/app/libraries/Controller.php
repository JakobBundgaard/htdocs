<?php 
// Basecontroller
// Loads the models and views

class Controller {
    // Model load controller
    public function model($model) {
        // require model file
        require_once '../app/models/' . $model . '.php';

        // Instatiate model
        return new $model();
    }

    // View load controller
    public function view($view, $data = []) {
        // check for the view file
        if(file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}




