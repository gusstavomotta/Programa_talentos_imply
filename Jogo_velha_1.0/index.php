<?php

do {
    //Scan do nome dos jogadores
    $jogador_um = readline('Jogador 1 - Insira seu nome: ');
    $jogador_dois = readline("Jogador 2 - Insira seu nome: ");

    $jogador = 'X';

    //criação do array tabuleiro, todas as posições estão representadas por . (vazio)
    $tabuleiro =
        [
            '.', '.', '.',
            '.', '.', '.',
            '.', '.', '.',
        ];


    $vencedor = null;

    //enquanto nao houver vencedor o jogo continua rodando
    while ($vencedor === null) {

        //heredoc para concatenar multiplas strings
        echo <<< EOL

                    Posições:   | Tabuleiro
                                |
                    0|1|2       |   $tabuleiro[0] | $tabuleiro[1] | $tabuleiro[2]
                    3|4|5       |   $tabuleiro[3] | $tabuleiro[4] | $tabuleiro[5]
                    6|7|8       |   $tabuleiro[6] | $tabuleiro[7] | $tabuleiro[8]
                    
        EOL;
        //verifica se a posicao inserida é válida
        $posicao = (int) readline("\nJogador {$jogador}, digite a sua posição: ");

        if (!in_array($posicao, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
            echo "\n Posição inválida, insira novamente!\n";
            continue;
        }

        if ($tabuleiro[$posicao] !== '.') {
            echo "\nPosição ocupada, insira novamente!\n";
            continue;
        }
        // caso válido o tabuleiro marca na posicao "X" ou "O"
        $tabuleiro[$posicao] = $jogador;

        //verifica qual jogador ganhou e seta o vencedor na variavel 
        if (
            ($tabuleiro[0] === 'X' && $tabuleiro[1] === 'X' && $tabuleiro[2] === 'X') ||
            ($tabuleiro[3] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[5] === 'X') ||
            ($tabuleiro[6] === 'X' && $tabuleiro[7] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[0] === 'X' && $tabuleiro[3] === 'X' && $tabuleiro[6] === 'X') ||
            ($tabuleiro[1] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[7] === 'X') ||
            ($tabuleiro[2] === 'X' && $tabuleiro[5] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[0] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[8] === 'X') ||
            ($tabuleiro[2] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[6] === 'X')
        ) {
            $vencedor = 'X';
            break;
        }

        if (
            ($tabuleiro[0] === 'O' && $tabuleiro[1] === 'O' && $tabuleiro[2] === 'O') ||
            ($tabuleiro[3] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[5] === 'O') ||
            ($tabuleiro[6] === 'O' && $tabuleiro[7] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[0] === 'O' && $tabuleiro[3] === 'O' && $tabuleiro[6] === 'O') ||
            ($tabuleiro[1] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[7] === 'O') ||
            ($tabuleiro[2] === 'O' && $tabuleiro[5] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[0] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[8] === 'O') ||
            ($tabuleiro[2] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[6] === 'O')
        ) {
            $vencedor = 'O';
            break;
        }

        //verifica se ainda existe espaço no tabuleiro/ caso nao, sai da repetição e empata o jogo
        if (!in_array(".", $tabuleiro)) {
            break;
        }

        //faz a troca de jogador
        if ($jogador === 'X') {
            $jogador = 'O';
        } else {
            $jogador = 'X';
        }
    }
    //apenas printa o tabuleiro atualizado e parabeniza o jogador
    echo <<< EOL

                    Posições:   | Tabuleiro
                                |
                    0|1|2       |   $tabuleiro[0] | $tabuleiro[1] | $tabuleiro[2]
                    3|4|5       |   $tabuleiro[3] | $tabuleiro[4] | $tabuleiro[5]
                    6|7|8       |   $tabuleiro[6] | $tabuleiro[7] | $tabuleiro[8]
                    EOL;

    if ($vencedor === "X") {
        echo "\nParabéns {$jogador_um} você venceu!!\n";
    } elseif ($vencedor === "O") {
        echo "\nParabéns {$jogador_dois} você venceu!!\n";
    } else {
        echo "\nDEU VELHA!\n";
    }

    //da a opção de jogar novamente
    $jogar_novamente = filter_var(
        strtolower(readline("\nDeseja jogar novamente? (true/false): ")),
        FILTER_VALIDATE_BOOLEAN
    );
} while ($jogar_novamente === true);
