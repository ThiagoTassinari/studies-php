<?php

function exibiMessagem($messagem) {
    echo $messagem . PHP_EOL;
};

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => "Thiago",
        'saldo' => 1000
    ], 
    '123.456.489-11' => [
        'titular' => "Rafa",
        'saldo' => 300
    ], 
    '123.256.781-11' => [
        'titular' => "Acabe",
        'saldo' => 100
    ]
];

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    exibiMessagem("Você não pode sacar");
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.489-11']['saldo']) {
    exibiMessagem("Você não pode sacar este valor");
} else {
    $contasCorrentes['123.456.489-11']['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
    exibiMessagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}