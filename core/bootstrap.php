<?php

$routes = require_once __DIR__ . "/../app/routes.php";
$route = new \Core\Route($routes);
$route = $route->getUrl();

/*require_once '../app/routes.php';
$route = new Route($routes);*/

?>