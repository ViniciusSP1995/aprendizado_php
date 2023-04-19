<?php

class Humano {

}

class Animal {

}

class Professor extends Humano {

}

$turca = new Animal;

$marcos = new Humano;

if($marcos instanceof Humano) {
    echo "Marcos é um humano <br>";
}

if($turca instanceof Humano) {
    echo "Turca é um humano <br>";
} else {
    echo "Turca não é um humano <br>";
}

$pedro = new Professor;


if($pedro instanceof Professor) {
    echo "Pedro é um Professor <br>";
} else {
    echo "Pedro não é um humano <br>";
}

if($pedro instanceof Humano) {
    echo "Pedro é um humano <br>";
} else {
    echo "Pedro não é um Professsor <br>";
}

if($turca instanceof Professor) {
    echo "Turca é um professor <br>";
} else {
    echo "Turca não é um professor <br>";
}
