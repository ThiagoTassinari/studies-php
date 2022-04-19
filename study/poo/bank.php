<?php

require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Account.php';

$firstAccount = new Account('123.456.789-10', 'Thiago Santos');
$firstAccount->deposit(500);
$firstAccount->withdraw(300);

echo $firstAccount->getNameTitular() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;
echo $firstAccount->getCpfTitular() . PHP_EOL;

$secondAccount = new Account('698.549.548-10', 'Patricia');
var_dump($secondAccount);

$otherAccount = new Account('123', 'Abdfea');
unset($secondAccount);
echo Account::getNumberAccount();