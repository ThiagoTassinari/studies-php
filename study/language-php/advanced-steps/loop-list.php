<?php

// Declarando um aray
$idadeList = [21, 23, 19, 25, 30, 41, 18, 11];

// Em um array pequeno podemos utilizar funções de repetição com incremento, pois não influenciará na manutenção do código.
for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

// A função count conta todos os elementos do array, então ao acrescentar um novo valor, ele automaticamente incrementa.
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

echo PHP_EOL;

// O forEach é usado quando não sabemos quantos elementos tem o array ou se está em constante variação.
foreach ($idadeList as $idade) {
    echo "$idade" . PHP_EOL;
}