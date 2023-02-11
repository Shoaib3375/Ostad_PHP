<?php
// alternative way to write if else
$n = 2;
if($n%2==0){
    echo "even Number";
}else{
    echo "Odd Number";
}

if($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
    echo 'text';
else:
    echo "odd Number";
endif;