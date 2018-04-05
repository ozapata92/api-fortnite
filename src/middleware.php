<?php
// Application middleware

use \Firebase\JWT\JWT;

$mw = function ($request, $response, $next) {
    $secret = "df43%hhh76/((xxXDc1";
    $authHeader = $request->getHeader('Authorization');
    $reqPath = $request->getUri()->getPath();

    if($reqPath == '/login'){
        $response = $next($request, $response);
        return $response;
    } else {
        // validar jwt
        if(isset($authHeader) && sizeof($authHeader==1)){
            try {
                $authHeaderDecoded = JWT::decode($authHeader[0], $secret,array('HS256'));
                echo json_encode($authHeaderDecoded);
                $response = $next($request, $response);
            }  catch(Firebase\JWT\SignatureInvalidException $e){
                // Suplantacion
                $response->getBody()->write('No me robes ' . $authHeader[0]);
            } catch(UnexpectedValueException $e){
                // 401 Unauthorized - Expired
                $response->getBody()->write('401 Unauthorized - Token expirado' . $authHeader[0]);
            } catch (Exception $e){
                // 401 Unauthorized
                $response->getBody()->write('401 Unauthorized ' . $authHeader[0]);
            }
        }
        return $response;
    }

};