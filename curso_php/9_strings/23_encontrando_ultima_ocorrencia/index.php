<?php

$str = "Testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste"); // ultima palavra

echo "$palavra <br>";

$palavra2 = strpos($str, "teste"); // primera palavra

echo "$palavra2 <br>";

if(strrpos($str, "Java") === false) {
    echo "A palavra Java não foi encontrada <br>";
}

$p = substr($str, strpos($str, "teste"), 5);

echo "$p <br>";