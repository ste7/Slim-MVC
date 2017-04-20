<?php
require '../app/libs/config.php';
require '../app/libs/database.php';
$app = new \Slim\App($config_slim);

$container = $app->getContainer();


$container['view'] = function ($c){
    $view = new \Slim\Views\Twig('../app/views', [
        'cache' => false,
        'debug' => true,
        'auto_reload' => true
    ]);

    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;
};

$container['App\Controller\HomeController'] = function ($c){
    return new \App\Controllers\HomeController($c['view']);
};

require '../app/routes/route.php';