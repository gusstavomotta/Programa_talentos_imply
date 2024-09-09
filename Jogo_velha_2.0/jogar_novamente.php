<?php

function jogar_novamente(): bool
{

    $resultado = readline("\nDeseja jogar novamente? (s/n): ");
    return $resultado === 's' ? true : false;
}
