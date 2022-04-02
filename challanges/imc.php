<?php

$peso = 76.5;
$altura = 1.83;
$imc = $peso / $altura ** 2;

// A função round arrendoda para cima ou para baixo, depende do valor do resultado 
if ($imc < 18.5) {
    echo "\t Cuidado seu IMC está no valor de " . round($imc) . '. Então seu IMC está abaixo da média';
} elseif ($imc < 25) {
    echo "\t Tranquilo seu IMC está no valor de " . round($imc) . '. Então seu IMC está com bom resultado.';
} else {
    echo "\t Cuidado seu IMC está no valor de " . round($imc) . '. Então seu IMC está acima da média';
}

echo PHP_EOL;

// A função floor sempre arrendoda o valor para baixo
if ($imc < 18.5) {
    echo "\t Cuidado seu IMC está no valor de " . floor($imc) . '. Então seu IMC está abaixo da média';
} elseif ($imc < 25) {
    echo "\t Tranquilo seu IMC está no valor de " . floor($imc) . '. Então seu IMC está com bom resultado.';
} else {
    echo "\t Cuidado seu IMC está no valor de " . floor($imc) . '. Então seu IMC está acima da média';
}

echo PHP_EOL;

// A função ceil sempre arrendoda o valor para cima
if ($imc < 18.5) {
    echo "\t Cuidado seu IMC está no valor de " . ceil($imc) . '. Então seu IMC está abaixo da média';
} elseif ($imc < 25) {
    echo "\t Tranquilo seu IMC está no valor de " . ceil($imc) . '. Então seu IMC está com bom resultado.';
} else {
    echo "\t Cuidado seu IMC está no valor de " . ceil($imc) . '. Então seu IMC está acima da média';
}