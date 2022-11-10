<?php
try{
  // Exercise til 09:40 since so many already did it :)
  // Update the user name to X where the id is 2
  // NOTE:::: NEVER FORGET you must use placeholders :
  require_once __DIR__.'/db.php';
  $query = $_db->prepare('UPDATE users 
                          SET name=:name 
                          WHERE id=:id');
  $query->bindValue(':name', 'X');
  $query->bindValue(':id', '2');

  $query->execute();
  if( $query->rowCount() == 0 ){
    echo 'User cannot be updated';
    exit();
  }
  // header('Content-Type: application/json');
  echo 'User updated successfully';
  exit();   
}catch(PDOException $ex){
 echo $ex;
}
