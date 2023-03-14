<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/06.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' =>7,
        'roll' => 11
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 15,
        'class' =>7,
        'roll' => 13
    ),
    array(
        'fname' => 'Ahmad',
        'lname' => 'Hamble',
        'age' => 11,
        'class' =>7,
        'roll' => 1
    )
);
//$fp = fopen($filename,'w');
//foreach ($students as $student) {
//    $data = sprintf("%s,%s,%s,%s,%s \n",$student['fname'],$student['lname'],$student['age'],$student['class'], $student['roll']);
//    fwrite($fp,$data);
//}

/*$fp = fopen($filename,'w');
foreach ($students as $student) {
//    $data = sprintf("%s,%s,%s,%s,%s \n",$student['fname'],$student['lname'],$student['age'],$student['class'], $student['roll']);
//    fwrite($fp,$data);
    fputcsv($fp,$student);
}*/

/*$fp = fopen($filename,'r');
while ($data = fgets($fp)){
    $students = explode(',',$data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$students[0],$students[1],$students[2],$students[3],$students[4]);
}
fclose($fp );*/


/*$fp = fopen($filename,'r');
while ($students = fgetcsv($fp)){

    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$students[0],$students[1],$students[2],$students[3],$students[4]);
}
fclose($fp );*/

/*$student = array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age'   => 13,
    'class' =>7,
    'roll' => 33
);
$fp = fopen($filename,'a');
fputcsv($fp,$student);
fclose($fp);*/

$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename,'w');
foreach ($data as $line){
    fwrite($fp,$line);
}
fclose($fp);