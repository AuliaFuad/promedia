<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'urlManagerFotoBerita' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/berita',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerSlider' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/slider',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerTeam' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/team',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerPortofolio' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/portofolio',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerProject' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/project',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerService' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/korina/frontend/web/uploads/service',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-black',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
