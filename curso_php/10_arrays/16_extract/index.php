<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo $cor . "<br>";
echo $forma . "<br>";
echo $material . "<br>";

$nome = "João";

$pessoa = [
    'nome' => "Vinícius",
    'idade' => 27
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";