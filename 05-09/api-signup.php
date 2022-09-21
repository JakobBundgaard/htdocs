<?php  

require_once __DIR__.'/_x.php';

// Validate the firstname
if( ! isset($_POST['user_name']) ) {
    http_response_code(400);
    echo json_encode(['info'=>'user_name missing']);
    exit();
}

if( strlen($_POST['user_name']) < NAME_MIN_LEN) {
    http_response_code(400);
    echo json_encode(['info'=>'user_name must be min '.NAME_MIN_LEN.' characters']);
    exit();
}

if( strlen($_POST['user_name']) > NAME_MAX_LEN) {
    http_response_code(400);
    echo json_encode(['info'=>'user_name must be max '.NAME_MAX_LEN.' characters']);
    exit();
}

// Validate the lastname
if( ! isset($_POST['last_name']) ) {
    http_response_code(400);
    echo json_encode(['info'=>'last_name missing']);
    exit();
}

if( strlen($_POST['last_name']) < LAST_NAME_MIN_LEN) {
    http_response_code(400);
    echo json_encode(['info'=>'last_name must be min '.LAST_NAME_MIN_LEN.' characters']);
    exit();
}

if( strlen($_POST['last_name']) > LAST_NAME_MAX_LEN) {
    http_response_code(400);
    echo json_encode(['info'=>'last_name must be max '.LAST_NAME_MAX_LEN.' characters']);
    exit();
}

// Success
echo json_encode(["message"=>"Welcome to the system, {$_POST['user_name']} {$_POST['last_name']}"]);