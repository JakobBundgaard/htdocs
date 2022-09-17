<?php 

class Users extends Controller{
    // COnstructor loads model
    public function __construct() {

    }

    // public function index() {


    //     // $data = [
    //     //     'title' => 'SharePosts',
    //     //     'description' => 'Simple social network built on the bundgaardMVC PHP framework'
    //     // ];

    //     // $this->register();
    //     $this->view('users/register');
    // }

    public function register() {
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // If true, process form
        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'passsword' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            // Load view
            $this->view('users/register.php', $data);
        }
    }
}