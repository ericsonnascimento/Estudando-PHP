<?php

// Estrutura de repetição while, sintax COMUM:

$var1 = 1;

while ($var1 <= 10){
    echo $var1;
    $var1 += 1;
    echo "\n";
}

// Estrutura de repetição while, sintax ALTERNATIVA:

$var2 = 1;

while ($var2 <= 10):
    echo $var2;
    $var2 += 1;
    echo "\n";
endwhile;

//No "dowhile" o codigo é executado no "do" e no final vem o laço 

$i = 2;
do {
    echo $i;
    $i+=2;
    echo "\n";
}while ($i <= 20);
