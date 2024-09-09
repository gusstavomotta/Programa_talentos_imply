<?php

function get_nome_jogadores(): array
{

    return [
        readline('Jogador 1 (' . JOGADOR_UM . ') - Digite o seu nome: '),
        readline('Jogador 2 (' . JOGADOR_DOIS . ') - Insira seu nome: ')
    ];
}
