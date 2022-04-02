<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/api/{id}', function (Request $request, Response $response){
    $finger = $request->getAttribute('id');
    $response->getBody()->write("Hello, $finger");
    
    return $response;
});
 
//Students Routes
// require '../src/routes/students.php';
$app->run();
?>