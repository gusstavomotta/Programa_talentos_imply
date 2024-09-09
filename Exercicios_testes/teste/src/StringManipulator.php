<?php

use PhpParser\Node\Expr\AssignOp\Concat;

class StringManipulator
{
    public function capitalizeString(string $texto)
    {

        if ($texto == "") {
            return "";
        }
        return $texto;
    }
    public function concatenateString(string $texto1, string $texto2)
    {
        $espacos1 = substr_count($texto1, ' ');
        $espacos2 = substr_count($texto2, ' ');

        if ($espacos1 == 0 && $espacos2 == 0) {
            $concatenada = trim($this->capitalizeString($texto1) . $this->capitalizeString($texto2));
            return $concatenada;
        }
        $concatenada = trim($this->capitalizeString($texto1) . " " . $this->capitalizeString($texto2));
        return $concatenada;
    }

    public function countVowels(string $texto)
    {
        preg_match_all('/[aeiou]/i', $texto, $vogais);
        return count($vogais[0]);
    }
}
//function capitalizeString apenas verifica se o texto é vazio ou nao, caso sim retorna vazio, caso nao retorna a string
//function concatena string verifica se existem espaços dentro da string, se as duas string NAO tiverem espaço elas sao concatenadas diretamente, caso tiverem um espaço é colocado no meio para formar uma frase
//o countVowels apenas percorre a string, faz um preg_match_all para separar todas as vogais, após isso o programa conta quantas vogais retornaram. O parametro '/[aeiou]/i' é a condição que busca todas as vogais dentro da função ignorando se é maiusculo e minusculo