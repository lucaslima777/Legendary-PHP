<?php

try {
    $pdo = new PDO('mysql:dbname=impacta_db;port=3306', 'root', 'impacta');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('
    INSERT INTO produtos 
        (nome, preco, descricao)
    VALUES (:nome, :preco, :descricao)');

    $stmt->bindValue(':nome', 'Mouse Gamer', PDO::PARAM_STR);
    $stmt->bindValue(':preco', '120.00', PDO::PARAM_INT);
    $stmt->bindValue(':descricao', 'Mouse Apple', PDO::PARAM_STR);

    $stmt->execute();
    
} catch (\PDOException $epdo) {
    echo $epdo->getMessage();
}
?>