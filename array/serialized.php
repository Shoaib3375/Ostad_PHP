<?php
$student = array(
    'fname'   => 'Jamal',
    'lname'   => 'Ahmed',
    'age'     => '15',
    'class'   => 8,
    'section' => 'B',
);
print_r( $student );
echo $student['fname'] . " " . $student['lname'] . "\n";
print_r( "%s %s", $student['fname'] . $student['lname'] );

$serialized = serialize( $student );
echo $serialized;
echo "\n";

$newstudent = unserialize( $serialized );
print_r( $newstudent );

$jsondata = json_encode( $student );
echo $jsondata;
echo "\n";
$student2 = json_decode( $jsondata, true );
print_r( $student2 );
