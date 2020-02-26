<?php

$router->get('/', ['middleware' => 'auth:api', function () use ($router) {
    return $router->app->version();
}]);
