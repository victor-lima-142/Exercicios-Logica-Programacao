<?php
/*
Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar.
O resultado da operação deve ser acompanhado de uma frase que diga se o número é:
par ou ímpar;
positivo ou negativo;
inteiro ou decimal.
*/
$a = readline("Insira o primeiro número: ");
$b = readline("Insira o segundo número: ");

echo PHP_EOL . '[1] Soma || [2] Subtrai || [3] Divide || [4] - Multiplica' . PHP_EOL;

$decisao = intval(readline("O que você deseja fazer?  "));

switch ($decisao) {
    case 1:
        $resultado = $a + $b;
        descricao($resultado);
        break;
    case 2:
        $resultado = $a - $b;
        descricao($resultado);
        break;
    case 3:
        $resultado = $a / $b;
        descricao($resultado);
        break;
    case 4:
        $resultado = $a * $b;
        descricao($resultado);
        break;
}

function descricao($numero)
{
    $frase = "O número " . $numero . " é:";
    if ($numero % 2 != 0) {
        $frase = $frase . PHP_EOL . "Ímpar;";
    } else {
        $frase = $frase . PHP_EOL . "Par;";
    }

    if ($numero < 0) {
        $frase = $frase . PHP_EOL . 'Negativo;';
    } else {
        $frase = $frase . PHP_EOL . 'Positivo;';
    }

    if (!is_float($numero)) {
        $frase = $frase . PHP_EOL . 'Inteiro;';
    } else {
        $frase = $frase . PHP_EOL . 'Decimal;';
    }

    echo $frase;
}
