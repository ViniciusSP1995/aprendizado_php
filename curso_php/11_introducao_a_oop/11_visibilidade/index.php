<?php

class Car {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas; 
    }


    public function peliculaDeFabrica($pelicula) {
        $this->vidro = $pelicula;
    }

}

class Mecanico {
    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$vinicius = new Mecanico;

$vinicius->alterarRodas($carro);

echo $carro->rodas . "<br>";

//Não pod alterar porque é privado
//$vinicius->colocarPelicula($carro, "G20");

//$vinicius->peliculaDeFabrica("G10");

echo $carro->getVidro() . "<br>";

//não pode ser acessada
//echo $carro->portas . "<br>";

echo $carro->getPortas() . "<br>";
