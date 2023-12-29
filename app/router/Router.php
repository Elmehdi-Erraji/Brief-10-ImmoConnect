<?php

namespace App\Router;

class Router {
    private array $handlers;
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';

    public function view(string $path, string $file): void
    {
        $this->addHandler(self::METHOD_GET, $path, function () use ($file) {
            include_once __DIR__ . "/../views/$file.php";
        });
    }

    public function get(string $path, $handler): void
    {
        $this->addHandler(self::METHOD_GET, $path, $handler);
    }

    public function post(string $path, $handler): void
    {
        $this->addHandler(self::METHOD_POST, $path, $handler);
    }

    private function addHandler(string $method, string $path, $handler): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];

        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;

        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $method === $handler['method']) {
                $callback = $handler['handler'];
                break;
            }
        }

        if (!$callback) {
            header("HTTP/1.0 404 Not Found");
            return;
        }

        call_user_func_array($callback, [array_merge($_GET, $_POST)]);
    }
}
