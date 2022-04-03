<?php

// Primeira forma de importar um arquivo
// include('function.php'); 

// Segunda forma de importar um arquivo
// require 'function.php';

// Terceira forma de importar um arquivo
require_once 'function.php';

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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.489-11'] = sacar($contasCorrentes['123.456.489-11'], 500);

$contasCorrentes['123.256.781-11'] = depositar($contasCorrentes['123.256.781-11'], -100);

foreach ($contasCorrentes as $cpf => $conta) {
    exibiMessagem("$cpf {$conta['titular']} {$conta['saldo']}");
}