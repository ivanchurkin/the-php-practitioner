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

    public function get(string $path, string $controller): void
    {
        $this->routes['GET'][$path] = $controller;
    }

    public function post(string $path, string $controller): void
    {
        $this->routes['POST'][$path] = $controller;
    }

    public function direct(string $uri, string $method): void
    {
        if (! array_key_exists($uri, $this->routes[$method])) {
            throw new Exception('Could not define route for this URI');
        }

        $this->callAction(
            ...explode('@', $this->routes[$method][$uri])
        );
    }

    protected function callAction(string $controller, string $action)
    {
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception("$controller does not respond to the $action action.");
        }

        return $controller->$action();
    }
}