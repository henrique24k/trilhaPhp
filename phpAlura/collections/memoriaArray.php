<?php

// $array = []; // memória para 0 itens
// $array[] = 1; // memória para 2^1 = 2 itens
// $array[] = 2; // memória para 2^1 = 2 itens
// $array[] = 3; // memória para 2^2 = 4 itens
// $array[] = 4; // memória para 2^2 = 4 itens
// $array[] = 5; // memória para 2^3 = 8 itens

$array = new SplFixedArray(32769);

for ($i = 0; $i < 32769; $i++) {
    $array[$i] = $i;
}

var_dump(memory_get_usage() / 1024 / 1024);


