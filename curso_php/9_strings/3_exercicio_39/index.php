<?php

    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCarros($arr) {
        
        $arrItensCarros = [];

        foreach($arr as $item => $preco) {

            if($preco > 10) {
                array_push($arrItenCarros, $item);
            }
        }

        return $arrItensCarros;
    }

    $novoArr = itensCarros($arr);

    print_r($novoArr);