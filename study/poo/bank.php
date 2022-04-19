<?php

require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Account.php';
require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Titular.php';
require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\CPF.php';


$thiago = new Titular(new CPF('123.456.789-10'), 'Thiago Santos');
$firstAccount = new Account($thiago);
$firstAccount->deposit(500);
$firstAccount->withdraw(300);


echo $firstAccount->getNameTitular() . PHP_EOL;
echo $firstAccount->getCpfTitular() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$secondAccount = new Account($patricia);
var_dump($secondAccount);

$otherAccount = new Titular(new CPF('123.322.134-98'), 'Fabiana');
unset($secondAccount);
echo Account::getNumberAccount();