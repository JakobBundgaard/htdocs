<?php 

    class User {
        protected $name;
        protected $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }

class Customer extends User {
    private $balance;

    public function __construct($name, $age, $balance) {
        // equivalent to super() in java. 
        parent::__construct($name, $age);
        $this->balance = $balance;
    }
    
    public function pay($amount) {
        return $this->name . ' paid $' . $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

$customer1 = new Customer('Marty', 56, 500);

echo $customer1->pay(50);

echo $customer1->getBalance();

?>