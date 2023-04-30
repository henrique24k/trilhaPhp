<?php


$novoCurso = trim(fgets(STDIN));

file_put_contents('curso-php.txt', "\n$novoCurso", FILE_APPEND);