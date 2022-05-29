<?php
$cats = [
    'Pukis', 
    'Murkis',
    'Pilkis',
    'Rainius' 
];

for($i = 0; $i < 20; $i++) {
    $cats[] = rand(12, 44);
}

sleep(5);

$out = json_encode($cats);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo $out;