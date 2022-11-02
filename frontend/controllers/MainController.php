<?php

namespace frontend\controllers;

use common\models\Course;
use common\models\CourseCategory;
use frontend\models\Contact;
use yii\data\ActiveDataProvider;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new ActiveDataProvider(
            [
                'query' => CourseCategory::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]),
            ]
        );
        $contact = new ActiveDataProvider(
            [
                'query' => Contact::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]),
            ]
        );
        $course = new ActiveDataProvider([
            'query' => Course::find()->where(['status' => Course::STATUS_ACTIVE])->orderBy(['id' => SORT_DESC])->limit(6)
        ]);
        foreach ($model->getModels() as $k) {
            $this->view->registerMetaTag(['name' => 'keywords', 'content' => $k->tag]);
        }

        return $this->render('index', ['model' => $model, 'course' => $course, 'contact'=> $contact]);
    }
}
