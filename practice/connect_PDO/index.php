<?php 

// $host = 'localhost';
// $dbName = 'test';
$user = 'jakob';
$pass = 'password';

// $dsn = 'mysql:host=$host;dbname=$dbName;port=3307';

try {
    $conn = new PDO('mysql:host=localhost;dbname=test;port=3307', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection success';

    $sql = "SELECT * FROM users";
    $users = $conn->query($sql);
    foreach($users as $user) {
        echo "<li>" . $user["name"] . "</li>";
    }

}catch(PDOException $e) {
    echo $e->getMessage() . ': Connection failed';
}



// class DbHandler {

//     protected function connect() {
//          try {
 
//              $username = 'jakob';
//              $password = 'password';
//              $dbHandler = new PDO('mysql:host=localhost;dbname=test;port=3307', $username, $password);
//              echo 'Connection success';
//              return $dbHandler;
 
//          } catch(PDOException $e) {
//              print 'Error!: ' . $e->getMessage() . '<br/>'  ;
//              exit();
//          }
         
//     }
 
//  }

 ?>
