<?php
/*
Numa eleição existem três candidatos. Faça um programa que peça o número total de eleitores. Peça para cada eleitor votar e
ao final mostrar o número de votos de cada candidato.*/

$candidatoA = intval(0);
$candidatoB = intval(0);
$candidatoC = intval(0);
$nulos = intval(0);
$eleitores = intval(readline("Qual o número de eleitores?"));
for ($i = 1; $i < $eleitores + 1; $i++) {
    $voto = intval(
        readline("Eleitor " . $i . ", vote em um candidato:"
            . PHP_EOL . "[1] Candidato A" . PHP_EOL .
            "[2] Candidato B " .
            PHP_EOL . "[3] Candidato C")
    );
    if ($voto == 1) {
        $candidatoA++;
    } else if ($voto == 2) {
        $candidatoB++;
    } else if ($voto == 3) {
        $candidatoC++;
    } else {
        echo "Você escolheu um inválido. Seu voto será nulo.";
        $nulos++;
    }
}

echo "RESULTADO:" . PHP_EOL;
echo "Candidato A: " . $candidatoA . PHP_EOL;
echo "Candidato B: " . $candidatoB . PHP_EOL;
echo "Candidato C: " . $candidatoC . PHP_EOL;
echo "Nulos: " . $nulos . PHP_EOL;

if ($candidatoA > $candidatoB && $candidatoA > $candidatoC) {
    echo "Candidato A foi o vencedor." . PHP_EOL;
} elseif ($candidatoB > $candidatoA && $candidatoB > $candidatoC) {
    echo "Candidato C foi o vencedor." . PHP_EOL;
} elseif ($candidatoC > $candidatoA && $candidatoC > $candidatoB) {
    echo "Candidato B foi o vencedor." . PHP_EOL;
} else {
    echo "Houve empate. Uma nova eleição será necessária." . PHP_EOL;
}
