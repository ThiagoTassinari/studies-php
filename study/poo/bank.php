<?php

require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Account.php';
require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Address.php';
require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\Titular.php';
require_once 'C:\Users\Thiago Santos\Desktop\alura\studies-php\study\poo\src\CPF.php';


$address = new Address('São Luís', 'Calhau', 'Rua Barramar', '3A');
$thiago = new Titular(new CPF('123.456.789-10'), 'Thiago Santos', $address);

$firstAccount = new Account($thiago);
$firstAccount->deposit(500);
$firstAccount->withdraw(300);


echo $firstAccount->getNameTitular() . PHP_EOL;
echo $firstAccount->getCpfTitular() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $address);
$secondAccount = new Account($patricia);
var_dump($secondAccount);

$otherAddress = new Address('Piripiri', 'Jacauna', 'Rua Bentivi', '101');
$otherAccount = new Titular(new CPF('123.322.134-98'), 'Fabiana', $otherAddress);

unset($secondAccount);
echo Account::getNumberAccount();