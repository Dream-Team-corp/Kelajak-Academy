<?php

namespace frontend\controllers;

use common\models\Course;
use yii\data\ActiveDataProvider;

class CourseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $course = new ActiveDataProvider([
            'query' => Course::find()->where(['status'=> Course::STATUS_ACTIVE])->orderBy(['id'=> SORT_DESC]),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);
        return $this->render('index', compact('course'));
    }

}
