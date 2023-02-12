<?php
function rname( int $a, int $b, int $c ): int {
    // we can deaclare return type in last
    return $a + $b + $c;
}
echo rname( 2, 4, 5 );