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

$app->get('/api/books', function() {
    $jsonDummy = json_encode($this->get('settings')['json_dummy']);
    echo $jsonDummy;
});

$app->post('/login', function(Request $request, Response $response, array $args) {
    $username = isset($request->getParsedBody()['username']) ? ($request->getParsedBody()['username']) : '';
    $password = isset($request->getParsedBody()['password']) ? ($request->getParsedBody()['password']) : '';
    $secret = $this->get('settings')['secret'];

    // Check credentials, if all OK, JWT will by created
    if($username=='oscar'){
        $expiredTime = 6000;
        $time = round(microtime(true)) + $expiredTime;
        $token = array(
            "username" => $username,
            "exp" => $time
        );

        $jwt = JWT::encode($token, $secret);
        
        print json_encode(array(
            'msg' => 'Login correcto',
            'token' => $jwt
        ));
    } else {
        print json_encode(array(
            'msg' => 'Credenciales incorrectas',
            'token' => ''
        ));
    }

});