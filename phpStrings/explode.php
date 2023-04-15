<?php

$nome = 'Henrique Vieira Almeida';

$array = '1 2 3 4';

var_dump(explode(' ', $array, limit:2));

echo trim($nome) ; //aparara string e remover espaços SE O ESPAÇO ESTIVER NO MEIO NÃO TIRA
echo ltrim($nome, 'H') ;
echo PHP_EOL;
echo rtrim($nome), 'E' ;