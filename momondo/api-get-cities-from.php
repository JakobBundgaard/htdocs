<?php 

$cities = [
    ['city_name'=>'New York', 'city_image'=>'new_york.png', 'population'=>'8000000'],
    ['city_name'=>'Cancun', 'city_image'=>'cancun.png', 'population'=>'1000000'],
    ['city_name'=>'Lima', 'city_image'=>'lima.png', 'population'=>'4000000'],
    ['city_name'=>'Melbourne', 'city_image'=>'melbourne.png', 'population'=>'3000000'],
    ['city_name'=>'Perth', 'city_image'=>'lima.png', 'population'=>'1.500000'],
];

echo json_encode($cities);

