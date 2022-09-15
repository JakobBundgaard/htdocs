<?php 

require_once __DIR__.'/_x.php';
require_once __DIR__.'/classes/class_signup-contr.php';


_validate_user_name();
_validate_email();

$user = [
    
    'uid' => $_POST['uid'],
    'pwd' => $_POST['pwd'],
    'pwdrepeat' => $_POST['pwdrepeat'],
    'email' => $_POST['email']
];

// Success
// echo json_encode($user);

_respond($user);
$signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    

//     // Error handling and user signup
     $signup->signupUser($user);