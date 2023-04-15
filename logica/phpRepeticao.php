<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue; //pula o loop 
        // break; intenrompe o loop
    }
        echo "#$contador" . PHP_EOL; //Quebra linha
}