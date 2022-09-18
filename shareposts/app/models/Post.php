<?php 
 
 class Post {
    private $db;

    public function __construct() {
        // Instantiating db so we cab access it
        $this->db = new Database;
    }

    // Getting posts
    public function getPosts() {
        // Query. We join the users table to get the user_id. using aliases because both tables have an id.
        $this->db->query('SELECT *,
                            posts.id as postId,
                            users.id as userId,
                            posts.created_at as postCreated,
                            users.created_at as userCreated
                            FROM posts
                            INNER JOIN users
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC
                            ');

        // Result from query using resultSet() from db
        $results =$this->db->resultSet();

        return $results;
    }
    
    public function addPost($data) {
        // Calling query() from Database library
        $this->db->query('INSERT INTO posts (title, user_id, body) VALUES (:title, :user_id, :body)');
        // Binding the values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);

        // Executing 
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePost($data) {
        // Calling query() from Database library
        $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
        // Binding the values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        // Executing 
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPostById($id) {
        // Getting post by id
        $this->db->query('SELECT * FROM posts WHERE id = :id');

        // Binding value
        $this->db->bind(':id', $id);

        
        $row = $this->db->single();

        return $row;

    }

    public function deletePost($id) {
         // Calling query() from Database library
         $this->db->query('DELETE FROM posts WHERE id = :id');
         // Binding the values
         $this->db->bind(':id', $id);
         
         // Executing 
         if($this->db->execute()) {
             return true;
         } else {
             return false;
         }
    }
 }