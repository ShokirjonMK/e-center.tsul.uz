<?php

namespace backend\modules\v1;

use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\UrlRule;


class Api extends \yii\base\Module
{

    public $controllerNamespace = 'backend\modules\v1\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    'Origin' => static::allowedDomains(),
                    'Access-Control-Request-Method' => ['*'],
                    'Access-Control-Max-Age' => 3600,
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Expose-Headers' => ['*']
                ],
            ],
            'authenticator' => [
                'class' => CompositeAuth::class,
                'only' => [
//                    'user/*',
                    'question/add', 'question/add-answer', 'question/update', 'question/deactive',
                    'profile/add-exp', 'profile/add-edu', 'profile/add-award','profile/change-photo',
                    'profile/update-edu','profile/update-award','profile/update-exp','profile/change-profile',
                    'review/create','post/add', 'penalty/create',
                    'main/index',
                ],
                'except' => [
                    'comment/get-comments', '*/options',
                    'user/index', 'user/signup', 'user/restore-password', 'user/blogs', 'user/questions', 'user/reviews', 'user/answers', 'user/index', 'user/view', 'user/top',
                        'main/index',
                ],
                'authMethods' => [
//					HttpBasicAuth::class,
                    HttpBearerAuth::class,
                ],
            ],
        ]);
    }

    public static $urlRules = [

        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/user',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET index'=>'index',
                'GET index/<id:\d+>'=>'index1',
                'POST index'=>'create',
                'PUT index/<id:\d+>'=>'update',
                'DELETE index/<id:\d+>'=>'delete',

                'GET,HEAD questions' => 'questions',
                'GET,HEAD reviews' => 'reviews',
                'GET,HEAD my-reviews' => 'my-reviews',
                'GET,HEAD blogs' => 'blogs',
                'GET,HEAD answers' => 'answers',
                'GET,HEAD penalties' => 'penalties',
                'GET,HEAD top' => 'top',
                'POST confirm' => 'confirm',
                'POST signup' => 'signup',
                'POST,HEAD logout' => 'logout',
                'GET,HEAD favorite-posts' => 'favorite-posts',
                'GET,HEAD favorite-questions' => 'favorite-questions',

                'GET,HEAD,POST <service:(google|facebook)>/signin' => 'signin',
                'OPTIONS <service:(google|facebook)>/signin' => 'options',

                'POST add-favorite' => 'add-favorite',
                'OPTIONS delete-favorite/<entity:\w+>/<id:\d+>' => 'options',
                'DELETE delete-favorite/<entity:\w+>/<id:\d+>' => 'delete-favorite',

                'GET,HEAD <id:\d+>/reviews' => 'reviews',
                'OPTIONS <id:\d+>/reviews' => 'options',

                'POST,HEAD confirm' => 'confirm',
                'OPTIONS confirm' => 'options',
                'POST,HEAD restore-password' => 'restore-password',
                'OPTIONS restore-password' => 'options',

                'POST,HEAD change-phone' => 'change-phone',
                'OPTIONS change-phone' => 'options',

                'GET,HEAD <id:\d+>/questions' => 'questions',
                'OPTIONS <id:\d+>/questions' => 'options',
                'GET,HEAD <id:\d+>/blogs' => 'blogs',
                'OPTIONS <id:\d+>/blogs' => 'options',
                'GET,HEAD <id:\d+>/answers' => 'answers',
                'OPTIONS <id:\d+>/answers' => 'options',
                'GET,HEAD <id:\d+>/penalties' => 'penalties',
                'OPTIONS <id:\d+>/penalties' => 'options',
            ],
            'pluralize' => false,
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/main',
            'extraPatterns' => [
                
                'OPTIONS <action>' => 'options',
                'GET index'=>'index',
                'GET ftime'=>'ftime',
                'GET group'=>'group',
                'GET libfan'=>'libfan',
                'GET libcat'=>'libcat',
                'GET library'=>'library',
                'GET version'=>'version',
                'GET index/<id:\d+>'=>'index1',
                'POST index'=>'grade',
                'POST time'=>'time',
               
            ],
            'pluralize' => false,
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/lib',
            'extraPatterns' => [
                
                'OPTIONS <action>' => 'options',

                'GET libfan'=>'libfan',
                'GET libcat'=>'libcat',
                'GET library'=>'library',
                               
            ],
            'pluralize' => false,
        ],
        [
            'class' => UrlRule::class,
            'controller' => [
                'v1/experience',
                'v1/education',
                'v1/company',
                'v1/award',
                'v1/answer',
            ],
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options'
            ],
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/penalty',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'POST,HEAD create' => 'create',

                'PUT,HEAD update/<id:\d+>' => 'update',
                'OPTIONS update/<id:\d+>' => 'options',
            ],
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/review',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
            ],
        ],
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/default',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD search' => 'search',
                'GET,HEAD regions' => 'regions',
                'GET,HEAD cities' => 'cities',

                'GET,HEAD translations/<lang:\w+>/<category:\w+>' => 'translations',
                'POST translations/<lang:\w+>/<category:\w+>' => 'add-translation',
                'OPTIONS translations/<lang:\w+>/<category:\w+>' => 'options',
            ],
        ],
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/pages',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD <slug:[a-z0-9_-]+>' => 'view',
                'OPTIONS <slug:[a-z0-9_-]+>' => 'options',
            ],
        ],
    ];

    public static function allowedDomains()
    {
        return [
            '*',
        ];
    }
}