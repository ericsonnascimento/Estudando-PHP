<?php

/*Com o laço for, temos três expressões sendo avaliadas:
    1 - A primeira expressão − “$i = 0” − é avaliada, incondicionalmente, no início da repetição.
    2 - A seguir, a cada interação, a segunda expressão − “$i <= 20” − é avaliada. Caso seja verdadeira, o loop continuará.
    3 - Por último, ao final de cada interação, a terceira expressão − “$i++” − é avaliada e executada. */

for ($i = 1; $i <= 20; $i++) {
    echo $i;
    echo "\n";
}

$carros = Array("Fusca", "Monza", "Passat");

foreach($carros as $carro){
    echo $carro;
    echo "\n";
}

for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i];
    echo "\n";
}