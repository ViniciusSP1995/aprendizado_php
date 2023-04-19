<?php

    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $vinicius = new Pessoa;

    $vinicius -> falar();
    $vinicius -> falar();

    $joao = new Pessoa;

    $joao -> falar();

    $vinicius -> somar(2,2);

    $joao -> somar(4,2);