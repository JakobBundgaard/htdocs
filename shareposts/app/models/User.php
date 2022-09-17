<?php 

class User {
    private $db;

    public function __construct() {
        // Loading database library
        $this->db = new Database;
    }

    // Register user
    public function register($data) {
        // Calling query() from Database library
        $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        // Binding the values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Executing 
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login
    public function login($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        // Unhashing the password
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email) {
        // Calling query() from Database library
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Binding the value to the email
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row for email. If rowcount is larger than 0, it means there is a row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}