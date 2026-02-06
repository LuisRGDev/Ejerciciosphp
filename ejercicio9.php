<?php
//Calcular el factorial de un numero
$numero = 5;
$arreglo = [];
$factorial = 0;
for($i = $numero;$i >= 1;$i--)
{
    $arreglo[] = $i;
    //print_r ($arreglo);
}
foreach($arreglo as &$valor){
    $valor == $numero;
}

print_r ($arreglo);
$factorial = array_product($arreglo);

echo $factorial;
