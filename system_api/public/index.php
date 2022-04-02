<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App;

include "file.php";

$app->get('/api/{id}', function (Request $request, Response $response){
    $finger = $request->getAttribute('id');
    // $response->getBody()->write("Hello, $finger");

    setFingerprint($finger);

    return $response;

});
 
//Students Routes
// require '../src/routes/students.php';
$app->run();

?>