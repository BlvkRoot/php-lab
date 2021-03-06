<?php
    declare(strict_types=1);

    $pdo = null;

    try {
        $dsn = 'mysql:host=localhost;dbname=test_bd';
        $pdo = new PDO($dsn, 'root', '');

    } catch (Exception $e) {
        echo $e->getMessage();

        die();
    }

    return $pdo;