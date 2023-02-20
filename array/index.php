<?php

$foods = [
    'vegetable' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

// echo $foods['vegetable'];
// $count = count($foods);
// for($i=0;$i<$count;$i++){
// echo $foods[$i]; // get an error
// }

foreach ($foods as $key => $value) {
    echo $key . ' ' . $value . PHP_EOL;
}

$keys = array_keys($foods);
for ($i=0; $i< count($keys) ; $i++) {
    $key = $keys[$i];
    echo $foods[$key]."\n";
}
$values = array_values($foods);
for ($i=0; $i< count($values) ; $i++) { 
    $value = $values[$i];
    echo $value,"\n";
}