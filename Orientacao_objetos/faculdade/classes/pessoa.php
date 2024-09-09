<?php 

abstract class pessoa {

    public string  $nome;
    public int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome) {
        $this->nome = $nome;
    }
    public function getIdade(string $idade){
        return $this->nome;
    }
    public function setIdade(string $idade) {
        $this->nome = $idade;
    }
}