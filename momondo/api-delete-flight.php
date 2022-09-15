<?php 

// Validate flight id
if(!isset($_POST['flight_id'])) {
    http_response_code(400);
    echo 'flight_id missing';
    // echo json_encode(['info'=>'flight_id missing']);
    exit();
}

if(!ctype_digit($_POST['flight_id'])) {
    http_response_code(400);
    // echo 'flight_id must be a number';

    echo json_encode(['info'=>'flight_id not a number']);
    exit();
}

// TODO: delete flight from db
try {
    $db = new PDO('sqlite:'.__DIR__.'/momondo1.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('DELETE FROM flights WHERE id = :id');
    $q->bindValue(':id', $_POST['flight_id']);
    $q->execute();
// Success
echo json_encode(['info'=>'flight_id deleted', 'flight_id'=> "$_POST[flight_id]"]);
}catch(Exception $E) {
    http_response_code(500);
    echo json_encode(['info'=>'System under maintainance']);
    exit();
}


