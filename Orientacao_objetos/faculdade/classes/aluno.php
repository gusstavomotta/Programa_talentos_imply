<?php 
require_once("pessoa.php");
class aluno extends pessoa{

    public int $matricula;
    public array $notas = [];
    
    public function __construct(string $nome, int $idade, int $matricula, array $notas = []){
        
        parent:: __construct($nome, $idade);
        $this->matricula = $matricula;
        $this->notas = $notas;
        
    }
    public function getMatricula(){
        return $this->matricula;

    }
    public function getNotas(){
            return $this->notas;
    }
    public function set_notas(array $notas){
        $this->notas = $notas;
    }
    public function setMatr(int $matricula){
        $this->matricula = $matricula;
    }
}