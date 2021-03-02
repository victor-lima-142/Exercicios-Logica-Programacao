<?php
/*Faça um programa que leia um nome de usuário ea sua senha e não aceite a senha igual ao nome do usuário,
mostrando uma mensagem de erro e voltando a pedir as informações.
*/

$nome = strval(readline('Digite seu nome:'));
$senha = strval(readline('Digite sua senha:'));

while ($nome == $senha) {
    echo "Nome se senha iguais. Faça novamente:" . PHP_EOL . PHP_EOL;
    $nome = strval(readline('Digite seu nome:'));
    $senha = strval(readline('Digite sua senha:'));
    if ($nome != $senha) {
        echo "Bom trabalho." . PHP_EOL . "Nome: " . $nome . PHP_EOL . "Senha: " . $senha;
        exit();
    }
}
