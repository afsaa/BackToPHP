<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'curso-php',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/RepasoPHP/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);
$map->get('addJobs', '/RepasoPHP/jobs/add', '../addJob.php');

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printElement($elements)
{
    foreach ($elements as $element) {
        echo "<h3>{$element->title}</h3>";
        echo "<h4>{$element->description}</h4>";
        echo "<h4>{$element->projectRole}</h4>";
        echo "<br>";
    }
}

if (!$route) {
    echo 'No se encontró la ruta';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $controller->$actionName();
}
