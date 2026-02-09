<?php

$suma = 0;
for($i = 1;$i <= 100; $i++){
    if($i % 2 == 0){
        echo $i . "\t";
        $suma += $i;
    }

    
}

    echo "\n" . "El resultado de la suma de los numeros pares es: " .  $suma;    