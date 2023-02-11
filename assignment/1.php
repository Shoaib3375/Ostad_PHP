<?php
$num = -11;
if ( $num < 0 ) {
    $result = 'negative';
    if ( $num < -10 ) {
        $result = 'value is below -10';
    }
} else {
    $result = 'its zero';
}
echo $result . PHP_EOL;
$result = $num < 0 ? "Negative" : (  ( $num < -10 ) ? "below -10" : "its zero" );
echo $result;
// entry control loop vs exit control loop