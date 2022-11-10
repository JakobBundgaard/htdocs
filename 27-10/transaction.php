<?php

// For every statement 1 rollback when you check
// Always a rollback in the last catch
// Tehre is only 1 commit when everything went OK

require_once(__DIR__.'/db.php');
try{
  $_db->beginTransaction();
  $query = $_db->prepare('UPDATE users 
                          SET name=:name 
                          WHERE id=:id');
  $query->bindValue(':name', 'XXX');
  $query->bindValue(':id', '3');
  $query->execute();
  
  // if rowCount then it was updated
  if( $query->rowCount() == 0 ){
    $_db->rollback();
    echo 'Could not update the user';
    exit();
  }

  sleep(20);


  $query = $_db->prepare('UPDATE users
                          SET name=:name 
                          WHERE id=:id');
  $query->bindValue(':name', 'DDDDDDDD');
  $query->bindValue(':id', '4');
  $query->execute();
  if( $query->rowCount() == 0 ){
    $_db->rollback();
    echo 'this went wrong';
    exit();
  }
  // EVERYTHING PERFECT
  $_db->commit();
  echo 'YES';
}catch(Exception $ex){
  $_db->rollback();
  echo $ex;
}




