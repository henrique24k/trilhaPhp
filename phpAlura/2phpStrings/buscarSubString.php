<?php

$nome = 'Henrique vieira';
$email = 'henrique@email.com';
$posicaoArroba = strpos($email, needle: '@'); //string position
$senha = '12372T47124TY';

if (strlen($senha) <= 8){ //armazena por bytes e não por carcter
    echo "Sua senha é insegura" . PHP_EOL;
}else{
    echo "Senha segura" . PHP_EOL;
}




echo substr($email, offset:0, length:8);
echo PHP_EOL;
echo substr($email, offset:8, length:20);
echo PHP_EOL;
$usuario = substr($email, offset:$posicaoArroba + 1);
echo strtoupper($usuario) . PHP_EOL;
// $usuario = substr($email, offset:$posicaoArroba + 1);
// echo strtolower($usuario) . PHP_EOL;



