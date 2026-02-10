<?php

function sumar($a, $b){
    $a + $b;
}

function restar($a, $b){
    $a - $b;
}

function multiplicar($a, $b){
    $a * $b;
}

function dividir($a, $b){
    if($b === 0){
        echo "Error division por 0";
    }
    return $a / $b;
}


$num1 = 5;
$num2 = 10;

echo "El resultado de la suma es: " . sumar($num1, $num2);
echo "El resultado de la resta es: " . restar($num1, $num2);
echo "El resultado de la multiplicacin es: " . multiplicar($num1, $num2);
echo "El resultado de la division es: " . dividir($num1, $num2);