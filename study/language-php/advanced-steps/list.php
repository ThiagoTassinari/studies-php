<?php

// Declarações Array - Primeiro Modo
$idadeList = [21, 23, 19, 25, 30, 41, 18];

unset($idadeList[4]);

$indexList = $idadeList[3];
echo "The index of this list is: $indexList" . PHP_EOL;

/* ------------------------------------------------- */

// Declarações Array - Segundo Modo
$shopList = array("Apple", "Orange", "Grapes", "Meet", "Chicken", "Potatos", "Tomatos");

$itemList = $shopList[3];
echo "The item of this list is: $itemList" . PHP_EOL;

/* ---------------------------------------------------- */

// Quando é um array númerico é possível adicionar elementos novos na lista sem definir 

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
