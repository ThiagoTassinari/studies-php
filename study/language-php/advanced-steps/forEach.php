<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => "Thiago",
        'saldo' => 1000
    ], 
    '123.456.489-11' => [
        'titular' => "Rafa",
        'saldo' => 550
    ], 
    '123.256.781-11' => [
        'titular' => "Acabe",
        'saldo' => 300
    ]
];

// Como adicionar um novo item na minha lista
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

// Busquei todas as contas pelo titular
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

// Criei uma chave com nome cpf para atribuir como índice do meu array contasCorrente
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}




