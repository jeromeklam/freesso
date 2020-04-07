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
        'middleware' => [],
        'include'    => [
            'default' => ['lang', 'config', 'realms']
        ],
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
     * Save user datas
     */
    'freesso.user.save' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::User',
        'url'        => '/v1/sso/save',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'save',
        'auth'       => \FreeFW\Router\Route::AUTH_BOTH,
        'middleware' => [],
        'include'    => [
            'default' => ['lang', 'config', 'realms']
        ],
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
        'middleware' => [],
        'include'    => [
            'default' => ['lang', 'config', 'realms']
        ],
    ],
    /**
     * AskPassword standard
     */
    'freesso.user.askpassword' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/ask-password',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'askPassword',
        'auth'       => \FreeFW\Router\Route::AUTH_NONE,
        'middleware' => []
    ],
    /**
     * updatePassword standard
     */
    'freesso.user.updatepassword' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/update-password',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'changePassword',
        'auth'       => \FreeFW\Router\Route::AUTH_BOTH,
        'middleware' => []
    ],
    /**
     * ChangePassword standard
     */
    'freesso.user.changepassword' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/change-password',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'changePassword',
        'auth'       => \FreeFW\Router\Route::AUTH_NONE,
        'middleware' => []
    ],
    /**
     * updateConfig standard
     */
    'freesso.user.updateconfig' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'url'        => '/v1/sso/update-config',
        'controller' => 'FreeSSO::Controller::Sso',
        'function'   => 'updateConfig',
        'auth'       => \FreeFW\Router\Route::AUTH_BOTH,
        'middleware' => []
    ],
    /**
     * ########################################################################
     * GroupType
     * ########################################################################
     */
    'freesso.grouptype.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.grouptype.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type',
        'controller' => 'FreeSSO::Controller::GroupType',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::GroupType'
            ]
        ]
    ],
    'freesso.grouptype.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type/:grpt_id',
        'controller' => 'FreeSSO::Controller::GroupType',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::GroupType'
            ]
        ]
    ],
    'freesso.grouptype.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type/:grpt_id',
        'controller' => 'FreeSSO::Controller::GroupType',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::GroupType'
            ]
        ]
    ],
    'freesso.grouptype.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type',
        'controller' => 'FreeSSO::Controller::GroupType',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::GroupType'
            ]
        ]
    ],
    'freesso.grouptype.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::GroupType',
        'url'        => '/v1/sso/group_type/:grpt_id',
        'controller' => 'FreeSSO::Controller::GroupType',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
    ],
    /**
     * ########################################################################
     * JobFunction
     * ########################################################################
     */
    'freesso.jobfunction.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.jobfunction.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::JobFunction'
            ]
        ]
    ],
    'freesso.jobfunction.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function/:fct_id',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::JobFunction'
            ]
        ]
    ],
    'freesso.jobfunction.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function/:fct_id',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::JobFunction'
            ]
        ]
    ],
    'freesso.jobfunction.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::JobFunction'
            ]
        ]
    ],
    'freesso.jobfunction.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::JobFunction',
        'url'        => '/v1/sso/job_function/:fct_id',
        'controller' => 'FreeSSO::Controller::JobFunction',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
    ],
    /**
     * ########################################################################
     * Domain
     * ########################################################################
     */
    'freesso.domain.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.domain.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::Domain'
            ]
        ]
    ],
    'freesso.domain.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain/:dom_id',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Domain'
            ]
        ]
    ],
    'freesso.domain.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain/:dom_id',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::Domain'
            ]
        ]
    ],
    'freesso.domain.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Domain'
            ]
        ]
    ],
    'freesso.domain.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::Domain',
        'url'        => '/v1/sso/domain/:dom_id',
        'controller' => 'FreeSSO::Controller::Domain',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
    ],
    /**
     * ########################################################################
     * Broker
     * ########################################################################
     */
    'freesso.broker.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.broker.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'domain']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::Broker'
            ]
        ]
    ],
    'freesso.broker.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker/:brk_id',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'domain']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Broker'
            ]
        ]
    ],
    'freesso.broker.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker/:brk_id',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'domain']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::Broker'
            ]
        ]
    ],
    'freesso.broker.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'domain']
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Broker'
            ]
        ]
    ],
    'freesso.broker.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::Broker',
        'url'        => '/v1/sso/broker/:brk_id',
        'controller' => 'FreeSSO::Controller::Broker',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
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
        'include'    => [
            'default' => ['lang']
        ],
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
            'default' => ['brokers', 'brokers.broker', 'groups', 'groups.group', 'lang']
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
            'default' => ['brokers', 'brokers.broker', 'groups', 'groups.group', 'lang']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::User'
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
            'default' => ['brokers', 'brokers.broker', 'groups', 'groups.group', 'lang']
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
    /**
     * ########################################################################
     * Group
     * ########################################################################
     */
    'freesso.group.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.group.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group_type', 'country', 'lang', 'parent']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::Group'
            ]
        ]
    ],
    'freesso.group.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group/:grp_id',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group_type', 'country', 'lang', 'parent']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Group'
            ]
        ]
    ],
    'freesso.group.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group/:grp_id',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group_type', 'country', 'lang', 'parent']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::Group'
            ]
        ]
    ],
    'freesso.group.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group_type', 'country', 'lang', 'parent']
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::Group'
            ]
        ]
    ],
    'freesso.group.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::Group',
        'url'        => '/v1/sso/group/:grp_id',
        'controller' => 'FreeSSO::Controller::Group',
        'function'   => 'removeOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '204' => [
            ]
        ]
    ],
    /**
     * ########################################################################
     * GroupUser
     * ########################################################################
     */
    'freesso.groupuser.autocomplete' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user/autocomplete/:search',
        'controller' => 'FreeSSO::Controller::GroupUser',
        'function'   => 'autocomplete',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT
            ]
        ]
    ],
    'freesso.groupuser.getall' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user',
        'controller' => 'FreeSSO::Controller::GroupUser',
        'function'   => 'getAll',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'user', 'job_function']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_LIST,
                'model' => 'FreeSSO::Model::GroupUser'
            ]
        ]
    ],
    'freesso.groupuser.getone' => [
        'method'     => \FreeFW\Router\Route::METHOD_GET,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user/:gru_id',
        'controller' => 'FreeSSO::Controller::GroupUser',
        'function'   => 'getOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => ['group', 'user', 'job_function']
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::GroupUser'
            ]
        ]
    ],
    'freesso.groupuser.updateone' => [
        'method'     => \FreeFW\Router\Route::METHOD_PUT,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user/:gru_id',
        'controller' => 'FreeSSO::Controller::GroupUser',
        'function'   => 'updateOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '200' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSso::Model::GroupUser'
            ]
        ]
    ],
    'freesso.groupuser.createone' => [
        'method'     => \FreeFW\Router\Route::METHOD_POST,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user',
        'controller' => 'FreeSSO::Controller::GroupUser',
        'function'   => 'createOne',
        'auth'       => \FreeFW\Router\Route::AUTH_IN,
        'middleware' => [],
        'include'    => [
            'default' => []
        ],
        'results' => [
            '201' => [
                'type'  => \FreeFW\Router\Route::RESULT_OBJECT,
                'model' => 'FreeSSO::Model::GroupUser'
            ]
        ]
    ],
    'freesso.groupuser.deleteone' => [
        'method'     => \FreeFW\Router\Route::METHOD_DELETE,
        'model'      => 'FreeSSO::Model::GroupUser',
        'url'        => '/v1/sso/group_user/:gru_id',
        'controller' => 'FreeSSO::Controller::GroupUser',
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
