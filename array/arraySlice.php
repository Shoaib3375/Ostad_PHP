<?php
$frueits = array( 'apple', 'banana', 'Orange', 'Plum', 'Dates', 'Mango' );
$random = array( 'a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 27, 'f' => 31, 12 => 78, 'g' => 42 );
// $someFruits = array_slice( $frueits, 2 );
// $someFruits = array_slice( $frueits, 2, 2 );
// $someFruits = array_slice( $frueits, -5, -1 );
// $someFruits = array_slice( $frueits, 3, 3, true );
$randomData = array_slice( $random, 1, -1, true );

print_r( $randomData );