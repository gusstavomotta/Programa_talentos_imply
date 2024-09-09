<?php


echo '<h1> Manipulacao de dados </1>';

echo '<h2>Array unique</h2>';
echo 'remove os valores repetidos';

$array = [

    10, 11, 22, 13, 14, 15, 15, 16, 16
];

echo '<pre>';
print_r(array_unique($array));
echo '</pre>';
echo '<hr>';


echo '<h2>Array filter</h2>';
echo 'filtra valores nulos falsos ou 0';


$array = [

    'nome' => 'gustavo',
    'idade' => 20,
    'curso' => null,
    'novo' => 0
];

echo '<pre>';
print_r(array_filter($array));
echo '</pre>';

$filter = array_filter($array, function ($valor) {

    return !is_null($valor);
});

echo '<pre>';
print_r(($filter));
echo "</pre>";


echo '<hr>';


echo '<h2>Array diff</h2>';
echo 'verifica quais valore de  1 nao esta em outro array';
$arrayA = [
    10, 20, 25
];
$arrayB = [
    10, 17, 22, 26
];

print_r(array_diff($arrayA, $arrayB));
print_r(array_diff($arrayB, $arrayA));


echo '<hr>';


echo '<h2>Array intersect</h2>';
echo 'separa os valores iguais em arrays';
print_r(array_intersect($arrayA, $arrayB));

echo '<hr>';


echo '<h2>Array column</h2>';
echo 'seleciona apenas as colunas de um array assoiativo';
$array_pessoas = [
    [
        'Id' => 1,
        'nome' => 'gustavo',
        'idade' => 20
    ],
    [
        'Id' => 2,
        'nome' => 'ggilberto',
        'idade' => 21
    ],
    [
        'Id' => 3,
        'nome' => 'caio',
        'idade' => 19
    ]
];

print_r(array_column($array_pessoas, 'nome'));


echo '<hr>';
echo '<h2>Array combine</h2>';
$arrayC = [
    1, 10, 22
];
$arrayD = ['a', 'b', 'c'];

print_r(array_combine($arrayC, $arrayD));

echo '<hr>';
echo '<h2>Array merge</h2>';
echo 'apenas junta os valores de dois arrays';

$arrayA = [
    'gustavo',
    'caio',
    'viviane'
];
$arrayB = [
    'gilberto',
    'guilherme'
];

print_r(array_merge($arrayA, $arrayB));


echo '<hr>';
echo '<h2>Array pad</h2>';
echo 'popula um array';

$arrayA = [
    'a',
    'c'
];

print_r(array_pad($arrayA, 10, 'sem posicao'));


echo '<hr>';
echo '<h2>array shift, Filas</h2>';
echo 'remove o primeiro elemtno de um array';

$arrayA = [
    'a',
    'b',
    'c'
];

echo array_shift($arrayA);

print_r($arrayA);


echo '<hr>';
echo '<h2>array unshift, Filas</h2>';
echo 'adiciona na frente da fila';

$arrayA = [
    'a',
    'b',
    'c'
];

echo array_unshift($arrayA, 'w');
print_r($arrayA);

echo '<hr>';
echo '<h2>array pop</h2>';
echo 'remove do topo, pilha';

$arrayA = [
    'a',
    'b',
    'c'
];

echo array_pop($arrayA);
print_r($arrayA);


echo '<hr>';
echo '<h2>array unset</h2>';
echo 'apaga valor do array';

$arrayA = [
    'a',
    'b',
    'c'
];

unset($array[1]);

echo '<hr>';
echo '<h2>array map</h2>';
echo 'mapear os dados do array';

$array_pessoas = [
    [
        'Id' => 1,
        'nome' => 'gustavo',
        'idade' => 20
    ],
    [
        'Id' => 2,
        'nome' => 'ggilberto',
        'idade' => 21
    ],
    [
        'Id' => 3,
        'nome' => 'caio',
        'idade' => 19
    ]
];

print_r($array_pessoas);

$map = array_map(function ($valor) {


    $valor['nome'] = strtoupper($valor['nome']);
    return $valor;
}, $array_pessoas);

print_r($map);
