<?php

namespace frontend\controllers;

use common\models\Course;
use common\models\CourseCategory;
use common\models\Contact;
use common\models\MetaTag;
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
        $metaTag = MetaTag::find()->orderBy(['id' => SORT_DESC])->one();
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $metaTag->keyword]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $metaTag->description]);

        return $this->render('index', ['model' => $model, 'course' => $course, 'contact' => $contact]);
    }
}
