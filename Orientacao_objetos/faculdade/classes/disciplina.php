<?php 
class Disciplina{
    public string $nome;
    public int $carga_horaria;
    public array $array_alunos = [];
    public Professor $professor;

    public function __construct(string $nome, int $carga_horaria, array $array_alunos,Professor $professor){  
        $this->nome = $nome;
        $this->carga_horaria = $carga_horaria;
        $this->array_alunos = $array_alunos;
        $this->professor = $professor;
        
    }
    
}