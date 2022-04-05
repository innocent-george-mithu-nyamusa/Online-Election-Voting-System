<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

include "file.php";

$app->get('/api/{id}', function (Request $request, Response $response) {
    global $pdo;
    $finger = $request->getAttribute('id');

    $response->getBody()->write("id is:, $finger");

    // setFingerprint($finger);
    $pdo->prepare("INSERT INTO temp(temp_id) VALUES ('$finger')");
    return $response;
});

//Students Routes

$app->run();
