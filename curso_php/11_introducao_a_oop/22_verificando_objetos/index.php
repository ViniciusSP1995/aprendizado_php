<?php


class Humano {
    public function falar() {
        echo "Olá";
    }
}

$vinicius = new Humano;

$teste = 10;

if(is_object($vinicius)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}


if(is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($vinicius) . "<br>";

if(method_exists($vinicius, "falar")) {
    echo "Método existe <br>";
} else {
    ECHO "Método não existe <br>";
}


if(method_exists($vinicius, "asd")) {
    echo "Método existe <br>";
} else {
    ECHO "Método não existe <br>";
}