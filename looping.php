<?php
for($i = 1; $i<10; $i++){
echo PHP_EOL;
    for ($j=0; $j < $i; $j++) { 
        echo("*");
    }
}
echo PHP_EOL;
 $a =0;
while ($a <= 10) {
    $a++;
    echo("$a");
}
echo PHP_EOL;
$b= 0;
do {
    $b++;
    echo ("$b");
} while ($b <= 10);
echo PHP_EOL;
$c = 0;

a: $c++;
echo $c.PHP_EOL;
if($c<10) goto a;
?>