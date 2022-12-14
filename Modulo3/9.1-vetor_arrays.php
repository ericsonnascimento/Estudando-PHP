<?php
//primeira forma:

$carros = array(
    'vw' => "Fusca",
    'chevrolet' => "Monza"
);

//segunda forma:

$carros = [
    'vw' => "Fusca",
    'chevrolet' => "Monza"
];

//terceira forma:

$carros['vw'] = "Fusca";
$carros['chevrolet'] = "Monza";



print_r($carros);