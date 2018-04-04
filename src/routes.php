<?php

use Slim\Http\Request;
use Slim\Http\Response;
/*
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/

// Routes

$app->get('/test', function (Request $request, Response $response, array $args) {

    var_dump($request);
    //var_dump($request->headers);
});

$app->get('/books', function() {
    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
});