<?php 

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        // __CLASS__ constant will give you the current class youre in. It is called a magic constant
        echo 'Class: ' . __CLASS__ . ' instantiated ';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello() {
        return $this->name . ' says hello';
    }

    // Called when no other references to a certain object
    // Used for clean up, closing connections etc.
    public function __destruct(){ 
        echo 'destructor ran';
    }

}

$user1 = new User('Jake', 48);
echo $user1->name . ' is ' . $user1->age . ' years old.';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Sara', 36);
echo $user2->name . ' is ' . $user2->age . ' years old.';
echo $user2->sayHello();

?>