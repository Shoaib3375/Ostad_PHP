<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/08.txt";
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
// $encodedData = json_encode( $students );
// file_put_contents($filename,$encodedData,LOCK_EX);

$data = file_get_contents( $filename );
//$allStudents = json_decode( $data );
$allStudents = json_decode( $data,true );
print_r( $allStudents );
//echo $allStudents[0]->fname;
echo  $allStudents[0]['fname'];