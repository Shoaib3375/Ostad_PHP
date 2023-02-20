<?php
$vegetables = preg_split('/(, |,)/','brinjal, brocoli, carrot, capsicam');
// var_dump($vegetables);
print_r($vegetables);
$vegetableString = join(', ',$vegetables);
// echo $vegetableString;
// echo count($vegetables);