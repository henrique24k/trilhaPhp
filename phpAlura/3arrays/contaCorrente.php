<?php

$conta1 = [ //array associativa.
    'titular' => 'Henrique',
    'saldo' => 2000
];

$conta2 = [
    'titular' => 'Guilherme',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Maria',
    'saldo' => 5000
];

$contaCorrente = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contaCorrente); $i++){
    echo $contaCorrente [$i] ['titular'];
}