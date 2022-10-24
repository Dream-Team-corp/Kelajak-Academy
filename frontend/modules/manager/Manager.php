<?php

namespace frontend\modules\manager;
use Yii;
use yii\web\User;
use common\models\Admin;
/**
 * manager module definition class
 */
class Manager extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\manager\controllers';
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
            'loginUrl' => ['/manager/default/login'],
            'identityCookie' => ['name' => 'manager', 'httpOnly' => true],
            'idParam' => 'manager'
        ]);
        // custom initialization code goes here
    }
}
