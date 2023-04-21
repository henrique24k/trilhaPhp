<?php

function sacar(array $conta, float $valorSaque): array //uma funcão so conhece variaveis criads dentro dela //devolver array   
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar esse valor");
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
        exibeMensagem(mensagem: "Depositos precisam sem positivos");
    }


    return $conta;
}

function exibeMensagem($mensagem): void //não retorna nada
{ //subrotina não retornam valor funções sim
    echo $mensagem . '<br>';
}

function titularComLetrasMaisculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //sintaxe do list
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}