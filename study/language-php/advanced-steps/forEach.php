<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => "Thiago",
        'saldo' => 1000
    ], 
    12345648911 => [
        'titular' => "Rafa",
        'saldo' => 550
    ], 
    1232567810 => [
        'titular' => "Acabe",
        'saldo' => 300
    ]
];

// Busquei todas as contas pelo titular
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

// Criei uma chave com nome cpf para atribuir como índice do meu array contasCorrente
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}