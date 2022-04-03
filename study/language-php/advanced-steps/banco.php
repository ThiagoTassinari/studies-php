<?php

// Função: É algo que retorna um valor após sua execução
function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta['saldo']) {
        exibiMessagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibiMessagem('Depósitos precisam ter valores positivos');
    }

    return $conta;
}

// Subrotina: É uma função que não retorna valor na sua execução.
function exibiMessagem(string $messagem) 
{
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.489-11'] = sacar($contasCorrentes['123.456.489-11'], 500);

$contasCorrentes['123.256.781-11'] = depositar($contasCorrentes['123.256.781-11'], -100);

foreach ($contasCorrentes as $cpf => $conta) {
    exibiMessagem("$cpf {$conta['titular']} {$conta['saldo']}");
}