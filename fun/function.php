<?php
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}
function factorial( $n ) { // we can use int type in parameter
    if ( is_int( $n ) == false ) {
        return "invalid";
    }
    // if ( gettype( $n ) != "integer" ) {
    //     return "Invalid";
    // }
    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}