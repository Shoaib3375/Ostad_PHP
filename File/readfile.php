<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/read.txt";
$fp = fopen($filename,'r');
//echo fgets($fp); // read first string in this file
while ($line = fgets($fp)){
    echo $line;
}
//rewind($fp);
fseek($fp,-1,SEEK_END);
while ($line = fgets($fp,5)){
    echo $line."-";
}
fclose($fp);
$data = file($filename);
echo $data[3];
//print_r($data);

echo "\n";
$data = file_get_contents($filename);
echo $data;