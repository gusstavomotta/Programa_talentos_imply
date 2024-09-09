<?php


function troca_jogadores(String $jogador): String
{

    if ($jogador === JOGADOR_UM) {
        return JOGADOR_DOIS;
    } else {
        return JOGADOR_UM;
    }
}
