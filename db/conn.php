<?php

    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        echo 'Hello db';
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }

