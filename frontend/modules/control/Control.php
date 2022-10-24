<?php

namespace frontend\modules\control;

use Yii;
use yii\web\User;
use common\models\Admin;
/**
 * control module definition class
 */
class Control extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\control\controllers';
    public $defaultRoute = 'main';
    public $layout = 'main';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        Yii::$app->set('user', [
            'class' => User::class,
            'enableAutoLogin' => true,
            'identityClass' => Admin::class,
            'loginUrl' => ['/control/main/login'],
            'identityCookie' => ['name' => 'control', 'httpOnly' => true],
            'idParam' => 'control'
        ]);
    }
}
