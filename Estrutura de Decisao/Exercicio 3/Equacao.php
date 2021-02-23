<?php

/* Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c.
O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:

Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa
não deve fazer pedir os demais valores, sendo encerrado;

Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;

Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;

Se o delta for positivo, a equação possui duas raiz reais; informe-as ao usuário; */

$a = floatval(readline("Digite o primeiro termo: ") . PHP_EOL);
$b = floatval(readline("Digite o segundo termo: ") . PHP_EOL);
$c = floatval(readline("Digite o terceiro termo: "));

$delta = ($b * $b) - (4 * $a * $c);
$raiz = sqrt($delta);
$divisor = $a * 2;

if ($delta < 0) {
    echo "Não há raízes.";
} else if ($delta == 0) {
    $x = ($b * -1 + $raiz) / $divisor;
    echo "Existe apenas uma raiz: " . $x;
} else if ($delta > 0) {
    $x1 = (($b * -1) + $raiz) / $divisor;
    $x2 = (($b * -1) - $raiz) / $divisor;
    echo "Existem duas raízes:" . PHP_EOL;
    echo "x1: " . $x1 . PHP_EOL;
    echo "x2: " . $x2;
}
