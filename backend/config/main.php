<?php

    $params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/../../common/config/params-project.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
    );

    return [
        'id'                  => 'app-backend',
        'basePath'            => dirname(__DIR__),
        'controllerNamespace' => 'backend\controllers',
        'bootstrap'           => ['log'],
        'modules'             => [],
        'components'          => [
            'urlManager'   => [
                'rules' => array(
                    //custom url for backend
                    'user/update-administrator/<username:[a-zA-Z0-9-]+>/' => 'user/update-administrator',
                    'user/view-administrator/<username:[a-zA-Z0-9-]+>/'   => 'user/view-administrator',
                    'user/update-operator/<username:[a-zA-Z0-9-]+>/'      => 'user/update-operator',
                    'user/view-operator/<username:[a-zA-Z0-9-]+>/'        => 'user/view-operator',
                    'user/update-client/<username:[a-zA-Z0-9-]+>/'        => 'user/update-client',
                    'user/view-client/<username:[a-zA-Z0-9-]+>/'          => 'user/view-client',
                ),
            ],
            'log'          => [
                'traceLevel' => YII_DEBUG ? 3 : 0,
                'targets'    => [
                    [
                        'class'  => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'session'      => [
                'timeout' => 60,
            ],
            'user'         => [
                'identityClass'   => 'common\models\User',
                'enableAutoLogin' => FALSE,
            ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'request'      => [
                'class'    => 'common\components\Request',
                'web'      => '/backend/web',
                'adminUrl' => '/application',
            ],
        ],
        'params'              => $params,
    ];
