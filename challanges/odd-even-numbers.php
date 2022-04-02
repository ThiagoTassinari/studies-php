<?php

// Mostrar todos os números ímpares

echo "******************** Aqui estão todos os números ímpares de 0 à 100 ****************************** \n";

for($i = 0; $i < 100; $i++) {
    if ($i % 2 == 1) {
        echo "$i \n\n";
    }
}

echo "************************************************ \n\n";

echo "Aqui estão todos os números pares de 0 à 100 \n";

// Mostrar todos os números pares
for($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i \n";
    }
}