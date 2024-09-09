<?php

function verifica_espaco(array $tabuleiro): bool
{

    if (in_array(ESPACO_BRANCO, $tabuleiro)) {
        return false;
    } else {
        return true;
    }
}
