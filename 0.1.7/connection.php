<?php

try {
    $pdo = new PDO('mysql:dbname=mysql;port=3306', 'root', 'impacta');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (\PDOException $epdo) {
    echo $epdo->getMessage();
}

?>
