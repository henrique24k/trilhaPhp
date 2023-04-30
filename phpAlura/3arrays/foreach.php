<?php

$contaCorrente = [
    1234 => [
        'titular' => 'Henrique',
        'saldo' => 2000
    ],
    //mudando o indice do array
    5678 => [
        'titular' => 'Guilherme',
        'saldo' => 10000
    ],
    9123 => [
        'titular' => 'Maria',
        'saldo' => 5000
    ]
];

foreach ($contaCorrente as $conta) { //para cada uma das contas correntes como o nome $conta para cada variavel
    echo $conta['titular'] . PHP_EOL;
}

foreach ($contaCorrente as $cpf => $conta) { //indice do array $cpf e o valor é a $conta
    echo $cpf . PHP_EOL;
}