<?php

namespace Softadastra\Core\Router;

use Softadastra\Exception\NotFoundException;

class Router
{
    public $url;
    public $routes = [];

    public function __construct($url)
    {
        $this->url = trim($url, '/');
    }

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run()
    {
        try {
            foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
                if ($route->matches($this->url)) {
                    $response = $route->execute();
                    if ($response instanceof \Softadastra\Http\Response) {
                        $response->send();
                    }
                    return;
                }
            }
            throw new NotFoundException("Page demandée est introuvable");
        } catch (NotFoundException $e) {
            $response = new \Softadastra\Http\Response('<html><body><h1>404 Not Found</h1><p>' . $e->getMessage() . '</p></body></html>', 404, ['Content-Type' => 'text/html']);
            $response->send();
        }
    }
}
