<?php

function sacar(array $conta,float $valorSaque): array //uma funcão so conhece variaveis criads dentro dela //devolver array   
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem(mensagem:"Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;
}

function depositar($conta, float $valorDeposito)
{
    if ($valorDeposito > 0) { //se for maior que zero eu faço o deposito.
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem (mensagem:"Depositos precisam sem positivos");
    }


    return $conta;
}

function exibeMensagem($mensagem) : void //não retorna nada
{ //subrotina não retornam valor funções sim
    echo $mensagem;
}

$contaCorrente = [
    1234 => [
        'titular' => 'Henrique',
        'saldo' => 2000,
    ],
    //mudando o indice do array
    5678 => [
        'titular' => 'Guilherme',
        'saldo' => 300
    ],
    9123 => [
        'titular' => 'Maria',
        'saldo' => 5000
    ]
];

//fazendo o saque
$contaCorrente['1234'] = sacar(
    $contaCorrente[1234],
    valorSaque: 500
);

$contaCorrente['5678'] = sacar(
    $contaCorrente[5678],
    valorSaque: 500
);

//fazendo deposito
$contaCorrente['1234'] = depositar(
    $contaCorrente[1234],
    valorDeposito: 125
);

foreach ($contaCorrente as $cpf => $conta) { //indice do array $cpf e o valor é a $conta
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}