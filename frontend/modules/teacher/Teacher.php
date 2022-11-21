<?php

namespace frontend\modules\teacher;


/**
 * teacher module definition class
 */
class Teacher extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\teacher\controllers';
    public $layout = 'main';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        
    }
}
