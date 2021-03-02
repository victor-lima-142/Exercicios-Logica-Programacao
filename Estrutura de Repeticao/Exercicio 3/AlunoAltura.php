<?php
/*Faça um programa que leia dez conjuntos de dois valores, o primeiro representando o número do aluno e o segundo representando
sua altura em centímetros. Encontre o aluno mais alto e o mais baixo. Mostre o número do aluno mais alto e o número do aluno mais baixo, junto com suas alturas.*/

$maiorAltura = intval(0);
$maiorNome = '';

for ($i = 0; $i < 11; $i++) {
    $nome = strval(readline("Digite o nome do aluno " . $i . ":  "));
    $altura = intval(readline("Digite a altura do aluno " . $nome . ":  "));

    if ($altura > $maiorAltura) {
        $maiorAltura = $altura;
        $maiorNome = $nome;
    } else {
        #dont doe nothing
    }
}

echo "A maior altura registrada foi de " . $maiorAltura . " cm, do aluno " . $maiorNome . ".";
