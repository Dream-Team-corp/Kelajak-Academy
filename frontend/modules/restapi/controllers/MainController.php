<?php

namespace frontend\modules\restapi\controllers;

use frontend\modules\restapi\models\UserModels;
use yii\rest\ActiveController;

class MainController extends ActiveController
{
    public $modelClass = UserModels::class;

}