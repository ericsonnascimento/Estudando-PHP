<?php

//

$var1 = 20;
$var2 = 20;

if ($var1 > $var2){
    echo "$var1 é maior que $var2";
}elseif($var1 < $var2){
    echo "$var1 é menor que $var2";
}else{
    echo "$var1 e $var2 são iguais, resultado com {}";
}

//Formas Alternativas com ":" ao invez de "{}" no if utilizando o "end" + seguido do nome da instrução

if ($var1 > $var2):
    echo "$var1 é maior que $var2";
elseif($var1 < $var2):
    echo "$var1 é menor que $var2";
else:
    echo nl2br("\n\n $var1 e $var2 são iguais, resultado com :");
endif;

$var3 = 100;

switch($var3){
    case 10:
        echo nl2br("\n\n $var3 é igual a 10");
        break;
    case 20:
        echo nl2br("\n\n $var3 é igual a 10");
        break;
    default:
        echo nl2br("\n\n $var3 não é igual a 10 e nem a 20");
        break;
}
