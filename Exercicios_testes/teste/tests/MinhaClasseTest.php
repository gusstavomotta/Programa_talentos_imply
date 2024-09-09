<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

require_once "src/MinhaClasse.php";

class MinhaClasseTest extends TestCase
{

    //testes para a function de soma/ negativos / negativo + positivo/ positivo + 0
    public function testSoma()
    {
        $classe = new MinhaClasse();
        $resultado = $classe->somar(-3, -2);
        assertEquals(-5, $resultado);

        $resultado2 = $classe->somar(-3, 2);
        assertEquals(-1, $resultado2);

        $resultado3 = $classe->somar(3, 0);
        assertEquals(3, $resultado3);


    }
}