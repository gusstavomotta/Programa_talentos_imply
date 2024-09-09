<?php

function mostra_vencedor(String $vencedor, array $jogadores): String
{

    if ($vencedor === JOGADOR_UM) {

        return "Parabéns {$jogadores[0]}!!\n";
    } elseif ($vencedor === JOGADOR_DOIS) {

        return "Parabéns {$jogadores[1]}!!\n";
    } else {
        return "DEU VELHA!!\n";
    }
}
