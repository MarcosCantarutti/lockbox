<?php

namespace Core;

class Route
{
    public $routes = [];

    public function addRoute($httpMethod, $uri, $controller)
    {

        if (is_string($controller)) {
            $data  = [
                'class' => $controller,
                'method' =>  '__invoke'
            ];
        } else if (is_array($controller)) {
            $data =  [
                'class' => $controller[0],
                'method' =>  $controller[1]
            ];
        }

        $this->routes[$httpMethod][$uri] = $data;
    }

    public function get($uri, $controller)
    {
        $this->addRoute('GET', $uri, $controller);
        return $this;
    }

    public function post($uri, $controller)
    {
        $this->addRoute('POST', $uri, $controller);
        return $this;
    }

    public function run()
    {
        $uri = '/' . trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        if (!isset($this->routes[$httpMethod][$uri])) {
            http_response_code(404);
            echo "404 - Not Found";
            exit;
        }

        $routeInfo = $this->routes[$httpMethod][$uri];
        $class = $routeInfo['class'];
        $method = $routeInfo['method'];

        $controller = new $class();
        $controller->$method();
    }
}
