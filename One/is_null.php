<?php

$valor1 = $argv[1] ?? null;
$valor2 = $argv[2] ?? null;

if(is_null($valor1) || is_null($valor2)){
    exit('Digite dois valores');
}

$total = $valor1 ** $valor2;

echo $total;


?>