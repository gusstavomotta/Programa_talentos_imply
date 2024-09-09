<?php 
require_once("professor.php");
require_once("aluno.php");
require_once("disciplina.php");
require_once("facul.php");


$aluno2 = new aluno('Felipe' , 21, 32432);
$aluno1 = new aluno ('Gustavo',20, 133856);
$professor1 = new Professor ('Gilberto', 45, ['estrutura de dados']);
$disc = new Disciplina("estrutura de dados", 60,[$aluno1,$aluno2], $professor1);


/*
var_dump($disc);
var_dump($professor1);
var_dump($aluno1);
*/

$faculdade = new faculdade("unisc", [$disc]);
file_put_contents('teste.json',json_encode($faculdade, JSON_PRETTY_PRINT));