<?php

namespace frontend\modules\family\controllers;
use Yii;
use common\models\Member;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * Default controller for the `family` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        
        return $this->render('index');
    }
}
