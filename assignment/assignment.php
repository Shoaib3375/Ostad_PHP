<?php
// HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. *If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
$tuition < 7000 ? 'Invalid' : ($tuition < 10000 ? 0.15 * $tuition : ($tuition < 20000 ? 0.2 * $tuition : 0.25 * $tuition));
// if($tuition < 7000){
//     echo 'invalid';
// }elseif(7000 >=$tuition && 10000 <= $tuition){
//     echo 0.15 * $tuition
// }

// $tuition_fee < 7000 ? "invalid": ($tuition_fee < 10000 ? 0.15 * $)

// $tutionFee=20000;
// $comission=($tutionFee>20000)? "0.25*$tutionFee is the comission fee":($tutionFee >10000 && $tutionFee <20000)?  "0.20*$tutionFee is the comission fee":($tutionFee <10000 && $tutionFee >7000)? "0.15*$tutionFee is the comission fee":($tutionFee<7000)?"the data will be invalid";

// echo $comission;
?>