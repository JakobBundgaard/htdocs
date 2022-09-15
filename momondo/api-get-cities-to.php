<?php 

$cities_to = [
    ['city_name'=>'Cancun', 'city_image'=>'cancun.png', 'population'=>'1000000'],
    ['city_name'=>'Lima', 'city_image'=>'lima.png', 'population'=>'4000000'],
    ['city_name'=>'Lisboa', 'city_image'=>'new_york.png', 'population'=>'3500000'],
    ['city_name'=>'Melbourne', 'city_image'=>'cancun.png', 'population'=>'4000000'],
    ['city_name'=>'Perth', 'city_image'=>'lima.png', 'population'=>'1.500000']
];

echo json_encode($cities_to);