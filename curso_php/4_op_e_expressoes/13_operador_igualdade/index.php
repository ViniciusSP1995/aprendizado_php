<?php

    if(3 == 3) {
        echo "Comparação verdadeira <br>";
    }

    if(3 == 4) {
        echo "Comparação verdadeira <br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b) {
        echo "Comparação verdadeira 3<br>";
    }

    if($a == $c) {
        echo "Comparação verdadeira 4<br>";
    }


    $nome = "Vin´cius";
    $nomeDoSistema = "Vinícius";

    if($nome == $nomeDoSistema) {
        echo "O nome coincide <br>";
    }

    if($nome = $nomeDoSistema) {
        echo "O nome coincide 2<br>";
    }