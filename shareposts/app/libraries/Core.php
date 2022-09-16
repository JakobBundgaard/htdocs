<?php 
/*
 * App Core Class
 * Creates URL and loads core controller
 * URL FRMAT - /controller/method/params
 */

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        // print_r($this->getUrl());

        $url = $this->getUrl();

        // Look in controllers for first value
        if(isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]). '.php')) {
            // if exists, set as current controller
            $this->currentController = ucwords($url[0]);
            
            // Unset index 0
            unset($url[0]);
        }

        // Require the controller
        require_once '../app/controllers/'. $this->currentController . '.php';

        // Instatiate controller class
        $this->currentController = new $this->currentController;

        // Check for second part of url
        if(isset($url[1])) {
            // Check to se if method exists in controller
            if(method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];

                // Unset index 1
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) :  [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // Here we grab everything in the url after bundgaardmvc
    public function getUrl() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL); // Sanitizing the url
            $url = explode('/', $url); // creating an array from the url
            return $url;
        }
    }
}


?>