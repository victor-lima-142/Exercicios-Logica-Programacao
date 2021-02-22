<?php
/*
Faça um programa que peça o tamanho de um arquivo para download (em MB)
e a velocidade de um link de Internet (em Mbps), calcule e informe o tempo
aproximado de download do arquivo usando este link (em minutos).
*/

$tamanho = floatval(readline('Informe o tamanho do arquivo (MB): '));
$velocidade = floatval(readline('Informe a velocidade da internet (Mbps): '));
echo PHP_EOL;
$tempo = $tamanho / $velocidade;
$minutos = $tempo / 60;

echo "O tempo estimado é de " . floor($minutos) . " minutos";
