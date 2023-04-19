<?php

$j = 0;

$teste = "Vinícius";

do {
    echo "Testando do while $j";

    if($j == 2) {
        echo "$teste <br>";
    }

    $j++;
} while($j < 10);

$i = 10;

do {
    
    echo "Testando do while 2 $i <br>";

    $i--;

} while ($i > 0);