<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);


$fingreprint;


function setFingerprint(string $finger) {
    global $fingreprint;

    $fingreprint = $finger;
}

function getFingerprint(){
    global $fingreprint;

    return $fingreprint;
}

$app->get('/hello/{name}', function (Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    
    return $response;
});



$app->get('/api/{id}', function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    $fingreprint = htmlspecialchars($id);
    

    setFingerprint($fingreprint);
});


//Students Routes
// require $_SERVER["DOCUMENT_ROOT"].'/voters/system_api/src/routes/students.php';

$app->run();
