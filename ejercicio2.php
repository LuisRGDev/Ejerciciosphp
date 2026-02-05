<?php
//Saber si un numero es mayor, menor o igual a otro

$num1 = 3;
$num2 = 2;

if($num1 > $num2){
    echo "El numero 1 es mayor que el numero 2";
}elseif($num1 < $num2)
{
    echo "El numero 1 es menor que el numero 2";
}elseif($num1 === $num2){
    echo "los numeros son iguales";
}