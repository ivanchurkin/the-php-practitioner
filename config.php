<?php

return [
    'database' => [
        'connection' => 'mysql:host=db.local',
        'name' => 'todos',
        'user' => 'user',
        'password' => '1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];