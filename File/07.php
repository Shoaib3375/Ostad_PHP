<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/07.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 15,
        'class' => 7,
        'roll'  => 13,
    ),
    array(
        'fname' => 'Ahmad',
        'lname' => 'Hamble',
        'age'   => 11,
        'class' => 7,
        'roll'  => 1,
    ),
);
// $data = serialize( $students );
// file_put_contents( $filename, $data, LOCK_EX );

$dataFromFile = file_get_contents( $filename );
$allStudents = unserialize( $dataFromFile );
print_r( $allStudents );

unset( $allStudents[1] );
$data = serialize( $allStudents );
file_put_contents( $filename, $data, LOCK_EX );