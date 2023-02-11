<?php
// factorial of 
$n = 4;
$result =1;
for($i=$n; $i>1; $i--){
    $result *= $i;
}
echo "Factorial of {$n} is {$result}";
echo PHP_EOL;

$j =1;
for ($n=1; $n <=10 ; $n++) { 
    $result =1;
    for($i=$n; $i>1; $i--){
        $result *= $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result}".PHP_EOL;
}
echo "Total number of operation {$j}".PHP_EOL;

$result=1;
$j=1;
for ($k=1; $k <=10 ; $k++) { 
    $result *= $k;
    $j++;
    echo "Factorial of {$k} is {$result}".PHP_EOL;
}
echo "The total number of operation = {$j}";