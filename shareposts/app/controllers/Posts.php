<?php 

class Posts extends Controller {
    // By putting the check in the constructor we limit all post functionality to users not logged in
    public function __construct() {
        // Using the isLoggedIn() from session helper
        if(!isLoggenIn()) {
            // If user not logged in, we redirect to login
            redirect('users/login');
        }

        // Loading models. Has to be done in the constructor so we can use it anywhere
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }


    // Load view
    public function index() {
        // Get posts
        $posts = $this->postModel->getPosts();

        $data = [
            'posts' => $posts
        ];

        // Load view
        $this->view('posts/index', $data);
    }

    // Add new post
    public function add() {
        // check to see if a post request is used
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate data
            if(empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if(empty($data['body'])) {
                $data['body_err'] = 'Please enter a post';
            }

            // Making sure errors are empty
            if(empty($data['title_err']) && empty($data['body_err'])) {
                // If validated. Using addPost() from model
                if($this->postModel->addPost($data)) {
                    flash('post_message', 'Post Added');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }

        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
    
            // Load view
            $this->view('posts/add', $data);
        }      
    }

    // Edit post
    public function edit($id) {
        // check to see if a post request is used
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate data
            if(empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if(empty($data['body'])) {
                $data['body_err'] = 'Please enter a post';
            }

            // Making sure errors are empty
            if(empty($data['title_err']) && empty($data['body_err'])) {
                // If validated. Using addPost() from model
                if($this->postModel->updatePost($data)) {
                    flash('post_message', 'Post Updated');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load view with errors
                $this->view('posts/edit', $data);
            }

        } else {
            // Get existing post from model
            $post = $this->postModel->getPostById($id);

            // Check for owner
            if($post->user_id != $_SESSION['user_id']) {
                redirect('posts');
            }

            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body
            ];
    
            // Load view
            $this->view('posts/edit', $data);
        }      
    }

    // Show post details
    public function show($id) {
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserById($post->user_id);


        $data = [
            'post' => $post,
            'user' => $user
        ];

        // Load view
        $this->view('posts/show', $data);
    }

    public function delete($id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get existing post from model
            $post = $this->postModel->getPostById($id);

            // Check for owner
            if($post->user_id != $_SESSION['user_id']) {
                redirect('posts');
            }
            
            if($this->postModel->deletePost($id)) {
                flash('post_message', 'Post Deleted');
                redirect('posts');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('posts');
        }
    }
}