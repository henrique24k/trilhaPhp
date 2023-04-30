<?php
    $peso = 10;
    $altura = 1.75;
    $imc = $peso / ($altura * $altura);

    if($imc < 16){
        echo "Abaixo do peso";
    }
    else if(($imc >= 16) && ($imc <= 25)){
        echo "peso normal";
    }
    else{
        echo "Acima do peso";
    }