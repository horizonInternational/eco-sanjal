<?php

    $params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/../../common/config/params-project.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
    );

    return [
        'id'                  => 'app-frontend',
        'basePath'            => dirname(__DIR__),
        'bootstrap'           => ['log'],
        'controllerNamespace' => 'frontend\controllers',
        'components'          => [
            'urlManager'   => [
                'rules' => array(
                    //custom url for frontend
                    'inventory/albums/<character:[a-zA-Z0-9-]+>/' => 'inventory/albums',
                    'home'=>'site/index',
                    'search'=>'site/search',
                    'about'=>'site/about',
                    'contact'=>'site/contact',
                    'faq'=>'site/faq',

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
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'request'      => [
                'class' => 'common\components\Request',
                'web'   => '/frontend/web',
            ],
            /*
            'mail' => [
                'class' => 'yii\swiftmailer\Mailer',
                'useFileTransport' => true, //for the testing purpose, you need to enable this
                //'viewPath' => '@common/mail',
                'transport' => [
                    'class' => 'Swift_SmtpTransport',
                    // for IPV6 competibility, ping smtp.gmail.com for IP
                    'host' => 'secure161.servconfig.com',
                    //'host' => 'smtp.gmail.com',
                    'username' => 'testing1@klientscape.com',
                    'password' => 'nepal123',
                    'port' => '995',
                    'encryption' => 'tls'
                ]
            ]

            'mail' => [
                'class'            => 'yii\phpmailer\Mailer',
                'viewPath'         => '@common/mail',
                'useFileTransport' => false,
                'config'           => [
                    'mailer'     => 'smtp',
                    'host'       => 'secure161.servconfig.com',
                    'port'       => '995',
                    'smtpsecure' => 'tls',
                    'smtpauth'   => true,
                    'username'   => 'testing1@klientscape.com',
                    'password'   => 'nepal123',
                ]
            ]
            */
        ],
        'params'              => $params,
    ];