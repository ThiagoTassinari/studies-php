<?php

require_once 'src/Account.php';

$primeiraConta = new Account();
$primeiraConta->deposit(500);
$primeiraConta->withdraw(300);
$primeiraConta->saldo -= 300;