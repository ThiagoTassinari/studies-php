<?php

$multiplicador = 3;

// Loop para demonstrar a tabuada de multiplicação a base 3
for ($i = 1; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}