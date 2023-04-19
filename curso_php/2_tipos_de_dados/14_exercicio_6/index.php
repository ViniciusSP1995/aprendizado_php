<?php
    $carro = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto-solar' => true,
        'velocidade-maxima' => 300,
        'blindado' => false
    ];


    print_r($carro);

    $marca = $carro['marca'];

    $velocidade_maxima = $carro['velocidade-maxima'];

    echo "<br>";

    echo "O carro é da $marca e atngio no máximo $velocidade_maxima km/h";