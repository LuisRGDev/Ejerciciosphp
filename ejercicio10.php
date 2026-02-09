<?php
//Dado un arreglo de numeros, ordenarlo sin usar sort();

$numerosArray = [9, 4, 24, 5, 12, 56, 21, 2, 13];
$n = count($numerosArray);

for($i = 0; $i < $n - 1; $i++){
    //echo $i;
    for($j = 0; $j < $n - $i - 1; $j++){
        if($numerosArray[$j] > $numerosArray[$j + 1]){
            $temp = $numerosArray[$j];
            $numerosArray[$j] = $numerosArray[$j + 1];
            $numerosArray[$j + 1] = $temp;  
        }
    }
}

print_r($numerosArray);
