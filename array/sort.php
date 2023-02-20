<?php
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates', 'f' => 'mango' );
$numbers = array( 1, 11, 2, 56, 3, 4, 22, 77, 5 );
// asort( $numbers );
// sort( $number );
// rsort($number);
// ksort( $fruits );
krsort( $fruits );

print_r( $fruits );
// for ( $i = 0; $i < count( $numbers ); $i++ ) {
//     echo $numbers[$i] . "\n";
// }
foreach ( $fruits as $fruit ) {
    echo $fruit . "\n";
}