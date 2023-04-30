<?php
function geraEmail(): void{ //void não retorna nada
    $conteudoEmail = <<<FINAL
    olá, fulano(a)!
    
    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}
    FINAL;

    echo $conteudoEmail;

}

geraEmail();