<?php 

$dbh = new Database;

$artist = $_POST['artist'];
$data = $dbh->searchData($artist);
echo $data;

echo json_encode($data);

