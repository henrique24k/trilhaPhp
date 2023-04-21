<?php

$idadeList = [18, 19, 20, 21, 22, 23, 24];
$primeiraIdade = $idadeList[2];

list($idadeHenrique, $idadePai, $idadeMae) = $idadeList;

echo $idadeHenrique, $idadePai, $idadeMae;

echo $primeiraIdade;

//ADD DADOS

$idadeList[7] = 20; //add no indice 7 0 20

foreach ($idadeList as $idade) {
    echo $idade;
}