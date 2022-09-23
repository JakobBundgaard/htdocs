<?php 



$user = 'jakob';
$pass = 'password';



try {
    $conn = new PDO('mysql:host=localhost;dbname=test;port=3307', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Connection success';

}catch(PDOException $e) {
    echo $e->getMessage() . ': Connection failed';
}