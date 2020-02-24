<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=db.local;dbname=todos', 'user', '1');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}