<?php

try {

    $pdo = new PDO('mysql:dbname=impacta_db;port=3306', 'root', 'impacta');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->beginTransaction();

    $pdo->exec("
        INSERT INTO produtos 
            (nome, preco, descricao)
        VALUES ('Produto 1', 1000.00, 'Monitor 1')    
    ");

    $pdo->exec("
        INSERT INTO produtos 
            (nome, preco, descricao)
        VALUES ('Produto 2', 2000.00, 'Monitor 2')    
    ");

    $pdo->commit();

} catch (\PDOException $e) {

    $pdo->rollBack();
    echo $e->getMessage();

}