<?php 

class User {
    public $name;
    public $age;
    public static $minPasLength = 6;

    public static function validatePass($pass) {
        if(strlen($pass) >= self::$minPasLength) {
            return true;
        }else {
            return false;
        }
    }
}

$password = 'hello1';
if(User::validatePass($password)) {
    echo 'Password valid';
}else {
    echo 'Password invalid';
}

?>