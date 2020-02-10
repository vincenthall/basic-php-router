<?php

namespace Core;

class Router
{
    protected $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public static function make($routes)
    {
        return new self($routes);
    }
    public function route($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $tokens = explode("@", $this->routes[$uri]);
            $class = 'Core\Controllers\\' . $tokens[0];
            $controller = new $class;
            $view = $controller->{$tokens[1]}();
            $view = require "views/" . $view;
            return $view;
        } else {
            return http_response_code(404);
        };
    }
}
