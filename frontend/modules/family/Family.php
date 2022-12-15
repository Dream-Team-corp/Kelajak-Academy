<?php

namespace frontend\modules\family;

/**
 * family module definition class
 */
class Family extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\family\controllers';
    public $layout = 'main';
    public $defaultRoute = 'site';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
