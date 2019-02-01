<?php

require 'ValidationError.php';
require 'Validation.php';

try{
    
    Validation::max('Lucas', 2);

} catch(\ValidationError $error){
    echo $error->getMessage();
}

?>