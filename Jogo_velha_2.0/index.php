<?php

require_once __DIR__ . '/constantes.php';
require_once __DIR__ . '/variaveis.php';
require_once __DIR__ . '/get_nome_jogadores.php';
require_once __DIR__ . '/cria_tabuleiro.php';
require_once __DIR__ . '/printa_tabuleiro.php';
require_once __DIR__ . '/valida_posicao.php';
require_once __DIR__ . '/atualiza_tabuleiro.php';
require_once __DIR__ . '/verifica_espaco.php';
require_once __DIR__ . '/troca_jogadores.php';
require_once __DIR__ . '/printa_vencedor.php';
require_once __DIR__ . '/jogar_novamente.php';

do {

    $jogadores = get_nome_jogadores();
    $jogador = JOGADOR_UM;
    $tabuleiro = cria_tabuleiro();

    $vencedor = null;

    while ($vencedor === null) {
        echo printa_tabuleiro($tabuleiro);
        $posicao = (int) readline("\nJogador {$jogador}, digite a sua posição: ");

        if (!valida_posicao($posicao, $tabuleiro)) {
            continue;
        }
        $tabuleiro[$posicao] = $jogador;

        if (valida_jogo($tabuleiro, JOGADOR_UM)) {
            $vencedor = JOGADOR_UM;
            break;
        } elseif (valida_jogo($tabuleiro, JOGADOR_DOIS)) {
            $vencedor = JOGADOR_DOIS;
            break;
        } else {
            $vencedor = null;
        }

        if (verifica_espaco($tabuleiro)) {
            break;
        }

        $jogador = troca_jogadores($jogador);
    }
    echo printa_tabuleiro($tabuleiro);
    echo mostra_vencedor($vencedor, $jogadores);

    $jogar_novamente = jogar_novamente();
} while ($jogar_novamente === true);
