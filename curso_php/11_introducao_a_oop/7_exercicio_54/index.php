<?php

class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {
        echo "A pessoa andou $m metros <br>";
    }

}

$vinicius = new Pessoa;

$vinicius -> nome = "Vinícius";
$vinicius -> idade = 27;

echo "O nome dele é $vinicius->nome e tem $vinicius->idade anos <br>";

$vinicius->andar(20);

$joaquim = new Pessoa;

$joaquim->nome = "Joaquim";
$joaquim->idade = 32;

echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";

$joaquim->andar(30);