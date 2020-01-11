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
    ],
    /**
     * ########################################################################
     * User
     * ########################################################################
     */
    'freesso.user.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.user.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::User'
            ]
        ]
    ],
    'freesso.user.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user/:user_id',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['brokers', 'brokers.broker', 'groups', 'groups.group']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::User'
            ]
        ]
    ],
    'freesso.user.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user/:user_id',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::Client'
            ]
        ]
    ],
    'freesso.user.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::User'
            ]
        ]
    ],
    'freesso.user.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/user/:user_id',
        'controller' => 'FreeSSO::Controller::User',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
    ],
];
return $localRoutes;
