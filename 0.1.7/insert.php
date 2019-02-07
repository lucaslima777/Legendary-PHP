<?php

try {
    $pdo = new PDO('mysql:dbname=impacta_db;port=3306', 'root', 'impacta');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $pdo->exec("
    INSERT INTO produtos 
        (nome, preco, descricao)
    VALUES ('SmartWatch', 5000.00, 'Ultra Watch')");

    var_dump($result);
    
} catch (\PDOException $epdo) {
    echo $epdo->getMessage();
}


?>