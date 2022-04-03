<?php

// Array Associativo
$conta1 = [
    'titular' => "Thiago",
    'saldo' => 1000
];

$conta2 = [
    'titular' => "Rafa",
    'saldo' => 550
];

$conta3 = [
    'titular' => "Acabe",
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

// Acessando array associativo de forma direta
echo $conta2['titular'] . PHP_EOL;

// Este é um array dentro de outro array
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}