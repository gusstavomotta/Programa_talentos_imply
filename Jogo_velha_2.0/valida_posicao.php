<?php

function valida_posicao(int $posicao, array $tabuleiro): bool
{


    if (!in_array($posicao, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {

        echo "\nPosição inválida, insira novamente!\n";
        return false;
    } elseif ($tabuleiro[$posicao] !== ESPACO_BRANCO) {

        echo "\nPosição ocupada, insira novamente!\n ";
        return false;
    }
    return true;
}
