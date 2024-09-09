<?php


echo '<h1> Functions </1>';

$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];

$arrayAssociativo = [

    'nome' => 'gustavo',
    'idade' => 20,
    'nome_mae' => 'greice'
];

echo 'Count em array normal';

echo "<pre>";
//print_r($array);
echo count($array);
echo "</pre>";
echo '<hr>';

echo 'Funcao count em um array associativo';

echo "<pre>";
echo count($arrayAssociativo);
echo "</pre>";
echo '<hr>';


echo "Dicionarios e arrays\n";

echo 'Separa apenas as chaves dos dicts';
echo "<pre>";
print_r(array_keys($arrayAssociativo));
echo "</pre>";
echo '<hr>';

echo 'Separa apenas os valores em um dict';;

echo "<pre>";
print_r(array_values($arrayAssociativo));
echo "</pre>";
echo '<hr>';

echo 'Verifica se um valor existe dentro de um array e retorna bool';;
echo "<pre>";
var_dump(in_array('bacaa', $array));
echo "</pre>";
echo '<hr>';

echo 'Verifica se um valor existe dentro de um dicionario';;
echo "<pre>";
var_dump(in_array('greice', $arrayAssociativo));
echo "</pre>";
echo '<hr>';


echo 'Funçao array search no array normal';;
echo "<pre>";
var_dump(array_search('laranja', $array));
echo "</pre>";
echo '<hr>';


echo 'Funçao array search no dicionario';;
echo "<pre>";
var_dump(array_search('gustavo', $arrayAssociativo));
echo "</pre>";
echo '<hr>';

echo 'Funçao array search no dicionario';;
echo "<pre>";
var_dump(array_search('gustavo', $arrayAssociativo));
echo "</pre>";
echo '<hr>';


echo 'Funçao Isset verifica se existe o indice no array';;
echo "<pre>";
var_dump(isset($array[6]));
echo "</pre>";
echo '<hr>';

echo 'Funçao isset verifica se existe o indicie no dicionario';;
echo "<pre>";
var_dump(isset($arrayAssociativo['nome pai']));
echo "</pre>";
echo '<hr>';


echo 'Funçao array key exists verifica se existe o indice no array';;
echo "<pre>";
var_dump(array_key_exists(0, $array));
echo "</pre>";
echo '<hr>';

echo 'Funçao array key exists verifica se existe o indicie no dicionario';;
echo "<pre>";
var_dump(array_key_exists('nome', $arrayAssociativo));
echo "</pre>";
echo '<hr>';

echo 'Funçao array key exists verifica se existe o indicie no dicionario';;
echo "<pre>";
var_dump(array_key_exists('nome', $arrayAssociativo));
echo "</pre>";
echo '<hr>';


echo 'Funçao array key first funciona apenas php 7.3 ^/ seleciona a primeira chave do array ';
echo "<pre>";
echo array_key_first($arrayAssociativo);
echo "</pre>";
echo '<hr>';

echo 'Funçao array key last funciona apenas php 7.3 ^/ seleciona a ultima chave do array ';
echo "<pre>";
echo array_key_last($arrayAssociativo);
echo "</pre>";
echo '<hr>';


echo 'Array flip, nao pode ter chaves nulas e inverte as chaves com os valores';
echo "<pre>";
print_r($array);
print_r(array_flip($array));
echo "</pre>";
echo '<hr>';

echo 'Funçao Implode, concatena todos os dados do array separados pelo separador escolhido';
echo "<pre>";
echo implode(', ', $array);
echo "</pre>";
echo '<hr>';


echo 'Funçao explode, transforma string em array e separa todos os dados pelo separador escolhido';
echo "<pre>";
print_r(explode(',', 'banana,morango,abacaxi,chupingole'));
echo "</pre>";
echo '<hr>';
