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
use \Firebase\JWT\JWT;

$app->get('/test', function (Request $request, Response $response, array $args) {

    $response->getBody()->write(' Hello ');
    
});

$app->get('/books', function() {
    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
});

$app->post('/login', function(Request $request, Response $response, array $args) {
    $username = isset($request->getParsedBody()['username']) ? ($request->getParsedBody()['username']) : '';
    $password = isset($request->getParsedBody()['password']) ? ($request->getParsedBody()['password']) : '';

    // Check credentials
    if($username=='oscar'){
        $token = array(
            "username" => $username,
            "password" => $password
        );
        $jwt = JWT::encode($token, 'secret_key');
        echo $jwt;
    } else {
        //$jwt = JWT::encode($token, 'secret_keyX');
    }

});