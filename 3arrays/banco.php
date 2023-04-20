<?php

require 'funcoes.php';

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

// foreach ($contaCorrente as $cpf => $conta) { //indice do array $cpf e o valor é a $conta
//     exibeMensagem(
//         mensagem:$cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL
//     );
// }

// foreach ($contaCorrente as $cpf => $conta) {  //SIMPLES
//     exibeMensagem(
//         mensagem:"$cpf $conta[titular] $conta[saldo]"
//     );
// }

foreach ($contaCorrente as $cpf => $conta) {  //COMPLEXO interpolação
    exibeMensagem(
        mensagem:"$cpf {$conta['titular']} {$conta['saldo']}"
    );
}