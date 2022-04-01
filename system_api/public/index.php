<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


require __DIR__ . '/../vendor/autoload.php';

$app = Slim\Factory\AppFactory::create();

$app->get('/hello/{name}', function (Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    
    return $response;
});

//Students Routes
require $_SERVER["DOCUMENT_ROOT"].'/voters/system_api/src/routes/students.php';

$app->run();
