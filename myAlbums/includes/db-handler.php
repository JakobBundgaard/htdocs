<?php 

// $serverName = "localhost";
// $dbUsername = "root";
// $dbPassword = '';
// $dbName = "myvinyls";


// try {
//     // Connect to Database
//     $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// } catch(mysqli_sql_exception $e) {
//     exit("Connection failed: " . $e->getMessage());
// }





try{

  $sDatabaseUserName = 'root';

  $sDatabasePassword = '';

  $sDatabaseConnection = "mysql:host=localhost; dbname=myvinyls; charset=utf8mb4";



  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

  $aDatabaseOptions = array(

    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

  );

  $db = new PDO( $sDatabaseConnection, $sDatabaseUserName, $sDatabasePassword, $aDatabaseOptions );

}catch( PDOException $e){

  echo $e;

  echo '{"status":0,"message":"cannot connect to database"}';

  exit();

}




// $con = new PDO("mysql:host=localhost;port=3307;dbname=jakeflix", "root", "");

// $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// if(!$conn) {
//     exit("Connection failed: " . mysqli_connect_error());
// }
