<?php

// $arquivo = fopen('lista-cursos.txt', 'r'); //r de read de leitura

// while (!feof($arquivo)) {
//     $curso = fgets($arquivo);

//     echo $curso . PHP_EOL;
// }

// fclose($arquivo);

// ------------------------------

// $arquivo = fopen('lista-cursos.txt', 'r');

// $tamanhoDoArquivo = filesize('lista-cursos.txt');
// $cursos = fread($arquivo, $tamanhoDoArquivo);

// echo $cursos;

// fclose($arquivo);

// --------------------------------

// $cursos = file_get_contents('lista-cursos.txt');

// echo $cursos;

$cursos = file('lista-cursos.txt');

var_dump($cursos);
