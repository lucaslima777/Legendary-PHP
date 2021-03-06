<?php

try {
    $pdo = new PDO('mysql:dbname=impacta_db;port=3306', 'root', 'impacta');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 2;

    $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id > ?');
    $stmt->bindValue(1, $id);
    $stmt->execute();

    while($produto = $stmt->fetch(PDO::FETCH_OBJ)){
        echo $produto->nome . ' | ' . $produto->preco . ' | ' . $produto->descricao . '<br>';
    }
    
} catch (\PDOException $epdo) {
    echo $epdo->getMessage();
}

?>