<?php
$nome = 'Henrique Vieira';

$mesmoSobrenome = str_contains($nome, needle: 'Vieira'); //busca a string dentro da string, retorna boleano
//var_dump - exibe o tipo e o vaor da variavel.

if ($mesmoSobrenome) {
    echo "$nome provavelmente da mesma familia";
} else {
    echo "$nome não é da mesma familia";
}