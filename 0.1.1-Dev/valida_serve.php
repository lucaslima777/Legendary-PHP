<?php

$version = phpversion();


echo "Digite a Versao: \n";
$version_raw = trim(fgets(STDIN));

if(is_null($version_raw)){
    echo phpversion();
} else if($version_raw < 5.4){
    echo "Indisponivel Servidor embutido";
} else{
    echo "Disponivel Servidor embutido";
}
?>