<?php 

// Defining a class
class User {
    // Properties -> attributes
    public $name;

    // Methods -> functions
    public function sayHello() {
        return $this->name. " says hello";
    }
}

// Instatiating user object from class
$user1 = new User();
$user1->name = 'Jake';

echo $user1->sayHello();

// Create new user
$user2 = new User();
$user2->name = 'Mike';
echo $user2->sayHello();

?>