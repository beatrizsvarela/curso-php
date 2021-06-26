<?php

 $altura = 1.57;
 $peso = 50;

 $imc = $peso / ( $altura ** 2 );

if ($imc < 18.5){
    echo "Você está abaixo do peso" . PHP_EOL;
} elseif ($imc > 25){
    echo "Você está com sobrepeso" . PHP_EOL;
} else {
    echo "Você está com peso normal" . PHP_EOL;
}

