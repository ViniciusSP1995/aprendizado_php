<?php

$vel = 36;
$velMax = 40;

if($vel < $velMax) {
    echo "Parabéns, você está numa velocidade segura";
} else if ($vel == $velMax) {
    echo "Cuidado! Você está no limte de velocidade";
} else {
    echo "Você foi multado, velocidade acima do permitido";

}