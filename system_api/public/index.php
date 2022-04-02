<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

// $app->addErrorMiddleware(true, true, true);

// $app->setBasePath('/system_api');
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

    return $response;
});


//Students Routes
// require $_SERVER["DOCUMENT_ROOT"].'/voters/system_api/src/routes/students.php';

$app->run();
