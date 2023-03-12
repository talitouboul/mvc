<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Initialisation de certaines choses
use App\Controller\ContactController;
use App\Controller\IndexController;
use App\Routing\RouteNotFoundException;
use App\Routing\Router;

// Appeler un routeur pour lui transférer la requête
$router = new Router();
$router->addRoute(
  'homepage',
  '/',
  'GET',
  IndexController::class,
  'home'
);
$router->addRoute(
  'contact_page',
  '/contact',
  'GET',
  ContactController::class,
  'contact'
);

try {
  $router->execute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (RouteNotFoundException $ex) {
  http_response_code(404);
  echo "Page not found";
}

var_dump($router);
var_dump($_SERVER['REQUEST_URI']);
