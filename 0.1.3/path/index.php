<?php

require 'ValidationError.php';
require 'Validation.php';

try{
    
    Validation::max('Lucas', 1);

} catch(\ValidationError $error){
    echo 'Tamanho maior do que o permitido';
}

?>