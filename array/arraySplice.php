<?php
$frueits = array( 'apple', 'banana', 'Orange', 'Plum', 'Dates', 'Mango' );
$random = array( 'a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 27, 'f' => 31, 12 => 78, 'g' => 42 );
$newFruits = array( "jackfruit", "tamarind", "pineapple" );
$someFruits = array_splice( $frueits, -5, 2, $newFruits );
print_r( $someFruits );
print_r( $frueits );