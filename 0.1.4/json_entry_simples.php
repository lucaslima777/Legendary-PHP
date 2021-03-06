<?php

$json = <<<JSON
{
    "data": [
        {
            "nome": "Lucas Lima",
            "email": "lucas@gmail.com",
            "telefone": "(11)91234-5678"
        },
        {
            "nome": "Jade Lima",
            "email": "jade@gmail.com",
            "telefone": "(11)98765-4321"
        },
        {
            "nome": "Diana Lima",
            "email": "diana@gmail.com",
            "telefone": "(11)94321-8765"
        }
    ]
}
JSON;

$jsonPHP = json_decode($json);

//check json error
echo json_last_error_msg();

var_dump($jsonPHP);//GET All Json

var_dump($jsonPHP->data);//GET data

var_dump($jsonPHP->data[1]->nome);//GET nome in position [1]

foreach($jsonPHP->data as $cliente){
    echo $cliente->nome . ' - ';
}

?>