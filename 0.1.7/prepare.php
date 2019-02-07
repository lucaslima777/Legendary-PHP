<?php

try {
    $pdo = new PDO('mysql:dbname=impacta_db;port=3306', 'root', 'impacta');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('
    INSERT INTO produtos 
        (nome, preco, descricao)
    VALUES (?, ?, ?)');

/* 
    $stmt->bindValue(1, 'Tablet');
    $stmt->bindValue(2, 2000.00);
    $stmt->bindValue(3, 'Best Tablet 2019');
 */
   var_dump($stmt->execute([
       'Smart TV',
       500.00,
       'Samsung Smart TV'
   ]));

    
} catch (\PDOException $epdo) {
    echo $epdo->getMessage();
}
?>