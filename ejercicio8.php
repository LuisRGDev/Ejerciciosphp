<?php
//Determinar si un numero es primo

$num = -4;
$division = $num / 2;

if($num < 0){
    echo "Ingresa un numero positivo";

}elseif($division != (int)$division){
    echo "El numero es primo";
}elseif($division == (int)$division){
    echo "El numero no es primo";
}