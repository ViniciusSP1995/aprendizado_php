<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$c = -78.1;

echo $c;
echo "<br>";

if(is_float($c)) {
    echo "Sim, podemos ter floats negativos";
}


if(is_int($c)) { //false
    echo "Sim, esse número é um int";
}