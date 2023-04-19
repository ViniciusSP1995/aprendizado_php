<?php

$arr = ['banana', 'maçã', 'batata', 'pera', 'mamão'];

if(in_array("batata", $arr)) {
    echo "Há o item bata no array <br>";
} else {
    echo "Não há batata no array <br>";
}

$b = 'banana';

if(in_array($b, $arr)) {
    echo "Há o item bata no array <br>";
} else {
    echo "Não há batata no array <br>";
}

if(in_array('teste', $arr)) {
    echo "Há o item bata no array <br>";
} else {
    echo "Não há batata no array <br>";
}