<?php

    return [
        'timeZone' => 'Asia/Kathmandu',

        'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
        'name'       => 'EcoSanjal',
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'components' => [
            'urlManager' => [
                'class'           => 'yii\web\UrlManager',
                // Disable index.php
                'showScriptName'  => TRUE,
                // Disable r= routes
                'enablePrettyUrl' => TRUE,
                'rules'           => array(
                    //url pattern
                    '<controller:\w+>/<id:\d+>'              => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',
                ),
            ],
            'cache'      => [
                'class' => 'yii\caching\FileCache',
            ],
            'user'       => [
                'identityClass'   => 'common\models\User',
                'enableAutoLogin' => FALSE,
            ],
            'request'    => array(
                'enableCsrfValidation' => TRUE,
            ),
            'misc'       => [
                'class' => 'common\components\Misc',
            ],
        ],
    ];
