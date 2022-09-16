<?php 

$host = 'localhost';
$user = 'jakob';
$password = 'password';
$dbname = 'pdotest';

// Set DSN
// 'mysql:host=localhost;dbname=myalbums;port=3307',
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';port=3307';

// Create PDO instance
$pdo = new PDO($dsn, $user, $password);
// here we set the pdo to return an object by default, so we dont have to specify it in the fetchAll() call
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// // Getting data from db
//$status = 'admin';

// // Here we use named parameters -> :status, instead of positional parameters -> ?
// $sql = 'SELECT * FROM users WHERE status = :status';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['status' => $status]);
// $users = $stmt->fetchAll();

// foreach($users as $user) {
//     echo $user->name.'<br>';
// }

// Inserting data into db
$name = 'Jeppe Bundgaard';
$email = 'jeb@mail.dk';
$status = 'guest';


$sql = 'INSERT INTO users(name, email, status) VALUES(:name, :email, :status)';

// Preparing the statement
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email, 'status' => $status]);

echo 'Added user';



