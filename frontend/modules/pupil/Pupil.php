<?php

namespace frontend\modules\pupil;

/**
 * pupil module definition class
 */
class Pupil extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\pupil\controllers';
    /**
     * @var string
     */
    public $defaultRoute = 'main';
    /**
     * @var string
     */
    public $layout = 'main';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
