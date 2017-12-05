<?php

use Phroute\Phroute\RouteCollector;
use App\PagesController;

$router = new RouteCollector();

$router->get('{id}?', function ($id="home") {
    return PagesController::showPage($id);
});


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    $response = PagesController::showPage('404');

} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
    $response = PagesController::showPage('404');
}

// Print out the value returned from the dispatched function
echo $response;