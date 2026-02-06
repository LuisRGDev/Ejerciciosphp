<?php
//Dado un arreglo de numeros, ordenarlo sin usar sort();

$arreglo = array(9,4,24,5,12,56,21,2,13);
$posicion = 0;

for($i = 0; $i < count($arreglo); $i++){
    if($i < $arreglo[$i])
    {
        $arreglo[0] = $i;
    }
}

print_r ($arreglo);