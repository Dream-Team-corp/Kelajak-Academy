<?php

namespace frontend\controllers;

use common\models\CourseCategory;
use yii\data\ActiveDataProvider;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new ActiveDataProvider(
            [
                'query' => CourseCategory::find()->where(['status'=> 1])->orderBy(['id'=> SORT_DESC]),
            ]
        );
        return $this->render('index',['model'=>$model]);
    }

}
