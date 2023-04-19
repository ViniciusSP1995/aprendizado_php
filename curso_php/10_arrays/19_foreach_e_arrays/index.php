<?php


$vinicius = [
 'nome' =>  'Vinícius',
 'idade' => 27,
 'profissao' => "Programador"
];

$alexia = [
    'nome' =>  'Alexia',
    'idade' => 25,
    'profissao' => "Engenheira Civil"
   ];


   foreach($vinicius as $carac => $value) {

    echo "$carac => $value <br>";

   }


   foreach($alexia as $carac => $value) {

    echo "$carac => $value <br>";
    
   }