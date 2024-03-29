<?php
// PDO
try{
  $dbUserName = 'jakob';
  $dbPassword = 'password'; // root | admin
  $dbConnection = $dsn = 'mysql:host=localhost'. ';dbname=momondo1' . ';port=3307';; 
  // utf8 every character in the world
  // mb4 every character and also emojies
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // try-catch
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // ['nickname']
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // ->nickname
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM // [[2],[],[]]
  ];
  $_db = new PDO(  $dbConnection, 
                  $dbUserName, 
                  $dbPassword , 
                  $options );
  
}catch(PDOException $ex){
  echo $ex;  
  exit();
}














