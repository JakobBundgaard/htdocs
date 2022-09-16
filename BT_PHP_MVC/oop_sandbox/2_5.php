<?php 

class User {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Magic __get method we can use to Get properties so we dont have to make a getter for each
    // First we check if the property exists
    // Then we return it
    public function __get($property) {
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // Magic __set method we can use to set property, if there  are many
    // We pass in the property to be set and the value
    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

}

$user1 = new User('John', 40);

// echo $user1->getName();
// $user1->setName('Jake');
// echo $user1->getName();

echo  $user1->__get('name');
echo  $user1->__get('age');

$user1->__set('age', 50);

echo  $user1->__get('age');
?>