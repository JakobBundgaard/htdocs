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

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'artist' => trim($_POST['artist']),
                'title' => trim($_POST['title']),
                'released' => trim($_POST['released']),
                'genre' => trim($_POST['genre']),
                'tracks' => trim($_POST['tracks']),
                'image' => trim($_POST['image']),
                'user_id' => $_SESSION['user_id'],
                'artist_err' => '',
                'title_err' => '',
                'released_err' => '',
                'genre_err' => '',
                'tracks_err' => '',
            ];

            // Validation
            if(empty($data['artist'])) {
                $data['artist_err'] = 'Please enter artist name';
            }

            if(empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if(empty($data['released'])) {
                $data['released_err'] = 'Please enter a release year';
            }

            if(empty($data['genre'])) {
                $data['genre_err'] = 'Please enter a genre';
            }

            // If no errors
            if(empty($data['artist_err']) && empty($data['title_err']) && empty($data['released_err']) && empty($data['genre_err'])) {
                // if validated
                if($this->albumModel->addAlbum($data)) {
                    flash('album_added', 'Album added');
                    redirect('albums');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('albums/add', $data);
            }


        } else {
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
}