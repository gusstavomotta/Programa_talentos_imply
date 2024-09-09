<?php

use SebastianBergmann\Type\FalseType;
use SebastianBergmann\Type\TrueType;

class ShoppingList
{
    public $listaCompras = [];
    public function addItem(string $item)
    {
        if (!in_array($item, $this->listaCompras)) {
            $this->listaCompras[] = $item;
            return True;
        }

        return False;

    }
    public function getItens()
    {
        return $this->listaCompras;
    }

    public function removeItem(int $indice)
    {
        if (array_key_exists($indice, $this->listaCompras)) {
            unset($this->listaCompras[$indice]);
            return True;
        }

        return False;

    }
    public function clearItems()
    {
        $this->listaCompras = array();
    }
}
// A classe shopping list tem como objetivo gerir umas lista de compra, podemos adicionar um item, excluir, listar e zerar a lista
// a function addItem adiciona um item no array de compras, validando se o valor passado existe na lista ou nao, caso existir retorna false, caso não adiciona normalmente
// a function getItens retorna os itens do array de compras
// a function removerItem remove um item da lista com base no indice dele nessa lista, caso o indice nao existir o programa retorna false
// a functio clearItems limpa todos os valores da lista de compras