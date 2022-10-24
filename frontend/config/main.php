<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'name' => 'Kelajak Academy',
    'defaultRoute' => 'main',
    'language' => 'uz',
    'modules' => [
        'control' => [
            'class' => 'frontend\modules\control\Control',
        ],
        'manager' => [
            'class' => 'frontend\modules\manager\Manager',
        ],
        'teacher' => [
            'class' => 'frontend\modules\teacher\Teacher',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-kelajak-academy',
            'baseUrl' => ''
        ],
        'user' => [
            'identityClass' => 'common\models\Member',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-kelajak_academy', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'kelajak-academy-site',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'scriptUrl' => '/index.php',
            'rules' => [
                'main/<action>' => 'site/<action>',
            ],
        ],

    ],
    'params' => $params,
];
