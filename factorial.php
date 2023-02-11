<?php
$n =3;
for($i =$n, $factorial =1; $i>1; $i--){
    $factorial *= $i;
}
printf("The factorial of %d is %d", $n,$factorial);