<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



$app->get('/home[/{new_name}]', function (Request $request, Response $response) {
    $controller = $this->get('App\Controller\HomeController');
    return $controller->getHome($request, $response);
});