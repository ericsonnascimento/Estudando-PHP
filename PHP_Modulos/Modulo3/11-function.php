<?php

$num1 = 10;
$num2 = 15;

$resultado = soma($num1, $num2);

function soma($num1, $num2){
    return $num1 + $num2;
}

echo "O resultado da soma é: " . $resultado;