<?php

$texto = 'Qualquer coisa poxa e caramba';

echo str_replace(//O QUE eu quero buscar, PELO O QUE quero trocar, ONDE eu estou buscando, trabalha com strings
    ['poxa', 'caramba'],
    ['***', 'ca'],
    $texto
); 

echo strtr($texto, 'poxa', 'P0X@'); //trabalha com caracteres