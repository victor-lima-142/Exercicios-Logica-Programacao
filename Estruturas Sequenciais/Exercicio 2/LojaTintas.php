<?php

/*
Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.
Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros,
que custam R$ 80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.
*/

$area = floatval(readline("Digite o tamanho da área: "));
$litros = $area / 3;
$latas = $litros / 18;

echo "Area: " . $area . " m²." . PHP_EOL;
echo "Litros: " . round($litros, 2) . PHP_EOL;
echo "Latas: " . ceil($latas) . PHP_EOL;

if ($latas <= 1) {
    echo "Será necessária apenas 1 lata de tinta que custará R$ 80.00 .";
} else {
    $valor = floatval(ceil($latas) * 80);
    echo 'Serão necessárias ' . ceil($latas) . ' latas de tinta que custará R$ ' . $valor;
}
