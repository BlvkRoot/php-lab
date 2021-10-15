<?php
    declare(strict_types=1);

    $pdo = require('connect.php');
    $sql = 'insert into products(descricao) values(?)';

    $prepare = $pdo->prepare($sql); // preparar a query

    $prepare->bindParam(1, $_GET['descricao']); // pegar os dados
    $prepare->execute(); //persistir os dados

    echo $prepare->rowCount();