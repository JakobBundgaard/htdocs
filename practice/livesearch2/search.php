<?php 

require_once('DB.php');

$name = $_POST['name'];
$conn = new DB();
$data = $conn->searchData($name);
echo json_encode($data);