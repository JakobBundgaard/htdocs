<?php 

class Pages extends Controller{
    public function __construct() {
        
    }

    public function index() {
        // redirecting Home link to posts if logged in
        if(isLoggenIn()) {
            redirect('posts');
        }

        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on the bundgaardMVC PHP framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title'=> 'About Us',
            'description' => 'App to share posts with other users'

            
        ];
        $this->view('pages/about', $data);
    }

}


