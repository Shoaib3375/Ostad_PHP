<?php
echo 'h';
//  Write a function that takes an array of integers and a target sum as input,
// and returns a boolean indicating whether there exists a pair of integers in the
// array that add up to the target sum. You can assume the array has at least two
// elements and all elements are unique. Use a loop in your
// input: [5, 7, 1, 2, 8, 4, 3], 8 output: true (because 5 + 3 = 8) in PHP
function pair_exists( $array, $target_sum ) {
    $seen = array();
    foreach ( $array as $num ) {
        if ( in_array( $target_sum - $num, $seen ) ) {
            return true;
        }
        array_push( $seen, $num );
    }
    return false;
}

?>