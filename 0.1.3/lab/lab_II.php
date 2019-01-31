<?php

require __DIR__ . '/vendor/autoload.php';

use Respect\Validation\Validator as v;

$validacao = v::stringType()->length(7)->startsWith('Imp');

if($validacao->validate('Impacta')){
    echo 'Correto';
}else{
    echo 'Incorreto';
}

?>