<?php

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function connectToDb(): PDO {
    try {
        return new PDO('mysql:host=db.local;dbname=todos', 'user', '1');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks(PDO $pdo): array {
    $statement = $pdo->prepare('select * from tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}