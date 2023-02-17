<?php
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function evenOrOdd( $num ) {
    if ( $num % 2 == 0 ) {
        return "Even";
    } else {
        return "Odd";
    }
}
$n = 7;
$r = evenOrOdd( $n );
echo $n . " is " . $r;

// 2. 1+2+3...…….100
// Write a loop to calculate the summation of the series
$value = 0;
for ( $i = 1; $i <= 100; $i++ ) {
    $value += $i;
}
echo "value of 1+2+...+100 is " . $value;
// php -S localhost:3000