<?php

// Gettype serve para identificar qual tipo foi declarado a variável

$idade = 21;
echo 'O tipo da variável primitiva é: ';
echo gettype($idade) . PHP_EOL;

$salario = 1000.301;
echo 'O tipo da variável primitiva é: ';
echo gettype($salario) . PHP_EOL;

$divisao = 10 / 3;
echo 'O tipo da variável primitiva é: ';
echo gettype($divisao) . PHP_EOL;

$texto = "Olá mundo";
echo 'O tipo da variável primitiva é: ';
echo gettype($texto) . PHP_EOL;

$verdadeiro = true;
echo 'O tipo da variável primitiva é: ';
echo gettype($verdadeiro) . PHP_EOL;

$falso = false;
echo 'O tipo da variável primitiva é: ';
echo gettype($falso) . PHP_EOL;