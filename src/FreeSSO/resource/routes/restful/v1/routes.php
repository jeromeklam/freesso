<?php
$localRoutes = [
    /**
     * Login standard
     */
    'freesso.user.login' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/login',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'signIn',
        'auth'       => \FreeFW\Router\Route::AUTH_OUT,
        'middleware' => []
    ]
];
return $localRoutes;
