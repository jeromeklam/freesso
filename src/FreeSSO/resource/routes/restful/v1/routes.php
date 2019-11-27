<?php
$localRoutes = [
    /**
     * SignIn standard
     */
    'freesso.user.signin' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/signin',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'signIn',
        'auth'       => \FreeFW\Router\Route::AUTH_OUT,
        'middleware' => []
    ],
    /**
     * SignOut standard
     */
    'freesso.user.signout' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/signout',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'signOut',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => []
    ],
    /**
     * Check and touch session
     */
    'freesso.user.check' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/check',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'check',
        'auth'       => \FreeFW\Router\Route::AUTH_BOTH,
        'middleware' => []
    ]
];
return $localRoutes;
