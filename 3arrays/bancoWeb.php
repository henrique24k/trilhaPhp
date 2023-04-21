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
    valorSaque: 111
);

$contaCorrente['5678'] = sacar(
    $contaCorrente[5678],
    valorSaque: 22
);

//fazendo deposito
$contaCorrente['1234'] = depositar(
    $contaCorrente[1234],
    valorDeposito: 125
);

titularComLetrasMaisculas($contaCorrente['1234']);

unset($contaCorrente['9123']); //apaga um dado da variavel da memoria

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conta corrente</h1>

    <dl>
        <?php foreach($contaCorrente as $cpf => $conta) {?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

