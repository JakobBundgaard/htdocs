<?php 

class DB {
    private $conn;
    private $host = 'localhost';
    private $dbname = 'test';
    private $user = 'jakob';
    private $password = 'password';

    public function __construct() {
        // $dsn = 'mysql:host=localhost;dbname=test;port=3307';
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";port=3307";

        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=test;port=3307', $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Failed: ' . $e->getMessage();
        }
    }
    
    public function viewData() {
        $query = "SELECT name FROM names";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchData($name) {
        $query = "SELECT name FROM names WHERE name LIKE :name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["name" => "%" . $name . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}



// $user = 'jakob';
// $pass = 'password';

// try {
//     $conn = new PDO('mysql:host=localhost;dbname=test;port=3307', $user, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo 'Connection success';

// }catch(PDOException $e) {
//     echo $e->getMessage() . ': Connection failed';
// }