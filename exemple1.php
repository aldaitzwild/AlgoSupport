<?php

/*
    - Créer un tableau de 10 chiffres
    - trouver la valeur maximale
    - trouver la valeur minimale
    - calculer la moyenne
*/


$numbers = [78, 9, -15, 43, 192, -8, 567, -2, 67, 31];

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
$sum = 0;

//sum = 0
$sum = $sum + $numbers[0];

//sum = 78
$sum = $sum + $numbers[1];

//sum = 87
$sum = $sum + $numbers[2];
$sum = $sum + $numbers[3];
$sum = $sum + $numbers[4];
$sum = $sum + $numbers[5];
$sum = $sum + $numbers[6];
$sum = $sum + $numbers[7];
$sum = $sum + $numbers[8];
$sum = $sum + $numbers[9];

echo "Somme totale : $sum\n";

$sum = 0;
foreach($numbers as $chiffre) {
    $sum = $sum + $chiffre;
}

for($i = 0; $i < count($numbers); $i++) {
    $sum = $sum + $numbers[$i];
}



foreach($numbers as $number) {

    if($number > $max)
        $max = $number;
    
    if($number < $min)
        $min = $number;

}

echo "Valeur Maximale : $max\n";
echo "Valeur Minimale : $min\n";
echo "Valeur Moyenne : " . $sum / 10 . "\n";

