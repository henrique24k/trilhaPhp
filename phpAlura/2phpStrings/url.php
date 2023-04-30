<?php

$url = 'https://henrique.com.br';

if(str_starts_with($url, needle:'https')){ //essa string começa com https?
    echo "$url é uma conexão segura";
}else{
    echo "$url não é uma conexão segura";
}

echo PHP_EOL;

if(str_ends_with($url, needle:'br')){ //essa string termina com br?
    echo "$url é um dominio do Brasil";
}else{
    echo "$url não é um dominio do Brasil";
}