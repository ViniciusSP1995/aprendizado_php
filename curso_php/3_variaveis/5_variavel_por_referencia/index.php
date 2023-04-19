<?php

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "Atribuição após ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuição após ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Vinícius";

    $nome2=& $nome;

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "João";

    echo "Atribuição após ref3";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";