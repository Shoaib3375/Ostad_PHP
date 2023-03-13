<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/write.txt";
$fp = fopen($filename,"r+");

//fwrite($fp,"Shoaib\n");
//fwrite($fp,"Islam\n");
//fwrite($fp,"Mesta\n");

$line = fgets($fp);
echo $line;
fseek($fp,0);
fwrite($fp,"Venus");
fclose($fp);
