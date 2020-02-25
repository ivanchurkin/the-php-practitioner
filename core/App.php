<?php

namespace App\Core;

class App
{
    protected static array $registry = [];

    public static function bind(string $key, $value): void
    {
        static::$registry[$key] = $value;
    }

    public static function get(string $key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("Not found $key in App registry");
        }

        return static::$registry[$key];
    }
}