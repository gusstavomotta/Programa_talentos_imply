<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h1>
        <?php
        $array = [
            'banana',
            'morango',
            'laranja'
        ];

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo '<hr>';


        echo "Exemplo array dicionario\n";
        $arrayDic = [
            "nome" => 'gustavo',
            'idade' => 20,
            'faculdade' => "Unisc"
        ];
        echo "<pre>";
        print_r($arrayDic);
        echo "</pre>";

        echo '<hr>';


        echo "Array bagunçado\n";
        $array = [
            "nome" => 'gustavo',
            'idade' => 20,
            'faculdade' => "Unisc",
            'banana',
            'morango',
            'laranja'
        ];

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo '<hr>';


        echo "Adicionando valores a um array\n";
        $array = [
            'banana',
            'morango',
            'laranja'
        ];
        $array[] = 'bergamota';
        $array[5] = 'chupchup';

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo '<hr>';


        echo 'Adicionando valores ao dicionario';
        $array = [

            'nome' => 'gustavo',
            'idade' => 20,
            'estudo' => 'ciencia da computaria'

        ];
        $array['cor da camisa'] = 'azul';
        $array['colega ao lado'] = 'caio';

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo '<hr>';



        $array_multidimensional = [
            'pessoas' => [
                [
                    'Id' => 1,
                    'nome' => 'gustavo',
                    'idade' => 20
                ],
                [
                    'Id' => 2,
                    'nome' => 'ggilberto',
                    'idade' => 20
                ],
                [
                    'Id' => 3,
                    'nome' => 'caio',
                    'idade' => 20
                ]
            ]
        ];


        echo "<pre>";
        print_r($array_multidimensional);
        echo "</pre>";
        echo '<hr>';


        echo "Obtendo valores do array.";

        $array_multidimensional2 = [
            'pessoas' => [
                [
                    'Id' => 1,
                    'nome' => 'gustavo',
                    'idade' => 20
                ],
                [
                    'Id' => 2,
                    'nome' => 'ggilberto',
                    'idade' => 20
                ],
                [
                    'Id' => 3,
                    'nome' => 'caio',
                    'idade' => 20
                ]
            ]
        ];

        echo "<pre>";
        print_r($array_multidimensional2['pessoas'][0]['nome']);
        echo "</pre>";


        ?>

        <h1>
            </p>

            <p>Script para testar diversos tipos de array</p>
</body>

</html>