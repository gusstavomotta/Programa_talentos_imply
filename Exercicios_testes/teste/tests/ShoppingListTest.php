<?php
use phpunit\framework\TestCase;

use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotCount;
use function PHPUnit\Framework\assertNotEmpty;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertNotTrue;
use function PHPUnit\Framework\assertTrue;

require_once "src/ShoppingList.php";
class ShoppingListTest extends TestCase
{
    public $lista;

    public function setup(): void
    {
        $this->lista = new ShoppingList;
    }

    public function testAddItem()
    {
        assertTrue($this->lista->addItem('banana'));
        assertTrue($this->lista->addItem('abacaxi'));
        assertNotEmpty($this->lista->getItens());
        assertCount(2, $this->lista->getItens());

    }

    public function testRemoveItem()
    {
        $this->lista->addItem("banana");
        assertNotEmpty($this->lista->getItens());
        $this->lista->removeItem(0);
        assertEmpty($this->lista->getItens());

    }
    public function testAddDuplicado()
    {
        assertTrue($this->lista->addItem("banana"));
        assertFalse($this->lista->addItem("banana"));

    }
    public function testRemoveItemNaoExistente()
    {
        assertFalse($this->lista->removeItem(1));

    }
    public function testClearItems()
    {
        $this->lista->addItem("banana");
        $this->lista->addItem("abacaxi");
        $this->lista->clearItems();
        assertEmpty($this->lista->getItens());

    }

}
// no teste de addItem 2 itens são adicionados na lista de compras, após isso 2 testes sao feitos, um teste para verificar se a lista nao está vazia e outro para ver se existem exatamente os dois itens adicionados na lista

//no teste RemoveItem 1 item é add na lista, o programa verifica se a lista NAO está vazia, para saber se foi adicionado corretamente e depois exclui esse item e verifica se a lista ESTA vazia

// no teste AddDuplicado o codigo tenta adicionar dois itens iguais no array de itens, caso adicionar um igual o programa retorna false caso não retorna true e adiciona o array, note que as funções estão sendo passadas diretas dentro dos asserts pois elas estão retornando true ou false

// no teste RemoveItemNaoExistente o codigo tenta remover um item em uma posicao que nao existe no array de itens e verifica se o programa retornou false como esperado

// no teste ClearItems o codigo adiciona 2 itens no array de itens e depois limpa o array, após limpar é feita uma verificação para ver se o array realmente está vazio