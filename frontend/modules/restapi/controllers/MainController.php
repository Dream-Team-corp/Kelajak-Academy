<?php

namespace frontend\modules\restapi\controllers;

use common\models\UseMember;
use yii\rest\ActiveController;

class MainController extends ActiveController
{
    public $modelClass = UseMember::class;

}