<?php

class Router
{
    protected array $routes;

    public static function load(string $file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function define(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct(string $uri): string {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('Could not define route for this URI');
    }
}