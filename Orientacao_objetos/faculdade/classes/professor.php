<?php 
require_once("pessoa.php");
class Professor extends pessoa{

    public array $disciplinas = [];
    public function __construct(String $nome, int $idade, array $disciplinas = []){   
        parent::__construct($nome, $idade);
        $this->disciplinas = $disciplinas;
    }
    public function getDisciplinas(): array{
        return $this->disciplinas;
    }
    public function setDisciplinas(array $disciplinas): void{
        $this->disciplinas = $disciplinas;
    }
    
}