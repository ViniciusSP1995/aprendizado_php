<?php

$pessoa = [
    'nome' => 'Vinícius',
    'idade' => 27,
    'profissao' => 'Programador',
    'graduacao' => 'Administração'
];

$maiorIdade = 18;

//desafio
if($pessoa['idade'] >= $maiorIdade) {
    echo "A pessoa é maior de idade";
}