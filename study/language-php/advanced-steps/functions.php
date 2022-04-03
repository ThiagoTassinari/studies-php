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