<?php

$idadeList = [18, 19, 20, 21, 22, 23, 24];

echo count($idadeList); //conta quanto numeros tem na lista

// for ($i = 0; $i <7; $i++) {
//     echo $idadeList[$i];
// }

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i];
}