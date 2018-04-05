<?php
// Application middleware

use \Firebase\JWT\JWT;

$mw = function ($request, $response, $next) {
    $authHeader = $request->getHeader('Authorization');
    $reqPath = $request->getUri()->getPath();

    if($reqPath == '/login'){
        $response = $next($request, $response);
        return $response;
    } else {
        // validar jwt
        if(isset($authHeader) && sizeof($authHeader==1)){
            try {
                $authHeaderDecoded = JWT::decode($authHeader[0], 'secret_key');
                echo $authHeader;
                $response = $next($request, $response);
            } catch(UnexpectedValueException $e){
                // 401 Unauthorized
                $response->getBody()->write(' 401 Unauthorized ' . $authHeader[0]);
                $response->getBody()->write('<br>'.$e);
            }
        }
        return $response;
    }

};

$mwx = function ($request, $response, $next) {
    $userHeader = $request->getHeader('Authorization');
    echo json_encode($userHeader);
    $response = $next($request, $response);
    // Else
    return $response;
};