<?php


echo '<h1> Ordenacao </1>';

echo '<h2>Sort</h2>';

$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];
echo 'ordena e nao mantem as chaves';

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];
echo 'ordena e mantem as chaves';
echo "<pre>";
print_r($array);
echo "</pre>";

asort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';

$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];
echo "Ordena invertido";
echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];
echo "Ordena invertido e mantem as chaves";
echo "<pre>";
print_r($array);
echo "</pre>";

arsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";


echo '<h2>KSort</h2>';

echo '<hr>';
$array = [
    'nome' => 'gustavo',
    'idade' => '20',
    'a' => 'b'
];

echo "Ordena as chaves crescente";
echo "<pre>";
print_r($array);
echo "</pre>";

ksort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<h2>KrSort</h2>';
echo '<hr>';
$array = [
    'nome' => 'gustavo',
    'idade' => '20',
    'a' => 'b'
];

echo "Ordena as chaves decrescente";
echo "<pre>";
print_r($array);
echo "</pre>";

krsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo '<hr>';


echo '<h2>Usort</h2>';
echo 'Ordena com base nas condiçoes do programador, o codigo abaixo ordena crescente, caso quiser o contrario inverter no return o -1 e o 1';
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

usort($array_pessoas, function ($x, $y) {

    if ($x['idade'] == $y['idade']) return 0;

    return $x['idade'] < $y['idade'] ? -1 : 1;
});

echo '<pre>';
print_r($array_pessoas);


echo '<hr>';
echo '<h2>Usort que mantem os indices</h2>';
echo 'Ordena com base nas condiçoes do programador';
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

uasort($array_pessoas, function ($x, $y) {

    if ($x['idade'] == $y['idade']) return 0;

    return $x['idade'] < $y['idade'] ? -1 : 1;
});

echo '<pre>';
print_r($array_pessoas);
echo '</pre>';



echo '<hr>';
echo '<h2>Funcao shuffle</h2>';
echo 'bagunça os valores do array sem ordem especifica';

$array = [
    'banana',
    'morango',
    'laranja',
    'abacate'
];

print_r($array);
shuffle($array);
print_r($array);


echo '<hr>';
echo '<h2>Funcao natsort</h2>';
echo 'ordenacao natural, ele ordena de forma correta, ele entende caso um valor 10.0 > 2.0 e ordena certo, coisa que o sort normal nao faz';

$array = [
    '10.0v',
    '3.0v',
    '5.0v',
    '2.0v'
];

echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

natsort($array);
echo '<pre>';
print_r($array);
echo '</pre>';
