<?php 

$data = file_get_contents('https://kea.dk');
$data = str_replace('KEA', 'Kun i dag, en mac til 1000kr', $data);
echo $data;