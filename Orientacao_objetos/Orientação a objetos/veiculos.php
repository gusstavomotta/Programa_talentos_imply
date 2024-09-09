<?php 

class veiculos{

    public String $placa;
    public string $cor;
    public string $modelo;
    public string  $ano;

    public function __construct(string $placa, string $cor, string $modelo, string $ano){

    $this->placa = $placa;  
    $this->cor = $cor;
    $this->modelo = $modelo;
    $this->ano = $ano;
    }
        
}