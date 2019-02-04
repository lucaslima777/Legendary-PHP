<?php

$clientes = [
    [
        'nome' => 'Lucas Lima',
        'email' => 'lucas@gmail.com',
        'telefone' => '11 90000-0000'
    ], 
    [
        'nome' => 'Jade Lima',
        'email' => 'jade@gmail.com',
        'telefone' => '11 91234-5678'
    ],
    [
        'nome' => 'Diana Lima',
        'email' => 'diana@gmail.com',
        'telefone' => '11 98765-4321'
    ]
];

$clientes_json = json_encode($clientes); //Convert Array to Json

var_dump($clientes);
var_dump($clientes_json);

?>