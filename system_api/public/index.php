<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require ($_SERVER["DOCUMENT_ROOT"].'/voters/system_api/vendor/autoload.php');

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    
    return $response;
});

//Students Routes
// require $_SERVER["DOCUMENT_ROOT"].'/voters/system_api/src/routes/students.php';

$app->run();
?>