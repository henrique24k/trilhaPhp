<?php

$arquivo = fopen('cursos-php.txt', 'w'); // w write escrever
// $arquivo = fopen('cursos-php.txt', 'a'); // escrever no fnal do arquivos

$curso = 'Php Com Amigos';

// fwrite($arquivo, $curso, length:5); //com limite de caracteres

fwrite($arquivo, $curso);

fclose($arquivo);