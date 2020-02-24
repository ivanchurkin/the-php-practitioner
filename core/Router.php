<?php

class Router
{
    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load(string $file): Router
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function get(string $path, string $controller): void {
        $this->routes['GET'][$path] = $controller;
    }

    public function post(string $path, string $controller): void {
        $this->routes['POST'][$path] = $controller;
    }

    public function direct(string $uri, string $method): string {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        throw new Exception('Could not define route for this URI');
    }
}