<?php
function sum( $x, $y, int...$num ): int {

    $result = 0;
    for ( $i = 0; $i < count( $num ); $i++ ) {
        $result += $num[$i];
    }
    return $result;

}
echo sum( 3, 2, 4, 3 );