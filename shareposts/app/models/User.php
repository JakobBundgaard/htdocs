<?php 

class User {
    private $db;

    public function __construct() {
        // Loading database library
        $this->db = new Database;
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