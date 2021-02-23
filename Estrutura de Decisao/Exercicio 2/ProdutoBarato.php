<?php

// Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato.

$produto1 = floatval(readline('Qual preço do produto 1?'));
$produto2 = floatval(readline('Qual preço do produto 2?'));
$produto3 = floatval(readline('Qual preço do produto 3?'));

if ($produto1 < $produto2 && $produto1 < $produto3) {
    echo "O mais barato é o produto 1.";
} else if ($produto2 < $produto1 && $produto2 < $produto3) {
    echo "O mais barato é o produto 2.";
} else if ($produto3 < $produto1 && $produto3 < $produto2) {
    echo "O mais barato é o produto 3.";
} else if ($produto1 == $produto2 && $produto2 == $produto3) {
    echo "São iguais";
}
