<?php
require __DIR__ . '/vendor/autoload.php';

use Core\Router;

$app = include 'config.php';

// Routing
$routes = include 'routes.php';
$router = Router::make($routes);
$router->route($_SERVER['REQUEST_URI']);
