<?php
//Contar vocales

$cadena = "Parangaricutirimicuaro";
$totalVocales = preg_match_all('/[aeiouAeiou]/i', $cadena, $vocales);

print_r ($vocales[0]);

$vocalesMinuscula = array_map('strtolower', $vocales[0]);

$conteo = array_count_values($vocalesMinuscula);

print_r($conteo);

echo "El total de vocales es : " . $totalVocales;