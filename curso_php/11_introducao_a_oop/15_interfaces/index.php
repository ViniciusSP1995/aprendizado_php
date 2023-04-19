<?php

interface Caracteristicas {
    const nome = "Matheus";

    public function falar();
}

class Humano implements Caracteristicas {

    public $idade = 28;

    public function falar() {
        echo "Olá mundo! <br>";
    }

    public function dizerNome() {

        echo "Meu nome é " . self::nome . "<br>";
    }
}

$vinicius = new Humano;

$vinicius->falar();

$vinicius->dizerNome();

