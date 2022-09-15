<?php 

require_once __DIR__.'/_x.php';

_validate_user_name();
_validate_user_last_name();
_validate_email();

$user = [
    'user_id' => uniqid(),
    'user_name' => $_POST['user_name'],
    'user_last_name' => $_POST['user_last_name'],
    'user-email' => $_POST['email']
];

// Success
// echo json_encode($user);

_respond($user);