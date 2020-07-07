<?php

require_once 'routes.php';

\Slim\Slim::registerAutoloader();

$logado = false;

$app = new \Slim\Slim();

$app->get('/', function () {
    $dt = date('d/m/Y H:i:s');
    echo "Hello, World. Hora.: ${dt}";
});

$app->run();