<?php

/** @var QueryBuilder $db */
$db = App::get('database');

$db->insert('names', [
    'name' => $_POST['name']
]);

header('Location: /');