<?php
$person = array( 'fname' => 'Hello', 'lname' => 'World' );
$newperson = $person;
$newperson['lname'] = 'Pluto';
print_r( $person );
print_r( $newperson );
//copy by value or deep copy
// if we use & in ($newperson = &$person ) like this it's copy by reference or Shallow copy

function printData( &$person ) { // hear we use & in parameter . it's like POinter in C.
    $person['fname'] .= " Changed";
    print_r( $person );
}
printData( $person );
print_r( $person );