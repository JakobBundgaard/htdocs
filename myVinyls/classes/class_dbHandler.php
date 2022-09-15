<?php 

class DbHandler {

   protected function connect() {
        try {

            $username = 'jakob';
            $password = 'password';
            $dbHandler = new PDO('mysql:host=localhost;dbname=myalbums;port=3307', $username, $password);
            return $dbHandler;

        } catch(PDOException $e) {
            print 'Error!: ' . $e->getMessage() . '<br/>'  ;
            exit();
        }
        
   }

}