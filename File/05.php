<?php
$filename = "C:/xampp/htdocs/shoaib/Ostad_PHP/File/05.txt";
file_put_contents( $filename, "Mars\n", FILE_APPEND | LOCK_EX );
file_put_contents( $filename, "Jupitar\n", FILE_APPEND | LOCK_EX );