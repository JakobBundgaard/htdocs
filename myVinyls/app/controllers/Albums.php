<?php 

class Albums extends Controller {
    public function __construct() {
        if(!isLoggedIn()) {
            redirect('users/login');
        }

        // Loading model
        $this->albumModel = $this->model('Album');
    }

    public function index() {
        // Get Albums
        $albums = $this->albumModel->getAlbums();

        $data = [
            'albums' => $albums
        ];

        $this->view('albums/index', $data);
    }

    public function addAlbum() {
        $data = [
            'artist' => '',
            'title' => '',
            'released' => '',
            'genre' => '',
            'tracks' => '',
            'image' => ''
        ];

        $this->view('albums/add', $data);
    }
}